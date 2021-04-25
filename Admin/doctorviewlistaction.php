<?php 

if($_SERVER["REQUEST_METHOD"] == "GET") {

	$searchdoctor = $_GET['searchdoctor'];
	$sql = "SELECT duserid, FirstName, LastName, DOB, Gender, Email, username, password, Speciality FROM doctor WHERE duserid = " . $searchdoctor;

	if(empty($searchdoctor)) {
		$sql = "SELECT duserid, FirstName, LastName, DOB, Gender, Email, username, password, Speciality FROM doctor";

	}
	
	$conn = new mysqli("localhost", "root", "", "hospitalmanagement");

	if($conn -> connect_error) {
		echo "Failed to connect database!";
	}
	else {

		$result = $conn -> query($sql);

		if($result -> num_rows > 0) {

			echo "<ol>";

			while($row = $result -> fetch_assoc()) {

				//echo "<li>";
				echo "User ID:". "    ". $row["duserid"] . "<br>" ."First name:". "    ". $row["FirstName"] . "<br>" ."Last name:". "    ". $row["LastName"] . "<br>" ."Date of birth:". "    ". $row["DOB"] . "<br>" ."Gender:". "    ". $row["Gender"] . "<br>" ."Email:". "    ". $row["Email"] . "<br>" ."User name:". "    ". $row["username"] . "<br>" ."Password:". "    ". $row["password"] . "<br>" ."Speciality:". "    ". $row["Speciality"] ."<br>"."<br>";
				//echo "</li>";
			}

			echo "</ol>";
		} 
		else {
			echo "Not a valid user ID!";
		}
	}
		
	$conn -> close();
}


?>