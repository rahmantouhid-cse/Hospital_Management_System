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



   












$query = "SELECT * FROM `appointment`;";
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


    <title>View Patient Appointment</title>
  </head>
  <body>

    <!-- <h1 id="myh1">All User Search</h1> -->
  
  <h2 align=center>Patient Appointment list</h2>
  <h3>Search Patients Username</h3>
<input type="text" name="" id="name" onkeyup="ajax()" />
<input type="button" name="" value="click" onclick="ajax()">

 

<div id="result"></div>

<div class="patient">
    <h2 align=center></h2>
    <table border="1" cellspacing="5" cellpadding="5" width="100%" id="appointmentTable">
        <thead>
            <tr>
                <th>ID</th>
                <th>puserid</th>
                <th>duserid</th/>
                <th>starttime</th>
                <th>endtime</th>
                
            </tr>
        </thead>
        <tbody>
        <?php
            
            while($row = mysqli_fetch_assoc($res)){
        ?>
            <tr>
                <td><label><?php echo $row['ID']; ?></label></td>
                <td><label><?php echo $row['puserid']; ?></label></td>
                <td><label><?php echo $row['duserid']; ?></label></td>
                <td><label><?php echo $row['starttime']; ?></label></td>
                <td><label><?php echo $row['endtime']; ?></label></td>
              
            </tr>
            <?php } ?>
        </tbody>
    </table>
</div>
<script type="text/javascript" src="script3.js"></script>
<a href="index.php"> Click here to go  go to the Dashboard.</a>
</body>
</html>