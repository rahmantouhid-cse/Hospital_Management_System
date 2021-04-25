<?php include 'head.html'; ?>

<?php  
session_start();
 
if(!isset($_SESSION['username']))
{
    header('location:adminlogin.php');
}
?>

<!DOCTYPE html>
<html>
<head>

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" a href="../CSS/bootstrap.css">

</head>
<body>
	<div style="position:fixed;
   right:20px;
   top:65px;" >
	<a href="../Logout.php" >Logout</a>
</div>
<div align="center">


	<title>Admin Panel</title>
		<br><br>	
	<a href="AddDoctor.php"> Add Doctor</a>
	<br><br>
	<a href="AddNurse.php"> Add Nurse</a>
	<br><br>
	<a href="AddPatient.php"> Add Patient</a>
	<br><br>
	<a href="viewlist.php"> Seach By User Type and User ID</a>
	
	<br><br>
	<a href="updatedoctor.php"> Update Doctor Information</a>
	<br><br>
	<a href="updatenurse.php"> Update Nurse Information</a>
	<br><br>
	<a href="updatepatient.php"> Update Patient Information</a>
	<br><br>
	<a href="deletedoctor.php"> Delete Doctor </a>
	<br><br>
	<a href="deletenurse.php"> Delete Nurse </a>
	<br><br>
	<a href="deletepatient.php"> Delete Patient </a>
	<br><br>
	<a href="appointment.php"> Appointment List</a>


</div>

</body>



</html>
<?php include 'footer.html'; ?>