<?php include 'head.html'; ?>
<!DOCTYPE html>
<html>
<head>


	    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" a href="../CSS/bootstrap.css">
    	<title>Check user list</title>
</head>
<body>


			<div class="col ml-5">
				


	<h2>Seach By User Type and User ID </h2>

	<label for="searchdoctor">Search Dcotor by User ID:</label>
	<br>
	<input type="number" name="searchdoctor" id="searchdoctor">

	<button id="search" onclick="searchdoctor()" style="height:30px; width:150px">Search</button>

	<p id="p1"></p>
	<a href="AddDoctor.php"> Add Doctor</a>
	<br>
	<hr>
	<br>

	<label for="searchnurse">Search Nurse User ID:</label>
	<br>
	<input type="number" name="searchnurse" id="searchnurse">

	<button id="search" onclick="searchnurse()" style="height:30px; width:150px">Search</button>


	<p id="p2"></p>

	<a href="AddNurse.php"> Add Nurse</a>

	<br>
	<hr>
	<br>

	<label for="searchpatient">Search Patient User ID:</label>
	<br>
	<input type="number" name="searchpatient" id="searchpatient">

	<button id="search" onclick="searchpatient()" style="height:30px; width:150px">Search</button>

	<p id="p3"></p>
	<a href="AddPatient.php"> Add Patient</a>
	<br>
	<hr>
	<br>




	<script>
		


		function searchdoctor() {
			var searchdoctor = document.getElementById("searchdoctor").value;

			var xhttp = new XMLHttpRequest();
			xhttp.onreadystatechange = function() {
				if(this.readyState == 4 && this.status == 200) {
					document.getElementById("p1").innerHTML = xhttp.responseText;
				}
			}

			xhttp.open("GET", "doctorviewlistaction.php?searchdoctor=" + searchdoctor, true);
			xhttp.send();
		}

		function searchnurse() {
			var searchnurse = document.getElementById("searchnurse").value;

			var xhttp = new XMLHttpRequest();
			xhttp.onreadystatechange = function() {
				if(this.readyState == 4 && this.status == 200) {
					document.getElementById("p2").innerHTML = xhttp.responseText;
				}
			}

			xhttp.open("GET", "nurseviewlistaction.php?searchnurse=" + searchnurse, true);
			xhttp.send();
		}

		function searchpatient() {
			var searchpatient = document.getElementById("searchpatient").value;

			var xhttp = new XMLHttpRequest();
			xhttp.onreadystatechange = function() {
				if(this.readyState == 4 && this.status == 200) {
					document.getElementById("p3").innerHTML = xhttp.responseText;
				}
			}

			xhttp.open("GET", "patientviewlistaction.php?searchpatient=" + searchpatient, true);
			xhttp.send();
		}


	</script>
	<br></div>
        <div style="position:fixed;
   right:10px;
   top:40px;" ><a href="AdminPanel.php"> back to Admin panel</a>
</div>

	
</body>

</html>