<!DOCTYPE html>
<html>
	<head>
	<?php
		require 'config.php'; 
		session_start();
	?>
		<!-- add a title (a)-->
		<title>My Cards</title>
		
		<!--add styleSheet-->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="Styles/style.css">
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
			<a href="#">Home</a>
			<a href="#" >About Us</a>
			<a href="#" >Contact us</a>
			<a href="#">Terms & Conditions</a>
			<a href="#" class="login">Login</a>
		</div>
	</div>
<div class = "background">
	<div class="bottnav">
		<ul>
		  <li><a href="home.php">Home</a></li>
		  <li><a href="addcard.php">Add a Card</a></li>
		  <li><a href="makepay.php">Make Payment</a></li>
		  <li><a href="Mycards.php">My Cards</a></li>
		  
		</ul>
	</div>
	<h2 class = "heading" >My Cards</h2> 
	<div class="container">
		<div class="box">
			<div class="card">
				<?php	
					$sql = "SELECT * from card";
					$result = $con->query($sql);
					
					if (mysqli_num_rows($result) > 0) {
						// output data of each row
						while($row = mysqli_fetch_assoc($result)) {
							echo "<p><h3> Card Name : ". $row["Card_Name"]. "</h3></p>" . 
							"<p><h3> Card Number: ". $row["CardNo"]. "</h3></p>". 
							"<p><h3> Expiry Date " . $row["Expire_Date"] . "</h3></p>";

							echo "<a href='updatecard.php'><input class='button' type='button' name='update' id='update' value='Update'> </a>".
							     "<a href='delete.php'><input class='button1' type='button' name='remove' id='remove' value='Remove'></a> ";
						}
					    
					} 
					else {
						echo "0 results";
					}
					
					$sql2 = mysqli_query($con, "SELECT * from card");
					$row2 = mysqli_fetch_array($sql2);
						if( is_array($row2) ){
						$_SESSION["cardNo"] = $row2['CardNo'];
				}
						
				?> 
				<br>
				
			</div>
		<br><br>
		</div>
	</div>
	<!---footer--!>
	<!----------------------footer-------------------------------------------->
	<br><br><br><br><br><br><br><br><br><br><br><br><br><br>
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
</head>
</html>