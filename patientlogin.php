<?php

include 'configp.php';
session_start();

if(isset($_POST['submit'])){

   $Email = mysqli_real_escape_string($conn, $_POST['Email']);
   /* $pass = mysqli_real_escape_string($conn, md5($_POST['Password'])); //Encripted Pass */
   $pass = mysqli_real_escape_string($conn, $_POST['Password']);

   $select = mysqli_query($conn, "SELECT * FROM `patient` WHERE Email = '$Email' AND Password = '$pass'") or die('query failed');

   if(mysqli_num_rows($select) > 0){
      $row = mysqli_fetch_assoc($select);
      $_SESSION['user_id'] = $row['PatientID'];
      header('location:patientprofile.php');
   }else{
      $message[] = 'incorrect email or password!';
   }

}

?>

<!DOCTYPE html>
<html>
	<head>
		<!-- add a title (a)-->
		<title>Patient Login</title>
		
		<!--add styleSheet-->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="Styles/PatientLogin.css">
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
			<a href="Home.html">Home</a>
			<a href="#" >About Us</a>
			<a href="#" >Contact us</a>
			<a href="#">Terms & Conditions</a>
			<a href="patientlogin.php" class="login1">Login</a>
		</div>
	</div>
	
	<div class = "background">
		<h2 class = "loginheading" >Patient Login</h2> 
			<div class="login">

			   <form action="" method="post" enctype="multipart/form-data">
				  <?php
				  if(isset($message)){
					 foreach($message as $message){
						echo '<div class="message">'.$message.'</div>';
					 }
				  }
				  ?>
				  <label style = 'font-family: "Source Sans Pro"; font-size: 20px;'> Email : </label><br><br>
				  <input type="Email" id="Email" name="Email" placeholder="enter email" class="box" required>
				  <br><br><br>  
				  <label style = 'font-family: "Source Sans Pro"; font-size: 20px;'> Password  : </label><br><br>   
				  <input type="Password" id="Pass" name="Password" placeholder="enter password" class="box" required>
				  <br><br><br> 
				  <input type="submit" name="submit" id="log" value="Login" class="btn">
				  <p>don't have an account? <a href="patientregister.php">regiser now</a></p>
				  <br><br>
			   </form>
			   
			   <div class = "dropdown" style = 'font-family: "Source Sans Pro";'>
				<button class = "dropbtn"> Select your login &nbsp &nbsp &nbsp<i class = "arrow down"></i></button>
				<div class = "dropdown-content" style = 'font-family: "Source Sans Pro";'>
					<a href = "doctorlogin.html"> Doctor Login </a>
					<a href = "labassistantlogin.html"> Lab Assistant Login </a>
					<a href = "pharmacistlogin.html"> Pharmacist Login </a>
					<a href = "feedbackmanagerlogin.html"> Feedback Manager Login </a>
					<a href = "inventorymanagerlogin.html"> Inventory Manager Login </a>
					<a href = "adminlogin.html"> Admin Login </a>
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












































