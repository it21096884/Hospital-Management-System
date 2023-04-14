<?php 
	require 'configlab.php';
?>	

<!DOCTYPE html>
<html>
	<head>
		<!-- add a title (a)-->
		<title>Lab</title>
		
		<!--add styleSheet-->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="Styles/HeaderFooter.css">
		
		<!--<script src="js1/script1.js"> </script>-->
		<meta charset = "UTF-8">
		<meta name ="viewport" content = "width = device-width , intial-scale = 1.0">
		
		<style>		
			
			.h1{
				font-family: Arial;
			}
		
			p{ 
				text-align: center 
			}
			
			* {
				box-sizing: border-box;		  
			}
			
			.div1 {
			  width: 70%;
			  height: 100%;
			  border: 1px solid white;
			}
			
			.column {			
				float: left;
				width: 45%;
				padding: 10px;
				height: 300px;
				border: 2px solid black;
			}
			
			.row:after {
				float: center;
				content: "";
				display: table;
				clear: both;
				 border: 2px solid black;
			}
			
			.column1{
				float: left;
				width: 30%;
				padding: 10px;
				height: 300px; 
				border: 2px solid black;
			}
			
			.row1:after {				
				content: "";
				display: table;
				clear: both;
				border: 2px solid black;
			}
			
			.btnl{
				margin-left:50%;
				transform: translateX(-50%);
				width:250px;
				height:100px;
				border:none;
				outline : none;
				background: #424242;
				cursor: pointer;
				font-size:20px;
				text-tranform:uppercase;
				color: white;
				border-radius:4px;
				trnsition: .3s

			}

			.btnl:hover{
				opacity: .7;
			}
			
			body {
					 background-image: url("image/lab19.jpg");
					
			}
			
			h1{
				font-family: Arial;
				
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
	<p>
	<center>
	<div class="div1">
	
			<center>
			 <div class="row">
				&nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp &nbsp  &nbsp
				  <div class="column" style="background-color:white;">
				  <br><br><br><br><br>
					<h1><b>PATIENT REPORT <br> DETAILS</b></h1>					
				  </div>
				  
				  <div class="column" style="background-color:white;">
					<center>
					<br>
					<input type="submit" name="patient" class="btnl" onclick="location.href='RegPatient.php'" value="Register for Report">
					<br><br><br>
					<input type="submit" name="patient" class="btnl" onclick="location.href='PatientReportDetails.php'" value="Manage Patient Report">
					</center>
				  </div>
				  
			</div>  
			</center>
			
			<center>
			<div class="row1">	  
				  <div class="column1" style="background-color:white;">
					<h2></h2>
					<br><br><br><br>
					<center>
					<input type="submit" name="rptdetails" class="btnl" onclick="location.href='ReportD.php'" value=" Lab Report Details ">
					</center>
				  </div>
				  <div class="column1" style="background-color:white;">
					<h2></h2>
					<br><br><br><br>
					<center>
					<input type="submit" name="genaratereport" class="btnl" onclick="location.href='reportlab.php'"value=" Genarate Report">
					</center>
				  </div>
				  <div class="column1" style="background-color:white;">
					<h2></h2>
					<br><br><br><br>
					<center>
					<input type="submit" name="rstitem" class="btnl" onclick="location.href='report.php'" value=" Request Item ">
					</center>
				  </div>
				  
				  <br><br><br><br>			  
			</div>
			</center>
	
	</div>
	</center>
	</p>
	
	
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