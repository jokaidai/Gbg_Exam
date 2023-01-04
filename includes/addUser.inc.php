<?php
include 'class-autoloader.inc.php'; 

if(isset($_POST["submit"]))
{
    // Grabbing the data

    $userid = $_POST["userid"];
    $email = $_POST["email"];
    $password = $_POST["pwd"];
    $dob = $_POST["dob"];
    $phoneNum = $_POST["phoneNum"];
    $url = $_POST["url"];

    // Instantiate UserCtrl class

    $addUser = new UsersCtrl();
   
    // Running error handlers and user added

    $addUser->createUser($userid, $email, $password, $dob, $phoneNum, $url);

    // Going back to front page

    header("location: ../index.php?error=none");
}