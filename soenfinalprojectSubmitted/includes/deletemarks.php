<?php

require_once "config.php";

if(isset($_GET['deleteid']) and isset($_GET['qnum'])){
    $id = $_GET['deleteid'];
    $qnum = $_GET['qnum'];
    $sql = "DELETE FROM marks WHERE questionNumber = $qnum AND assessmentID = $id";
    $result = mysqli_query($conn,$sql);
    if($result){
        $sql = "SELECT numberOfQuestions FROM assessments WHERE assessmentId=$id";
        $result = mysqli_query($conn,$sql);
        $row = mysqli_fetch_assoc($result);
        $qnum = $row['numberOfQuestions'];
        if(($qnum-1) > 0){
            $sql = "UPDATE assessments SET numberOfQuestions = $qnum-1 WHERE assessmentId=$id";
            $result = mysqli_query($conn,$sql);
        } else {
            $sql = "DELETE FROM assessments WHERE assessmentId = $id";
            $result = mysqli_query($conn,$sql);
            header("location: ../MainTeacher.php?error=none");
            exit();
        }
        header('location: ../edit.php?error=none&editid='.$id.'');
        exit();
    } else {
        header("location: ../edit.php?error=stmtfailed");
        exit();
    }
}