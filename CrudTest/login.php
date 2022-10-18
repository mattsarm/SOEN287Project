<?php
include_once "header.php";
?>

<h1>Log In</h1>
<form action="./includes/login.inc.php" method="POST">
<input type="text" name="username" placeholder="Username">
<input type="password" name="pwd" placeholder="Password">
<button type="submit" name="submit">Log In</button>
</form>

<?php
include_once "footer.php";
?>