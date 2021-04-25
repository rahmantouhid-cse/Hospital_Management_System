<?php 



if($_SERVER["REQUEST_METHOD"] == "GET") {

	$searchnurse = $_GET['searchnurse'];
	$sql1 = "SELECT userid, FirstName, LastName, DOB, Gender, Email, username, password FROM nurse WHERE userid = " . $searchnurse;

	if(empty($searchnurse)) {
		$sql1 = "SELECT userid, FirstName, LastName, DOB, Gender, Email, username, password FROM nurse";

	
	}
	
	$conn = new mysqli("localhost", "root", "", "hospitalmanagement");

	if($conn -> connect_error) {
		echo "Failed to connect database!";
	}
	else {

		$result = $conn -> query($sql1);

		if($result -> num_rows > 0) {

			echo "<ol>";

			while($row = $result -> fetch_assoc()) {

				//echo "<li>";
				echo "User ID:". "    ". $row["userid"] . "<br>" ."First name:". "    ". $row["FirstName"] . "<br>" ."Last name:". "    ". $row["LastName"] . "<br>" ."Date of birth:". "    ". $row["DOB"] . "<br>" ."Gender:". "    ". $row["Gender"] . "<br>" ."Email:". "    ". $row["Email"] . "<br>" ."User name:". "    ". $row["username"] . "<br>" ."Password:". "    ". $row["password"] ."<br>"."<br>";
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