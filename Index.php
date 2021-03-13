<?php
include 'head.html';

?>
<?php session_start(); /* Starts the session */
if(!isset($_SESSION['UserData']['Username'])){
header("location:AdminLogin.php");
exit;
}
?>

Congratulation! You have successfully logged in. 
<br><br><br><a href="Logout.php">Click here</a> to Logout.