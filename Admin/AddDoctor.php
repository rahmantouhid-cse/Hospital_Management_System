<?php session_start(); 

?>
<!DOCTYPE html>
<html>
<head>
	<title>Add Doctor</title>
</head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" a href="../CSS/bootstrap.css">

<?php
include 'head.html';

?>

<body>
        <div style="position:fixed;
   right:10px;
   top:40px;" ><a href="AdminPanel.php"> back to Admin panel</a>
</div>

	<h2 align="center">Add Doctor </h2>
<div class="col ml-5">






<form name="AddDoctor" action="JSdoctorAction.php" onsubmit="return validate()" method="POST">
	<label for = "fname"> First name :&nbsp;&nbsp;&nbsp; </label>
<input type="text" name="fname" id="fname">


<br>
<br>

<label for = "lname"> Last name :&nbsp;&nbsp;&nbsp;</label>
<input type="text" name="lname" id="lname">

<br>
<br>

<label for = "dob"> Date of birth :&nbsp;&nbsp;&nbsp;</label>
<input type="date" name="dob" id="dob">

<br>
<br>

<label for = "gender"> Gender :&nbsp;&nbsp;&nbsp;</label>
<input type="radio" name="gender" id="male" value="male">
<label for = "male"> Male </label>
<input type="radio" name="gender" id="female" value="female">
<label for = "female"> Female </label>

<br>
<br>

<label for = "email"> Email :&nbsp;&nbsp;&nbsp;</label>
<input type="email" name="email" id="email">

<br>
<br>



<label for = "username">User Name :&nbsp;&nbsp;&nbsp;</label>
<input type="text" name="username" id="username">

<br>
<br>

<label for = "password"> Password :&nbsp;&nbsp;&nbsp;</label>
<input type="password" name="password" id="password">

<br>
<br>


  <label for="Speciality">Choose Speciality :&nbsp;&nbsp;&nbsp;</label>
  <select name="Speciality" id="Speciality">

      <option value=""> </option>
      <option value="Psychiatrist">Psychiatrist </option>
      <option value="Optometrist">Optometrist</option>
      <option value="Dentist">Dentist </option>
      <option value="Cardiologist">Cardiologist </option>
      <option value="Nephrologist">Nephrologist </option>
      <option value="Dermatologist">Dermatologist</option>
      <option value="Neurologist">Neurologist</option>
  </select>

<br>
<br>


  <label for="starttime">Choose Start Time :&nbsp;&nbsp;&nbsp;</label>
  <select name="starttime" id="starttime">

      <option value=""> </option>
      <option value="10 AM">10 AM </option>
      <option value="11 AM">11 AM</option>
      <option value="12 PM">12 PM </option>
      <option value="01 PM">01 PM </option>
      <option value="02 PM">02 PM </option>
      <option value="03 PM">03 PM</option>
      <option value="04 PM">04 PM</option>
	  <option value="05 PM">05 PM</option>
	  <option value="06 PM">06 PM</option>
	  <option value="07 PM">07 PM</option>
	  
  </select>
  
  
<br>
<br>

    <label for="endtime">Choose End Time :&nbsp;&nbsp;&nbsp;</label>
  <select name="endtime" id="endtime">

      <option value=""> </option>
      
      <option value="11 AM">11 AM</option>
      <option value="12 PM">12 PM </option>
      <option value="01 PM">01 PM </option>
      <option value="02 PM">02 PM </option>
      <option value="03 PM">03 PM</option>
      <option value="04 PM">04 PM</option>
	  <option value="05 PM">05 PM</option>
	  <option value="06 PM">06 PM</option>
	  <option value="07 PM">07 PM</option>
	  <option value="08 PM">08 PM</option>
  </select>


<br>
<br>
<input type="submit" value="Submit" style="height:30px; width:150px">
</form>

<br>

<br>
	<p id="errorMsg"></p>

	<script>
			function validate() {
				var isValid = false;
				var fname = document.forms["AddDoctor"]["fname"].value;
				var lname = document.forms["AddDoctor"]["lname"].value;
				var dob = document.forms["AddDoctor"]["dob"].value;
				var gender = document.forms["AddDoctor"]["gender"].value;
				var email = document.forms["AddDoctor"]["email"].value;
				var username = document.forms["AddDoctor"]["username"].value;
				var password = document.forms["AddDoctor"]["password"].value;
				var Speciality = document.forms["AddDoctor"]["Speciality"].value;
				var starttime = document.forms["AddDoctor"]["starttime"].value;
				var endtime = document.forms["AddDoctor"]["endtime"].value;

				if(fname == "" || lname == "" || dob == "" || gender == "" || email == "" || username == "" || password == "" || Speciality == "" || starttime == "" || endtime == "") {
					document.getElementById("errorMsg").innerHTML = "<b>Please fill up the form properly.</b>";
					document.getElementById("errorMsg").style.color = "red";
				}
				else {
					isValid = true;
				}

				return isValid;
			}
		</script>



</div>


</body>

</html>