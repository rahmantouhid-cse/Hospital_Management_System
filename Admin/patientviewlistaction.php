<?php 



if($_SERVER["REQUEST_METHOD"] == "GET") {

	$searchpatient = $_GET['searchpatient'];
	$sql = "SELECT puserid, FirstName, LastName, DOB, Gender, Email, username, password, Blood,Problem , Disease FROM patient WHERE puserid = " . $searchpatient;

	if(empty($searchpatient)) {
		$sql = "SELECT puserid, FirstName, LastName, DOB, Gender, Email, username, password, Blood,Problem, Disease FROM patient";

	
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

			
				echo "User ID:". "    ". $row["puserid"] . "<br>" ."First name:". "    ". $row["FirstName"] . "<br>" ."Last name:". "    ". $row["LastName"] . "<br>" ."Date of birth:". "    ". $row["DOB"] . "<br>" ."Gender:". "    ". $row["Gender"] . "<br>" ."Email:". "    ". $row["Email"] . "<br>" ."User name:". "    ". $row["username"] . "<br>" ."Password:". "    ". $row["password"] . "<br>" ."Blood Group:". "    ". $row["Blood"] . "<br>" ."Problem:". "    ". $row["Problem"] ."<br>" ."Disease Type:". "    ". $row["Disease"] ."<br>"."<br>";
				
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