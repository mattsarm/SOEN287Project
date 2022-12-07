<?php

if(isset($_POST["submit"])){
 $name = $_POST["name"];
 $username = $_POST["uid"];
 $email = $_POST["email"];
 $pass = $_POST["pwd"];
 $passConfirm = $_POST["pwdconfirm"];

require_once "config.php";
require_once "functions.php";

if(emptyFieldsSignup($name,$username,$email,$pass,$passConfirm) !== false){
    header("location: ../signup.php?error=emptyFields");
    exit();
}

if(passDoesNotMatch($pass,$passConfirm)){
    header("location: ../signup.php?error=passNotMatch");
    exit();
}

if(userIdTaken($conn, $username) !== false){
    header("location: ../signup.php?error=usernameTaken");
    exit();
}

createUser($conn, $name,$username,$email,$pass);

} else {
    header("location: ../signup.php");
}
