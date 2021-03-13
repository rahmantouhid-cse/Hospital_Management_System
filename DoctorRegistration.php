<?php session_start(); 

?>
<!DOCTYPE html>
<html>
<head>
	<title>Doctor Registration </title>
</head>

<?php
include 'head.html';

?>

<body>


	<h2>Doctor Registration</h2>
	<?php


		$FirstName= "";
		$LastName = "";
		$DOB = "";
		$Gender = "";
		$Email = "";
		$UserName = "";
		$Password = "";
		$Speciality ="";
		$FirstNameErr= "";
		$LastNameErr = "";
		$DOBErr = "";
		$GenderErr = "";
		$EmailErr = "";
		$UserNameErr = "";
		$PasswordErr = "";
		



if( $_SERVER["REQUEST_METHOD"] == "POST"){
	
	
	
	if(empty($_POST['fname'])){
		 $FirstNameErr = "please fill up this properly";
		 
	}
	else{

		$FirstName = $_POST['fname'];
	 

	}
		if(empty($_POST['lname'])){
		$LastNameErr = "please fill up this properly"; 
				
	}
	else{

		$LastName = $_POST['lname'];
		

	}
		if(empty($_POST['dob'])){
		$DOBErr = "please fill up this properly"; 
				 
	}
	else{

		$DOB = $_POST['dob'];
		

	}
		if(empty($_POST['gender'])){
		$GenderErr = "please fill up this properly"; 
				 
	}
	else{

		$Gender = $_POST['gender'];
	

	}
		if(empty($_POST['email'])){
		$EmailErr = "please fill up this properly"; 
			
	}
	else{

		$Email = $_POST['email'];
		

	}
		if(empty($_POST['username'])){
		$UserNameErr = "please fill up this properly"; 
				 
	}
	else{

		$UserName = $_POST['username'];
		

	}
		if(empty($_POST['password'])){
		$PasswordErr = "please fill up this properly"; 
				 
	}
	else{

		$Password = $_POST['password'];
		

	}
		$Speciality = $_POST['Speciality'];


	
}



?>




<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?> " method="POST">
	<label for = "fname"> Enter your first name </label>
<input type="text" name="fname" id="fname">
<p style='color:red'> <?php echo $FirstNameErr; ?> </p>

<br>

<label for = "lname"> Enter your last name </label>
<input type="text" name="lname" id="lname">
<p style='color:red'> <?php echo $LastNameErr; ?> </p>
<br>

<label for = "dob"> Enter your date of birth </label>
<input type="date" name="dob" id="dob">
<p style='color:red'> <?php echo $DOBErr; ?> </p>
<br>

<label for = "gender"> Gender </label>
<input type="radio" name="gender" id="male" value="male">
<label for = "male"> Male </label>
<input type="radio" name="gender" id="female" value="female">
<label for = "female"> Female </label>
<p style='color:red'> <?php echo $GenderErr; ?> </p>
<br>

<label for = "email"> Email </label>
<input type="email" name="email" id="email">
<p style='color:red'> <?php echo $EmailErr; ?> </p>
<br>



<label for = "username">User ID </label>
<input type="text" name="username" id="username">
<p style='color:red'> <?php echo $UserNameErr; ?> </p>
<br>

<label for = "password"> Password </label>
<input type="password" name="password" id="password">
<p style='color:red'> <?php echo $PasswordErr; ?> </p>
<br>

  <label for="Speciality">Choose Speciality:</label>
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
<input type="submit" value="Submit">
</form>


<br>

<?php



	
        $f = fopen("DoctorInfo.txt","w");
        fwrite($f, "First Name= ".$FirstName ."\n");
        fwrite($f, "Last Name= ".$LastName ."\n");
        fwrite($f, "DOB= ".$DOB ."\n");
        fwrite($f, "Gender= ".$Gender ."\n");        
        fwrite($f, "Email= ".$Email. "\n");
        fwrite($f, "User ID=".$UserName. "\n");
        fwrite($f, "Password=".$Password. "\n");
        fwrite($f, "Speciality=".$Speciality. "\n");




        fclose($f);




	$filepath= "DoctorInfo.txt";
	$f1= fopen($filepath,'r');
	$s1= fread($f1,filesize($filepath));
	$data = (explode("\n",$s1));
	echo $data[0];
	echo "<br>";
		echo $data[1];
	echo "<br>";
		echo $data[2];
	echo "<br>";
		echo $data[3];
	echo "<br>";
		echo $data[4];
	echo "<br>";
		echo $data[5];
	echo "<br>";
		echo $data[6];
	echo "<br>";
	
	echo $data[7];
	echo "<br>";
	
	echo $data[8];
	echo "<br>";
	
	fclose($f1);



 session_destroy();


	?>
</body>
<a href="Homepage.html"> Click here to go to the Homepage.</a>
</html>