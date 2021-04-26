<?php




  $hostname = 'localhost';
$hostuser = 'root';
$hostpass = '';
$dbname = 'hospitalmanagement';

 $con = mysqli_connect($hostname, $hostuser, $hostpass, $dbname);
  if($con->connect_errno){
    echo "Database Connection Failed!...";
    echo "<br>";
    echo $conn1->connect_error;
  }



   












$query = "SELECT * FROM `patient`;";
$res = mysqli_query($con, $query);


?>
<?php
include 'head.html';

?>


<!doctype html>
<html lang="en">
  <head>


    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">


    <title>View Patient list</title>
  </head>
  <body>

    <!-- <h1 id="myh1">All User Search</h1> -->
  
  <h2 align=center>Patient Test Result list</h2>
  <h3>Search Patients Username</h3>
<input type="text" name="" id="name" onkeyup="ajax()" />
<input type="button" name="" value="click" onclick="ajax()">

 

<div id="result"></div>

<div class="patient">
    <h2 align=center></h2>
    <table border="1" cellspacing="5" cellpadding="5" width="100%" id="patientTable">
        <thead>
            <tr>
                <th>FirstName</th>
                <th>Lastname</th>
                <th>DOB</th/>
                <th>Gender</th>
                <th>Email</th>
                <th>username</th>
                <th>password</th>
                 <th>Blood</th>
                  <th>disease</th>
                  <th>result</th>
            </tr>
        </thead>
        <tbody>
        <?php
            
            while($row = mysqli_fetch_assoc($res)){
        ?>
            <tr>
                <td><label><?php echo $row['FirstName']; ?></label></td>
                <td><label><?php echo $row['LastName']; ?></label></td>
                <td><label><?php echo $row['DOB']; ?></label></td>
                <td><label><?php echo $row['Gender']; ?></label></td>
                <td><label><?php echo $row['Email']; ?></label></td>
                <td><label><?php echo $row['username']; ?></label></td>
                <td><label><?php echo $row['password']; ?></label></td>
                <td><label><?php echo $row['Blood']; ?></label></td>
                <td><label><?php echo $row['Disease']; ?></label></td>
                <td><label><?php echo $row['result']; ?></label></td>
            </tr>
            <?php } ?>
        </tbody>
    </table>
</div>
<script type="text/javascript" src="script4.js"></script>
<a href="index.php"> Click here to go  go to the Dashboard.</a>
</body>
</html>