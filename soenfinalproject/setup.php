
<?php

$serverName = "localhost";
$dbUser = "root";
$dbPass = "";
$dbName = "crudtest";


$conn = mysqli_connect($serverName,$dbUser,$dbPass,$dbName);

if(!$conn){
   die("Connection failed: ". mysqli_connect_error($conn));
}


$sql = "CREATE TABLE users (
    usersId INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
    usersName VARCHAR(128) NOT NULL,
    usersEmail VARCHAR(128) NOT NULL,
    usersUid VARCHAR(128) NOT NULL,
    usersPwd VARCHAR(128) NOT NULL
    )";

$result = mysqli_query($conn,$sql);

if($result){
    echo "users table made succsessfully";
}

$sql = "CREATE TABLE assessments (
    assessmentId INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
    assessmentName VARCHAR(128) NOT NULL,
    numberOfQuestions INT(11) NOT NULL,
    weight INT(11) NOT NULL
    )";


$result = mysqli_query($conn,$sql);

if($result){
    echo "assessment table created succsessfully";
}

$sql = "CREATE TABLE marks (
    assessmentId INT(11) NOT NULL,
    usersId INT(11) NOT NULL,
    questionNumber INT(11) NOT NULL,
    questionWeight INT(11) NOT NULL,
    questionGrade INT(11) NOT NULL
    )";

$result = mysqli_query($conn,$sql);

if($result){
    echo "marks table created succsessfully";
}