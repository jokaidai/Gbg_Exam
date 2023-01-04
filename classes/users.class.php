<?php 

class Users extends Dbh{

    protected function getUser($userName){
        $sql = "SELECT * FROM users WHERE Username = ?";
        $stmt = $this->conect()->prepare($sql);
        $stmt->execute([$userName]);

        $results = $stmt->fetchAll();

        return $results;
    }

    protected function checkUser($userName, $email){
        $sql = "SELECT Username FROM users WHERE Username = ? OR Email = ?";
        $stmt = $this->conect()->prepare($sql);

        if(!$stmt->execute(array($userName, $email))){
            $stmt = null;
            header("location : .../index.php?error=stmtfailed");
            exit();
        }
        $resultCheck = true; 
        if($stmt->rowCount() > 0){
            $resultCheck = false;
        }
        return $resultCheck;
    }

    protected function setUser($userName, $email, $pwd, $bd, $phone_num, $url){
        $sql = "INSERT INTO users(Username, Email, Password, Birthdate, Phone_number, URL) VALUES (?, ?, ?, ?, ?, ?)";
        $stmt = $this->conect()->prepare($sql);
        $stmt->execute([$userName, $email, $pwd, $bd, $phone_num, $url]);

    }
}


