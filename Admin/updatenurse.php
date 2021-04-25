<!DOCTYPE html>
<html lang="en-US">
  <head>
  <title>Update Nurse Information</title>
 
  </head>

      <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" a href="CSS/bootstrap.css">
    
  <?php 
include 'head.html'; 

  ?>
<body>
  <div class="col ml-5">

    <label for="searchnurse">Search Nurse by User ID:</label>
  <br>
  <input type="number" name="searchnurse" id="searchnurse">

  <button id="search" onclick="searchnurse()" style="height:30px; width:150px;">Search</button>
    <p id="p3"></p>


        <hr>
          <h2>Update Nurse Information</h2>
          <br>

 

            <label>Nurse ID :&nbsp;&nbsp;&nbsp;</label>
            <input type="text"  name="userid" style="width:20em;" id="userid" >

      <br><br>

            <label>First Name :&nbsp;&nbsp;&nbsp;</label>
            <input type="text"  name="FirstName" style="width:20em;" id="FirstName" >

      <br><br>

            <label>Last Name :&nbsp;&nbsp;&nbsp;</label>
            <input type="text"  name="LastName" style="width:20em;" id="LastName" >

      <br><br>


            <label>Date of Birth :&nbsp;&nbsp;&nbsp;</label>
            <input type="date"  name="DOB" style="width:20em;" id="DOB" >

      <br><br>


            <label>Email :&nbsp;&nbsp;&nbsp;</label>
            <input type="email"  name="Email" style="width:20em;" id="Email"  >

      <br><br>


            <label>User name :&nbsp;&nbsp;&nbsp;</label>
            <input type="text"  name="username" style="width:20em;" id="username" >

      <br><br>


            <label>Password :&nbsp;&nbsp;&nbsp;</label>
            <input type="text"  name="password" style="width:20em;" id="password" >

      <br><br>


              <button id="submit" onclick="submit()" style="height:30px; width:150px;">Submit</button>
<br><br>


  <p id="p1"></p>

      
        <div style="position:fixed;
   right:10px;
   top:40px;" ><a href="AdminPanel.php"> back to Admin panel</a>
</div>


    </div>
</body>

  <script>

    function submit() {

      var FirstName = document.getElementById("FirstName").value;
      var LastName = document.getElementById("LastName").value;
      var DOB = document.getElementById("DOB").value;
      var Email = document.getElementById("Email").value;
      var userid = document.getElementById("userid").value;
      var username = document.getElementById("username").value;
      var password = document.getElementById("password").value;

      if(username == "" || password == "" || FirstName == "" || LastName == "" || DOB == "" || userid == "" || Email == "") {
        document.getElementById("p1").innerHTML = "Fill up the form properly";
        document.getElementById("p1").style.color = "red";
      }

      else {

        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
          if(this.readyState == 4 && this.status == 200) {
            document.getElementById("p1").innerHTML = xhttp.responseText;
            document.getElementById("p1").style.color = "green";
          }
        }

        xhttp.open("POST", "updatenurseaction.php", true);
        xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        xhttp.send("username="+username+"&password="+password+"&FirstName="+FirstName+"&LastName="+LastName+"&DOB="+DOB+"&Email="+Email+"&userid="+userid);
      }
    }


    function searchnurse() {
      var searchnurse = document.getElementById("searchnurse").value;
     if(searchnurse == "") {
        document.getElementById("p3").innerHTML = "Please input the User ID";
        document.getElementById("p3").style.color = "red";}
        else{
      var xhttp = new XMLHttpRequest();
      xhttp.onreadystatechange = function() {
        if(this.readyState == 4 && this.status == 200) {
          document.getElementById("p3").innerHTML = xhttp.responseText;
          document.getElementById("p3").style.color = "black";
        }
      }

      xhttp.open("GET", "nurseviewlistaction.php?searchnurse=" + searchnurse, true);
      xhttp.send();
    }
}



  </script>

      </html>
    
