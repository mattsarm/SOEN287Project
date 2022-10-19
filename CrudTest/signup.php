<?php
include_once "header.php";
?>

<h1>sign up</h1>
<form action="./includes/signup.inc.php" method="POST">
<input type="text" name="name" placeholder="Full name">
<input type="text" name="uid" placeholder="Username">
<input type="text" name="email" placeholder="Email">
<input type="password" name="pwd" placeholder="Password">
<input type="password" name="pwdconfirm" placeholder="Confirm Password">
<button type="submit" name="submit">Sign Up</button>
</form>

<?php
include_once "footer.php";
?>