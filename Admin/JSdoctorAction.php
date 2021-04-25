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
		 echo "please fill up first name properly";
		 echo "<br>";
	}
	else{

		$FirstName = $_POST['fname'];
	 

	}
		if(empty($_POST['lname'])){
		 echo "please fill up last name properly"; 
				echo "<br>";
	}
	else{

		$LastName = $_POST['lname'];
		

	}
		if(empty($_POST['dob'])){
		 echo "please fill up date of birth properly"; 
				 echo "<br>";
	}
	else{

		$DOB = $_POST['dob'];
		

	}
		if(empty($_POST['gender'])){
		 echo "please fill up gender properly"; 
				 echo "<br>";
	}
	else{

		$Gender = $_POST['gender'];
	

	}
		if(empty($_POST['email'])){
		 echo "please fill up email properly"; 
			echo "<br>";
	}
	else{

		$Email = $_POST['email'];
		

	}
		if(empty($_POST['username'])){
		 echo "please fill up user name properly"; 
				 echo "<br>";
	}
	else{

		$UserName = $_POST['username'];
		echo "<br>";

	}
		if(empty($_POST['password'])){
		 echo "please fill up password properly"; 
				 echo "<br>";
	}
	else{

		$Password = $_POST['password'];
		

	}
	if(empty($_POST['Speciality'])){
		 echo "please fill up Speciality properly"; 
				 echo "<br>";
	}
	else{

				$Speciality = $_POST['Speciality'];
		

	}
	if(empty($_POST['starttime'])){
		 echo "please fill up Start Time properly"; 
				 echo "<br>";
	}
	else{

				$starttime = $_POST['starttime'];
		

	}if(empty($_POST['endtime'])){
		 echo "please fill up End Time properly"; 
				 echo "<br>";
	}
	else{

				$endtime = $_POST['endtime'];
		

	}



	
}
if($_SERVER["REQUEST_METHOD"] == "POST") {

			if(empty($_POST['lname']) || empty($_POST['fname']) || empty($_POST['dob']) || empty($_POST['gender']) || empty($_POST['email']) || empty($_POST['username']) || empty($_POST['password']) || empty($_POST['Speciality']|| empty($_POST['starttime']) || empty($_POST['endtime']) )) {
				echo "invalid data insertion";
			}
				else{

	$hostname = "localhost";
	$username = "root";
	$password = "";
	$dbname = "hospitalmanagement";

	$con = mysqli_connect($hostname, $username, $password, $dbname);
	if($con->connect_errno){
		echo "Database Connection Failed!...";
		echo "<br>";
		echo $conn1->connect_error;
	}

	else {
		echo "Database Connection Successful!";
			echo "<br>";

		$sql = "INSERT INTO doctor ( FirstName, LastName, DOB, Gender, Email, username, password, Speciality , starttime , endtime) VALUES ('$FirstName', '$LastName', '$DOB' ,'$Gender' ,'$Email' ,  '$UserName', '$Password', '$Speciality',  '$starttime' , '$endtime')";
		if($con->query($sql)) {
			echo "Data insertion Successful";
			echo "<br>";
			?>
                     <script type="text/javascript">
					 
            alert("Doctor Added Successfully.");
            window.location = "AdminPanel.php";
        </script>
        <?php
		}
		else {
			echo "Failed to Insert Data.";
			echo "<br>";
			echo $con->error;
		}
	}
}}
?>