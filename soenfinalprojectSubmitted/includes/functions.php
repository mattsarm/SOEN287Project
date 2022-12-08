<?php

function displayAssessments($conn){
$sql = "SELECT * FROM assessments";
$result = mysqli_query($conn,$sql);
if($result){
    while($row = mysqli_fetch_assoc($result)){
        $id = $row['assessmentId'];
        $name = $row['assessmentName'];
        $questions = $row['numberOfQuestions'];
        $weight = $row['weight'];
        echo '<tr>
        <th>'.$id.'</th>
        <td>'.$name.'</td>
        <td>'.$questions.'</td>
        <td>'.$weight.'</td>
        <td>
        <button >
        <a href="update.php?updateid='.$id.'">Update</a>
        </button>
        <button >
        <a href="./includes/delete.php?deleteid='.$id.'">Delete</a>
        </button>
        <button >
        <a href="./view.php?viewid='.$id.'">View</a>
        </button>
        </td>
        </tr>';
    }
}
}

function createMarks($conn,$ques,$name){
    $sql = "SELECT usersId FROM users";
    $result1 = mysqli_query($conn,$sql);
    $sql1 = "SELECT assessmentId FROM assessments WHERE assessmentName = '$name'";
    $result2 = mysqli_query($conn,$sql1);

    if($result2){
        $assessmentIdrow = mysqli_fetch_assoc($result2);
        $assessmentId = $assessmentIdrow['assessmentId'];
    }

    if($result1){
        while($row = mysqli_fetch_assoc($result1)){
            $userid = $row['usersId'];
            for($i = 1; $i <= $ques; $i++){
                $sql2 = "INSERT INTO marks(assessmentId,usersId,questionNumber,questionWeight,questionGrade) VALUES($assessmentId,$userid,$i,0,0)";
                $result3 = mysqli_query($conn,$sql2);
            }
        }
    }

}

function createAssessment($conn,$name,$ques,$weight){
    $sql = "INSERT INTO assessments(assessmentName,numberOfQuestions,weight) VALUES('$name',$ques,$weight)";
    $result = mysqli_query($conn,$sql);
    if($result){
        createMarks($conn,$ques,$name);
        header("location: ../MainTeacher.php?error=none");
        exit();
    } else {
        header("location: ../MainTeacher.php?error=stmtfailed");
        exit();
    }
}

function emptyFieldsAssessment($name,$ques,$weight){
$result;
if(empty($name) || empty($ques) ||empty($weight)){
    $result = true;
} else {
    $result = false;
}
return $result;
}

function passDoesNotMatch($pass,$passConfirm){
    $result = false;
    if($pass !== $passConfirm){
        $result = true;
    } else {
        $result = false;
    }
    return $result;
}

function emptyFieldsSignup($name,$username,$email,$pass,$passConfirm){
$result;
if(empty($name) || empty($username) ||empty($email) || empty($pass) ||empty($passConfirm)){
    $result = true;
} else {
    $result = false;
}
return $result;
}

function userIdTaken($conn, $username){
$sql = "SELECT * FROM users WHERE usersUid = ?";
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
    $sql = "INSERT INTO users(usersName,usersUid,usersEmail,usersPwd) VALUES(?,?,?,?);";
    $stmt = mysqli_stmt_init($conn);
    if(!mysqli_stmt_prepare($stmt,$sql)){
        header("location: ../signup.php?error=stmtfailed");
        exit();
    }

    $hashedPass = password_hash($pass, PASSWORD_DEFAULT);
    
    mysqli_stmt_bind_param($stmt,"ssss",$name,$username,$email,$hashedPass);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    header("location: ../login.php?error=none");
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

function loginUser($conn,$username,$pass,$utype){
    $userExists = userIdTaken($conn, $username);
    if($userExists === false){
        header("location: ../login.php?error=wrongUser");
        exit();
    }

    $passHash = $userExists["usersPwd"];
    $checkPwd = password_verify($pass,$passHash);
    if($checkPwd === false){
        header("location: ../login.php?error=wrongPassword");
        exit();
    } else if($checkPwd === true){
        session_start();
        $_SESSION["userid"] = $userExists["usersId"];
        $_SESSION["userUid"] = $userExists["usersUid"];
        $_SESSION["userType"] = $utype;
        $user = $_SESSION["userid"];
        if($utype == "student"){
            header('location: ../MainStudent.php?userid='.$user.'');
            exit();
        } elseif($utype == "teacher"){
            header("location: ../MainTeacher.php");
            exit();
        } else {
            header("location: ../index.php");
        exit();
        }
    }
    function debug_to_console($data) {
        $output = $data;
        if (is_array($output))
            $output = implode(',', $output);
    
        echo "<script>console.log('Debug Objects: " . $output . "' );</script>";
    }
}