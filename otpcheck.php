<!DOCTYPE html>
<html>
	<head>
		<!-- add a title (a)-->
		<title>Change Password</title>
		
		<!--add styleSheet-->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="Styles/changepassword.css">
		<link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro' rel='stylesheet' type='text/css'>


		<!--<script src="js1/script1.js"> </script>-->
		<meta charset = "UTF-8">
		<meta name ="viewport" content = "width = device-width , intial-scale = 1.0">
	
	 
	<div class="topnav">
		<div class="logo">
		<p> <strong> e Service </strong> </p>
		</div>
		
	    <img class = "image" src="image/logo.jpg" width="121px" height="100px">
		
		<div class = "navbar">
			<a href="Home.html">Home</a>
			<a href="#" >About Us</a>
			<a href="#" >Contact us</a>
			<a href="#">Terms & Conditions</a>
			<a href="patientLogin.html" class="login">Login</a>
		</div>
	</div>
	
	<div class = "background">
		<br>
		<h2 class = "passheading" >Change Password</h2> 
		
		<div class="box">   
			<form action = "" method = "POST"> 		
				<label style = 'font-family: "Source Sans Pro"; font-size: 20px;'> Enter OTP : </label><br><br>   
				<input type="Password" name="otp" id="fields2" placeholder="Enter OTP">    
				<br><br>
				
				<label style = 'font-family: "Source Sans Pro"; font-size: 20px;'> Enter new password: </label><br><br>   
				<input type="Password" name="Pass" id="fields" placeholder="Enter new password">    
				<br><br>
				
				<label style = 'font-family: "Source Sans Pro"; font-size: 20px;'> Confirm password : </label><br><br>   
				<input type="Password" name="Passconf" id="fields" placeholder="Confirm password">    
				<br><br>
		
				<input type="submit" name="log" id="log" value="Submit">       
			</form>  
			<?php
				require 'config.php';
				session_start();
				
				$otp = $_SESSION["otp"];
				$email = $_SESSION["email"];
				
				if( isset($_POST["log"]) ){
					$enterOTP = $_POST["otp"];
					$pass = $_POST["Pass"];
					$passconf = $_POST["Passconf"];
						
					if( strcmp($enterOTP, $otp) == 0 ){
						if( strcmp($pass, $passconf) == 0 ){
							$sql1 = "UPDATE user SET Password = '$pass' WHERE Email = '$email'";
							$sql2 = "UPDATE doctor SET Password = '$pass' WHERE Email = '$email'";
							
							if( $con -> query($sql1) && $con -> query($sql2)){																											
									echo
									"<script>
										alert('Password resetted successfully');
										document.location.href = 'doctorlogin.html';
									</script>";
								}
						}
						else{
							echo
							"<script>
								alert('Password doesnt match');
								document.location.href = 'otpcheck.php';
							</script>";
						}
					}
					else{
						echo 
						"<script>
							alert('Invalid otp');
							document.location.href = 'otpcheck.php';
						</script>";
					}
				}
			?>
		</div>
		<br><br><br><br><br><br>
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