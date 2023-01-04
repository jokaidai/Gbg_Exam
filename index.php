<?php
include 'includes/class-autoloader.inc.php'; 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GBG Exam</title>
</head>
<body>
    <h2>ADD USER</h2>
    <form action="includes/addUser.inc.php" method="post">
        <input type="text" name="userid" placeholder="Username">
        <input type="text" name="email" placeholder="Email">
        <input type="password" name="pwd" placeholder="Password">
        <input type="date" name="dob">
        <input type="text" name="phoneNum" placeholder="Phone Number">
        <input type="text" name="url" placeholder="Url">
        <br>
        <button type="submit" name="submit"> ADD </button>
    </form>
    <?php
//     $usersObj = new UsersView();  
//     $usersObj->showUser("Jokaidai");

//     $usersObj2 = new UsersCtrl();
//     $usersObj2->createUser("Pas Net", "PasNet@gmail.com", "2314", "2015-11-11", "0521423352", "url");

    ?>
</body>
</html>