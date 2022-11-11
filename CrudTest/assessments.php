<?php
include_once("header.php");

require_once "./includes/config.php";
require_once "./includes/functions.php";
?>


<table>
<tr>
    <th>Assessment ID</th>
    <th>Assessment Name</th>
    <th>Number of Questions</th>
    <th>Weight</th>
    <th>Operations</th>
</tr>
<?php
displayAssessments($conn);
?>
</table>

<button>
<a href="addAssessment.php">Add Assessment</a> 
</button>

<?php
include_once "footer.php";
?>