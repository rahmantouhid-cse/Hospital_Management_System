
<?php include 'head.html'; ?>

<!DOCTYPE html>
<html>
<head>
	<title>Admin login </title>
<form action="" method="post" name="Login_Form">
  <table>
 
   
    <tr>
      <td  valign="top"><h2>Admin Login</h2></td>
    </tr>
    <tr>
      <td align="center" valign="top">Username:</td>
      <td><input name="Username" type="text" class="Input"></td>
    </tr>
    <tr>
      <td align="center">Password:</td>
      <td><input name="Password" type="password" class="Input"></td>
    </tr>
    <tr>
      <td> </td>
      <td><input name="Submit" type="submit" value="Login" class="Button3"></td>
    </tr>

  </table>
</form>


<?php session_start();


if(isset($_POST['Submit']))
{

	$logins = array('admin' => 'admin');

	$Username = isset($_POST['Username']) ? $_POST['Username'] : '';
	$Password = isset($_POST['Password']) ? $_POST['Password'] : '';

	if (isset($logins[$Username]) && $logins[$Username] == $Password)
	{
	$_SESSION['UserData']['Username']=$logins[$Username];
	header("location:Index.php");
exit;
	}
	
else 
{
	$msg="<span style='color:red'>Invalid Login Details</span>";
echo $msg;
}
}
session_unset();
session_destroy();
?>

</body>
<br><br>
<a href="Homepage.html"> Click here to go to the Homepage.</a>
</html>