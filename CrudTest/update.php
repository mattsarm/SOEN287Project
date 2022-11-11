<?php
include_once("header.php");
include_once("./includes/config.php");

if(isset($_GET['updateid'])){
$id = $_GET['updateid'];
$sql = "SELECT * FROM assessments WHERE assessmentId = $id";
$result = mysqli_query($conn,$sql);
if($result){
    $row = mysqli_fetch_assoc($result);
    $name = $row['assessmentName'];
    $questions = $row['numberOfQuestions'];
    $weight = $row['weight'];
}
}

if(isset($_POST['submit'])){
    $id = $_GET['updateid'];
    $name = $_POST['name'];
    $questions = $_POST['questions'];
    $weight = $_POST['weight'];
    $sql = "UPDATE assessments SET assessmentName = '$name', numberOfQuestions = $questions, weight = $weight WHERE assessmentId = $id";
    $result = mysqli_query($conn,$sql);
    if($result){
        header("location: assessments.php");
    }
}


?>


<form  method="POST">
<input type="text" name="name" placeholder="Assessment Name" value= <?php echo $name ?>>
<label for="quantity">Number of Questions:</label>
<input type="number" id="quantity" name="questions" min="1" value= <?php echo $questions ?>>
<label for="quantity">Assessment Weight:</label>
<input type="number" id="weight" name="weight" min="1" max="100" value= <?php echo $weight ?>>
<button type="submit" name="submit">Update Assessment</button>
</form>

<?php
include_once "footer.php";
?>