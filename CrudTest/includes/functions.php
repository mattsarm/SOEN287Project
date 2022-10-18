<?php

function passDoesNotMatch($pass,$passConfirm){
    $result = false;
    if($pass !== $passConfirm){
        $result = true;
    } else {
        $result = false;
    }
    return $result;
}

function emptyFields($name,$username,$email,$pass,$passConfirm){
$result;
if(empty($name) || empty($username) ||empty($email) || empty($pass) ||empty($passConfirm)){
    $result = true;
} else {
    $result = false;
}
return $result;
}

function userIdTaken($conn, $username){
$sql = "SELECT * FROM users WHERE usersUsername = ?";
$stmt = mysqli_stmt_init($conn);
if(!mysqli_stmt_prepare($stmt,$sql)){
    header("location: ../signup.php?error=stmtfailed");
    exit();
}

mysqli_stmt_bind_param($stmt,"s",$username);
mysqli_stmt_execute($stmt);

$resultData = mysqli_stmt_get_result($stmt);

if($row = mysqli_fetch_assoc($resultData)){
 return $row;
} else {
    $result = false;
    return $result;
}

mysqli_stmt_close($stmt);

}

function createUser($conn, $name,$username,$email,$pass){
    $sql = "INSERT INTO users(usersName,usersUsername,usersEmail,usersPass) VALUES(?,?,?,?);";
    $stmt = mysqli_stmt_init($conn);
    if(!mysqli_stmt_prepare($stmt,$sql)){
        header("location: ../signup.php?error=stmtfailed");
        exit();
    }

    $hashedPass = password_hash($pass, PASSWORD_DEFAULT);
    
    mysqli_stmt_bind_param($stmt,"ssss",$name,$username,$email,$hashedPass);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    header("location: ../signup.php?error=none");
    exit();
}

function emptyFieldsLogin($username,$pass) {
    $result;
    if(empty($username) || empty($pass)){
        $result = true;
    } else {
        $result = false;
    }
    return $result;
    }

function loginUser($conn,$username,$pass){
    $userExists = userIdTaken($conn, $username);
    if(userExist === false){

    }
}