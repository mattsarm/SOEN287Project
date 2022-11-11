<?php

require_once "config.php";

if(isset($_GET['deleteid'])){
    $id = $_GET['deleteid'];

    $sql = "DELETE FROM assessments WHERE assessmentId = $id";
    $result = mysqli_query($conn,$sql);
    if($result){
        header("location: ../assessments.php?error=none");
        exit();
    } else {
        header("location: ../assessments.php?error=stmtfailed");
        exit();
    }
}
