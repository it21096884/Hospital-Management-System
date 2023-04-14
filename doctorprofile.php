<!DOCTYPE html>
<html>
	<head>
		<!-- add a title (a)-->
		<title>Doctor Profile</title>
		<?php
			require "config.php";
			session_start();
		?>
		<!--add styleSheet-->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="Styles/profile.css">
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
				<a href="#">Profile</a>
				<a href="patientlogin.php" class="login">
				<?php
					if( isset ( $_SESSION["uID"] ) ) {
						?> Logout <?php
					}
					else {
						?> Login <?php
					}
				?>
				</a>
			</div>
		</div>
	</head>
	<body>
		<div class = "background">
			<br>
			<div class="box">   
				<h2 class = "detailsheading"> 
					<?php			
						$uID = $_SESSION["uID"];
						$sql = "SELECT * FROM doctor WHERE DoctorID = '$uID'";
						$result = $con->query($sql);
						
						if(mysqli_num_rows($result) > 0){
							while( $row = mysqli_fetch_assoc($result) ){
								echo "Doctor ". $row["First_Name"]. " ". $row["Last_Name"];
							}
						}
					?>
				</h2> 
				
				<p class="dashboardlist"> &nbsp &nbsp 
				<?php			
					$uID = $_SESSION["uID"];
					$sql = "SELECT * FROM doctor WHERE DoctorID = '$uID'";
					$result = $con->query($sql);
					if(mysqli_num_rows($result) > 0){
						while( $row = mysqli_fetch_assoc($result) ){
							echo "Doctor ID : ". $row["DoctorID"];
						}
					}
				?>
				</p>
				<span class="mediumbr"></span>
					
				<p class="dashboardlist"> &nbsp &nbsp 
				<?php			
					$uID = $_SESSION["uID"];
					$sql = "SELECT * FROM doctor WHERE DoctorID = '$uID'";
					$result = $con->query($sql);
					if(mysqli_num_rows($result) > 0){
						while( $row = mysqli_fetch_assoc($result) ){
							echo "Email : ". $row["Email"];
						}
					}
				?> 
				</p> 
				<span class="mediumbr"></span>
					
				<p class="dashboardlist"> &nbsp &nbsp
				<?php			
					$uID = $_SESSION["uID"];
					$sql = "SELECT * FROM doctor WHERE DoctorID = '$uID'";
					$result = $con->query($sql);
					if(mysqli_num_rows($result) > 0){
						while( $row = mysqli_fetch_assoc($result) ){
							echo "Specialization : ". $row["Specialization"];
						}
					}
				?>  
				</p> 
				<span class="mediumbr"></span>
					
				<p class="dashboardlist"> &nbsp &nbsp 
				<?php			
					$uID = $_SESSION["uID"];
					$sql = "SELECT * FROM doctor WHERE DoctorID = '$uID'";
					$result = $con->query($sql);
					if(mysqli_num_rows($result) > 0){
						while( $row = mysqli_fetch_assoc($result) ){
							echo "Date of Birth : ". $row["Date_of_Birth"];
						}
					}
				?>  
				</p>
				<span class="mediumbr"></span>
				
				<p class="dashboardlist"> &nbsp &nbsp 
				<?php			
					$uID = $_SESSION["uID"];
					$sql = "SELECT * FROM doctor WHERE DoctorID = '$uID'";
					$result = $con->query($sql);
					if(mysqli_num_rows($result) > 0){
						while( $row = mysqli_fetch_assoc($result) ){
							echo "Telephone : ". $row["Telephone"];
						}
					}
				?>  
				</p>
				<span class="mediumbr"></span>
			</div>
			<br><br>
			
			<button class="btn"> <a href="doctorEdit.php"> Edit profile <a></button>
			
			<button class="btn2"> <a href="doctorDelete.php"> Delete profile <a></button>
			
			<button class="btn3"> <a href="changepassword.php"> Change password <a></button>
			<br><br><br>
			
			<form method="post" action="Doc_man_function/index2.php">
				<input type="submit" value="Doctor management" name="dm" class="btn4">
			</form>
			
			<br><br><br><br><br><br>
		</div>
	</body>
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
</html>