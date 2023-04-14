<!DOCTYPE html>
<html>
	<head>
		<!-- add a title (a)-->
		<title>Doctor Consultations</title>
		
		<!--add styleSheet-->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="Styles/patient.css">
		<!--<script src="js1/script1.js"> </script>-->
		<meta charset = "UTF-8">
		<meta name ="viewport" content = "width = device-width , intial-scale = 1.0">
		<style>
	
			#table {
			  font-family: Arial, Helvetica, sans-serif;
			  border-collapse: collapse;
			  width: 80%;
			}

			#table td, #customers th {
			  border: 1px solid #ddd;
			  padding: 10px;
			}

			#table tr:nth-child(even){background-color: #f2f2f2;}

			#table tr:hover {background-color: #ddd;}

			#table th {
				width:120px;
			  padding-top: 12px;
			  padding-bottom: 12px;
			  text-align: center;
			  background-color: #055C9D;
			  color: white;
			}
	 </style>
	 <div class = "maindev"><br>
	<div class="topnav">
		<div class="logo">
		<p> <strong> e Service </strong> </p>
		</div>
		
	    <img class = "image" src="image/logo.jpg" width="121px" height="100px">
		
		<div class = "navbar">
			<a href="#">Home</a>
			<a href="#" >About Us</a>
			<a href="#" >Contact us</a>
			<a href="#">Terms & Conditions</a>
			<a href="#" class="login">Login</a>
		</div>
		<br>
	</div>
	
	<BR><BR><BR><BR><BR>
		
<div class = "tablesearch">		
	<?php
	    require'Configuration.php';
	    if(isset($_POST["Search"]))
		{
			$search_value = $_POST['search'];
			
			$sql = "SELECT p.PatientID,p.First_Name,p.Last_Name,p.Date_Of_Birth,t.Patient_Condition,t.Prescription
                    FROM patient p , doctor d ,treatment t
					WHERE p.DoctorID = d.DoctorID and t.PatientID = p.PatientID
					AND p.PatientID LIKE '$search_value'";
			$result = $con -> query($sql);

        if($result -> num_rows > 0){
			
		   echo"<table border = 1 class = 'table' id = 'table'>";
		   echo"<th>PatientID</th><th>Patient First Name</th><th>Patient Last Name</th><th>Patient Age </th><th>Patient Conditions</th><th>Medicines</th>";
		  
		   while($row = $result->fetch_assoc())
		   {
			   echo"<tr>";
			   echo"<td>".$row['PatientID']."</td>";
			   echo"<td>".$row['First_Name']."</td>";
			   echo"<td>".$row['Last_Name']."</td>";
			   echo"<td>".$row['Date_Of_Birth']."</td>";
			   echo"<td>".$row['Patient_Condition']."</td>";
			   echo"<td>".$row['Prescription']."</td>";
			   echo"</tr>";
			   
		   }
		   
		    echo"</table>";
	   }
	  
			 
		   else
		   {
			   echo"<Script>alert('No any data !')</script>";
		   }
	      //$con -> close();
	
		}			
			
			
			
			
			
		
		
	
	?>
	
	<br><br><br><br><br>
	<button  onclick ="location.href = 'DocMale_main.php';" id = "btn_back" >Back</button><br><br>
	
	</div>	
	<BR><BR><BR><BR><BR>
	
	
	
	
		
	
	<!---footer--!>
	<!----------------------footer-------------------------------------------->
		<footer>
			 <img class = "image1" src="image/qr2.PNG" width="121px" height="100px">
			
		    <p>+94 712 571 22</p>
			<p>eservice@gmail.com</p>
			<p>eService PLC,nO:108,W A D Ramanayaka Mawatha,Kandy,Sri Lanka</p>
		
			<br><hr class = "hr1">
			<p class="para4"> @2022 All Rights Reserved </p><br>
			
			<div class="socialmedia">
				<ul>
					<li><a href="#" class="fa fa-facebook"></a></li>
					<li><a href="#" class="fa fa-twitter"></a></li>
					<li><a href="#" class="fa fa-instagram"></a></li>
				</ul>
			</div>
			
			</div><br>
		</footer>
   </body>	
</head>
</html>