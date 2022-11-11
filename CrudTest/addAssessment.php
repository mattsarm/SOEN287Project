<?php
include_once("header.php");
?>

<form action="./includes/assessment.inc.php" method="POST">
<input type="text" name="name" placeholder="Assessment Name">
<label for="quantity">Number of Questions:</label>
<input type="number" id="quantity" name="questions" min="1">
<label for="quantity">Assessment Weight:</label>
<input type="number" id="weight" name="weight" min="1" max="100">
<button type="submit" name="submit">Add Assessment</button>
</form>

<?php
include_once "footer.php";
?>