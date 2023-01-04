<?php
class UsersCtrl extends Users {
    
    public function createUser($userName, $email, $pwd, $bd, $phone_num, $url){
      
        if($this->emptyImput($userName, $email, $pwd, $bd, $phone_num, $url) == false)
        {
            echo " Empty input!";
            header("location : .../index.php?error=emptyinput");
            exit();
        }
        if($this->invalidUsername($userName))
        {
            echo " Username can only contain letters !";
            header("location : .../index.php?error=invalitusername");
            exit();
        }    
        if($this->invalidEmail($email))
        {
            echo " Please enter a real email !";
            header("location : .../index.php?error=invalidemail");
            exit();
        }       
        if($this->invalidPassword($pwd))
        {
            echo "  Password must be 8 chars min, 1 lowercase, 1 uppercase and 1 special sign at least.";
            header("location : .../index.php?error=invalidpassword");
            exit();
        }
        if ($this->invalidUrl($url))
        {
            echo " the url you enter is not valide !";
            header("location : .../index.php?error=invalidurl");
            exit();
        }
        if($this->alreadyExist ($userName, $email))
        {
            echo " this user already exist !";
            header("location : .../index.php?error=alreadyexist");
            exit();
        }
        
        $this->setUser($userName, $email, $pwd, $bd, $phone_num, $url);
    }

     // Error handlers 
    private function emptyImput($userName, $email, $pwd, $bd, $phone_num, $url){
        $result = true;
        if(empty($userName) || empty($email) || empty($pwd) || empty($bd) || empty($phone_num) || empty($url)){
            $result = false;
        }
        return $result;
    }

    private function invalidUsername($userName){
        $result = true;
        if (!preg_match("/^[a-zA-Z]*$/", $userName))
        {
            $result = false;
        }
        return $result;
    }

    private function invalidEmail($email){
        $result = true;
        if(!filter_var($email, FILTER_VALIDATE_EMAIL))
        {
            $result = false;
        }
        return $result;
    }
    private function invalidPassword($pwd){
        $result = true;
        if (strlen($pwd) < 8 || !preg_match("/^[a-zA-Z]*$/", $pwd) || !preg_match('[@_!#$%^&*()<>?/|}{~:]', $pwd))
        {
            $result = false;
        }
        return $result;
    }
    private function invalidUrl($url){
        $result = true;
        if (!preg_match("/\.(com)+$/", $url))
        {
            $result = false;
        }
        return $result;
    }

    private function alreadyExist ($userName, $email){
        $result = true;
        if(!$this->checkUser($userName, $email))
        {
            $result = false;
        }
        return $result;
    }
}

