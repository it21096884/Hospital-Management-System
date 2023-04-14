<!DOCTYPE html>
<html>
	<head>
		<!-- add a title (a)-->
		<title>Staff Registration</title>
		
		<?php
			require "config.php";
			session_start();
		?>
		<!--add styleSheet-->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="Styles/registration.css">
		<link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro' rel='stylesheet' type='text/css'>
		<meta name="viewport" content="width=device-width, initial-scale=1">


		<!--<script src="js1/script1.js"> </script>-->
		<meta charset = "UTF-8">
		<meta name ="viewport" content = "width = device-width , intial-scale = 1.0">
	
	 
	<div class="topnav">
		<div class="logo">
		<p> <strong> e Service </strong> </p>
		</div>
		
	    <img class = "image" src="image/logo.jpg" width="121px" height="100px">
		
		<div class = "navbar">
			<a href="adminHome.php">Admin Home</a>
		</div>
	</div>
	
	<div class = "background">
		<h2 class = "loginheading" >Staff Registration</h2> 
		<div class="login">    
			<form id="login" method="POST" action="staffRegister.php">    
				<label style = 'font-family: "Source Sans Pro"; font-size: 20px;'> Enter first name : </label><br><br> 
				<input type="text" name="fn" id="fields" placeholder="Enter full name" required>    
				<br><br>
				
				<label style = 'font-family: "Source Sans Pro"; font-size: 20px;'> Enter last name : </label><br><br> 
				<input type="text" name="ln" id="fields" placeholder="Enter full name" required>    
				<br><br>
							
				<label style = 'font-family: "Source Sans Pro"; font-size: 20px;'> Enter email : </label><br><br>   
				<input type="text" name="email" id="fields" placeholder="Enter email" required>    
				<br><br>
				
				<label style = 'font-family: "Source Sans Pro"; font-size: 20px;'> Job type : </label><br><br>   
				<select name = "type" class = "spec" >
					<option value = "0" style = 'font-family: "Source Sans Pro"; font-size: 17px;'> Select type </option>
					<option value = "Lab Assistant" style = 'font-family: "Source Sans Pro"; font-size: 17px;'> Lab Assistant </option>
					<option value = "Inventory Manager" style = 'font-family: "Source Sans Pro"; font-size: 17px;'> Inventory Manager </option>
					<option value = "Pharmacist" style = 'font-family: "Source Sans Pro"; font-size: 17px;'> Pharmacist </option>
					<option value = "Feedback Manager" style = 'font-family: "Source Sans Pro"; font-size: 17px;'> Feedback Manager </option>
				</select>
				<br><br><br>
				
				<label style = 'font-family: "Source Sans Pro"; font-size: 20px;'> Enter password (8 characters minimum): </label><br><br>   
				<input type="Password" name="password" id="fields" placeholder="Enter password" minlength = "8" required>    
				<br><br>
				
				<label style = 'font-family: "Source Sans Pro"; font-size: 20px;'> Confirm password : </label><br><br>   
				<input type="Password" name="confirmpass" id="fields" placeholder="Confirm password" minlength = "8" required>    
				<br><br>
				
				<label style = 'font-family: "Source Sans Pro"; font-size: 20px;'> Date of birth : </label><br><br>   
				<input type="Date" name="dob" id="fields" required>    
				<br><br>
				
				<label style = 'font-family: "Source Sans Pro"; font-size: 20px;'> Telephone : </label><br><br>   
				<input type="number" name="telephone" id="fields" placeholder=" Enter telephone" required>    
				<br><br><br>
				
				<input type="submit" name="log" id="log" value="Submit">       
			</form>  
		</div>
	<!---footer--!>
	<!----------------------footer-------------------------------------------->
	<br><br><br><br><br><br><br><br><br><br>
	</div>
	<footer>
		<img class = "image1" src="image/qr2.PNG" width="121px" height="100px">
			
		<p>+94 712 571 22</p>
		<p>eservice@gmail.com</p>
		<p>eService PLC,nO:108,W A D Ramanayaka Mawatha,Kandy,Sri Lanka</p>
		
		<hr class = "hr1">
		<p class="para4"> @2022 All Rights Reserved </p>
		
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
</head>
</html>