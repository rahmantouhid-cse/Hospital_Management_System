<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "hospitalmanagement";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if($_SERVER["REQUEST_METHOD"] == "POST") {
$deletedoctor=$_POST['deletedoctor'];
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// sql to delete a record
$sql = "DELETE FROM doctor WHERE duserid = '$deletedoctor'";
if ($conn->query($sql) === TRUE) {
  echo "Record deleted successfully";
} else {
  echo "Error deleting record: " . $conn->error;
}
}
else
{echo "post error";}
$conn->close();
?>