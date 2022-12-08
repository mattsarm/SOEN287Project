<?php

if(isset($_POST["submit"])) {

$username = $_POST["uid"];
$pass = $_POST["pwd"];
$utype = $_POST["inlineRadioOptions"];

require_once "config.php";
require_once "functions.php";

if(emptyFieldsLogin($username,$pass) !== false){
    header("location: ../login.php?error=emptyFields");
    exit();
}

loginUser($conn,$username,$pass,$utype);


} else {
    header("location: ../login.php");
    exit();
}
