<?php
if(isset($_POST["submit"])) {

    $name = $_POST["name"];
    $ques = $_POST["questions"];
    $weight = $_POST["weight"];
    require_once "config.php";
    require_once "functions.php";

    if(emptyFieldsAssessment($name,$ques,$weight) !== false){
        header("location: ../addAssessments.php?error=emptyFields");
        exit();
    }


    createAssessment($conn,$name,$ques,$weight);

} else {
    header("location: ../assessments.php");
    exit();
}