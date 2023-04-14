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
			
		</div>
	</div>
	
	<div class = "background">
		<br>
		<h2 class = "passheading" >Change Password</h2> 
		
		<div class = "box">   
			<form action = "" method = "POST">
				<label style = 'font-family: "Source Sans Pro"; font-size: 20px;'> Enter your email *an OTP will be sent here: </label> <br><br> 
				<input type="text" name="Email" id="fields1" placeholder="Enter your email">				
				<br><br>
				
				<label style = 'font-family: "Source Sans Pro"; font-size: 20px;'> Enter your Telephone: </label> <br><br> 
				<input type="number" name="tele" id="fields1" placeholder="Enter your email">				
				<br><br>
					
				<input type="submit" name="log" id="log" value="Submit">       
			</form>  
			
			<?php
				use PHPMailer\PHPMailer\PHPMailer;
				use PHPMailer\PHPMailer\Exception;
				
				require 'PHPMailer\src\Exception.php';
				require 'PHPMailer\src\SMTP.php';
				require 'PHPMailer\src\PHPMailer.php';
				require 'config.php';
				session_start();
				
				if( isset($_POST["log"]) ){
					
					$email = $_POST["Email"];
					$tele = $_POST["tele"];
					
					$sql = "Select Email from doctor where Email = '$email' and Telephone = '$tele'";
					$result = $con -> query($sql);
					
					$query = mysqli_query($con, "Select Email from doctor where Email = '$email' and Telephone = '$tele'");
					$row = mysqli_fetch_assoc($query);
					$getEmail = $row["Email"];
					
					if(	strcmp( $getEmail, $email ) == 0 ){
						$mail = new PHPMailer(true);
						
						$mail ->isSMTP();
						$mail ->Host = 'smtp.gmail.com';
						$mail ->SMTPAuth = true;
						$mail ->Username = 'eservicessaman@gmail.com';
						$mail ->Password = 'qbljeynengisdqgj';
						$mail ->SMTPSecure = 'ssl';
						$mail ->Port = 465;
						
						$mail ->setFrom('eservicessaman@gmail.com');
						$mail ->addAddress($email);
						$mail ->isHTML(true);
						
						$number = rand(0,1000);
						
						$mail ->Subject = "eServices OTP";
						$mail ->Body = "Your OTP is  = $number";
						
						$mail ->send();
						
						$_SESSION["email"] = $email;
						$_SESSION["otp"] = $number;
						
						echo 
						"<script>
							alert('Sent successfully');
							document.location.href = 'otpcheck.php';
						</script>";
					}
					
					else{
						echo 
						"<script>
							alert('Invalid Email');
							document.location.href = 'changepassword.php';
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