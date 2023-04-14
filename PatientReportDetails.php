<?php 
	require 'configlab.php';
?>	


<!DOCTYPE html>
<html>
	<head>
		<!-- add a title (a)-->
		<title>Pateint Report Details</title>
		
		<!--add styleSheet-->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="Styles/HeaderFooter.css">
		<link rel="stylesheet" href="Styles/LabReportD.css">
		
		<!--<script src="js1/script1.js"> </script>-->
		<meta charset = "UTF-8">
		<meta name ="viewport" content = "width = device-width , intial-scale = 1.0">
		
		<style>
		
			.btn2{				
				font-size:15px;				
				background: #424242;
				color: white;
				cursor: pointer;
				font-size:16px;
				outline : none;
				width:150px;
				height:40px;
				border:none;
				border-radius:4px;
				trnsition: .3s				
				transform: translateX(-50%);
			}
			
			.btn2:hover{
				opacity: .7;
			}

		
		
			.container{
				margin:auto;
				width: 1400px;
				max-width:90%;
			}
						
			.container form{
				width: 100%;
				height: 90%;
				padding:20px;
				background:white;
				border-radius:4px;
				background:white;
				box-shadow:0 8px 16px rgba(0,0,0,.3);
				
			}
			
			.container form h1{
				font-family: Arial;
				text-align:left;
			}
		
			.content_table{
				border-collapse: collapse;
				margin: 50px 10px;
				font-size :0.6cm;
				min-width:400px;				
			}
			
			.content_table thead tr{
				background-color: #DBF3FA  ;
				color: #fffffff;
				text-align: left;
				font-weight:bold
				font-family: Arial;
			}
			
			.content_table th{
				background: #DBF3FA;
				padding: 15px 35px;
			}
			
			
			
			.content_table td{
				padding: 15px 35px;
			}
			
			tr { 
				background: #E8E9EB;			
			}
			
		</style>
		
	</head>
	
	<body>
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
	<!------------------------------------------------------------------------->
	<center>
	<div class = "container">
			<form>
			
			<h1>
			&nbsp &nbsp &nbsp  &nbsp <u> Patient Report Details </h1></u>
			<center>
			<table class="content_table">
				<tr>
					<th>Lab Report ID</th>
					<th>Patient ID</th>
					<th>Report Requested Date </th>	
					<th>Result Report</th>
					<th>Report Status</th>
					<th>Report Issued Date </th>
					<th>Cost </th>					
				</tr>
				
				<?php
					
					//read all data from the table
					$sql = "SELECT * FROM lab";
					$result = $con -> query($sql);
					
					if(!$result){
						die("Invalid query: " . $connection -> error);
					}
										
					//read data of each row 
					while($row = $result -> fetch_assoc()){
						 
							echo "<tr>";
								echo "<td>" . $row["Lab_ReportID"] . "</td>"; 
								echo "<td>" . $row["PatientID"] . "</td>";
								echo "<td>" . $row["Patient_RequestedDate"] . "</td>";
								echo "<td>" . $row["Report_Result"] . "</td>";	
								echo "<td>" . $row["Report_Status"] . "</td>"; 
								echo "<td>" . $row["Patient_IssuedDate"] . "</td>";
								echo "<td>" . $row["Cost"] . "</td>";	
							echo "</tr>";
					}				
				?>		
				
			</table>
		</center>
		<center>
			
			<button type="button" class ="btn2" onclick="location.href='UpdatPatientReport.php'">   EDIT  </button>
			&nbsp &nbsp &nbsp  &nbsp
			
		</center>
		
		</form>
		</div>
							
	</center>
	
	
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
			
			<br>
		</footer>
   </body>	
</html>