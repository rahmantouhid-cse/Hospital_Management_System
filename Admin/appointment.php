
<?php session_start();
   include 'head.html'; 
$con=mysqli_connect("localhost","root","","hospitalmanagement"); 
if(!$con) { die(" Connection Error "); } 

    $query = " select * from appointment ";
    $result = mysqli_query($con,$query);




  ?>
  
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" a href="CSS/bootstrap.css">
    <title>Add Appointment</title>
</head>
<body >

        <div class="container">
            <div class="row">
                <div class="col ml-auto">
                    <div class="card mt-5">
                        <table class="table table-bordered">
                            <tr>
                                <td> Patient ID </td>
                                
                                <td> Doctor ID </td>
                               
                                <td> Start time </td>
                                
                                <td> End time </td>
                                

                               
                            </tr>

                            <?php 
                                    
                                    while($row=mysqli_fetch_assoc($result))
                                    {
                                        $apuserid = $row['puserid'];
                                        $aduserid = $row['duserid'];
                                        $astarttime = $row['starttime'];
                                        $aendtime=$row['endtime'];

                                        
                            ?>
                                    <tr>
                                        <td><?php echo $apuserid ?></td>
                                       
                                        <td><?php echo $aduserid ?></td>
                                        
                                        <td><?php echo $astarttime ?></td>
                                        
                                        <td><?php echo $aendtime ?></td>
                                       

                                       

                                    </tr>        
                            <?php 
                                    }
                            ?>                                                                    
                                   

                        </table>
                    </div>
                </div>
            </div>
        </div>
          <br>  <br>

</body>


<br><br>
        <div style="position:fixed;
   right:10px;
   top:40px;" ><a href="AdminPanel.php"> back to Admin panel</a>
</div>
</html>
