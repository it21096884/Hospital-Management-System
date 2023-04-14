<?php

include 'configp.php';
session_start();
$user_id = $_SESSION['user_id'];

if(!isset($user_id)){
   header('location:patientlogin.php');
};

if(isset($_GET['logout'])){
   unset($user_id);
   session_destroy();
   header('location:patientlogin.php');
}

?>

<!DOCTYPE html>
<html>
	<head>
		<!-- add a title (a)-->
		<title>Check Availability Of Doctors</title>
		
		<!--add styleSheet-->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

		<link rel="stylesheet" href="Styles/patientprofile.css">
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
			<a href="patientprofile.php?logout=<?php echo $user_id; ?>" class="logout-btn">logout</a>
		</div>
	</div>
	
	<div class = "background">
		<h2 class = "loginheading" >Check Availability Of Doctors</h2> 
		
	  
		<div class="container">

		<div class = "prtopic">
		<div class='childprt'><h3> Select a Date  </h3></div>
		</div>
		
		    <div>
			  <input type='date' class='center' value='2022-10-10' width='100'>
			</div>
		
			  <!-- <input type="date" id="Name" name="DateOfBirth" placeholder="select date of birth" class="box" required><br><br> -->
		 
		 <div class='patientrecords'>
		   <div class='child'> <!--Patient Appointment Records-->

				 <h4>Doctor Name:  <?php /*echo $fetch['name']; */?> Kasun Wijerathna </h4>
				 <h4>Specialization:  <?php /*echo $fetch['name']; */?> Neurology </h4>
				 <br> <br>
				 <h4>Doctor Name:  <?php /*echo $fetch['name']; */?> Lokesh Ranathunga </h4>
				 <h4>Specialization:  <?php /*echo $fetch['name']; */?> Neurology </h4>
				 <br> <br>
				 <h4>Doctor Name:  <?php /*echo $fetch['name']; */?> Thimali Hewage </h4>
				 <h4>Specialization:  <?php /*echo $fetch['name']; */?> Allergists </h4>
		 </div></div>
		 
		 <div class='patientrecords'>
		   <div class='name'> <!--Patient Appointment Records-->

			<input type="submit" id="downrr" name="downrr" value="Download Report" class="down-btn">
		 </div></div>
		 
		 

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