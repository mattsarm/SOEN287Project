<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Document</title>
</head>

<body>
<?php
if(isset($_SESSION["userUid"])){
    echo "<a href='signup.php'>Sign Up Again</a>";
    echo "<a href='logout.php'>Log Out</a>";
} else {
    echo "<a href='signup.php'>Sign Up</a>";
    echo "<a href='login.php'>Log In</a>";
}
?>
<a href="assessments.php">Assessments</a>


