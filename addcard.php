<!DOCTYPE html>
<html>
	
	<head>
	<?php
	 require 'config.php'; 
	 session_start();

	?>
		<!-- add a title (a)-->
		<title>Add card</title>
		
		<!--add styleSheet-->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="Styles/patientlogin.css">
		<link rel="stylesheet" href="Styles/style.css">
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
			<a href="#">Home</a>
			<a href="#" >About Us</a>
			<a href="#" >Contact us</a>
			<a href="#">Terms & Conditions</a>
			<a href="#" class="login1">Login</a>
		</div>
	</div>
	<div class="bottnav">
		<ul>
		  <li><a href="home.php">Home</a></li>
		  <li><a href="addcard.php">Add a Card</a></li>
		  <li><a href="makepay.php">Make Payment</a></li>
		  <li><a href="Mycards.php">My Cards</a></li>
	
		  
		</ul>
	</div>
	
	<div class = "background">
	<h2 class = "loginheading" >Add New Card</h2>
		
		<div class = "container">
			<div class = "box"><div class = "card">
			<div class="addcards">    
			<form id="add" method = "POST" action="card.php" >    
				<label style = 'font-family: "Source Sans Pro"; font-size: 20px;'> Name </label><br><br> 
				<input type="text" name="name" id="Name" placeholder="Enter a Name" required>    
				<br><br>  
				
				<label style = 'font-family: "Source Sans Pro"; font-size: 20px;'> Card Number </label><br><br>   
				<input type="number" name="number" id="num" placeholder="Enter Card Number"  minlength="12" required>    
				<br><br>

				<label style = 'font-family: "Source Sans Pro"; font-size: 20px;'> CVV </label><br><br>   
				<input type="number" name="cvv" id="cvv" placeholder="Enter CVV" maxLength="3" minLength="3" required>    
				<br><br>

				<label style = 'font-family: "Source Sans Pro"; font-size: 20px;'> Date </label><br><br>   
				<input type="text" name="date" id="date" placeholder="Enter date" required>    
				<br><br>
				
			
				<br><br><br>
				
				<input class="button1" type="submit" name="add" id="add" value="Add">       
				<br><br>
			</form>  
			
			<br><br>
			
		</div> 
			</div>
			</div>
			
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