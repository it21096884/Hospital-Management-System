<!DOCTYPE html>
<html>
	<head>
	<?php
		require 'config.php'; 
	?>
		<!-- add a title (a)-->
		<title>Make Payments</title>
		
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
	<h2 class = "heading" >Make Payment</h2> 
	<div class="container">
		<div class="box">
			<div class="card">
			<p><h1>Bill</h1> </p>
			<?php

				$sql = "SELECT * from appointment";
				$result = $con->query($sql);

					if (mysqli_num_rows($result) > 0) {
						// output data of each row
						while($row = mysqli_fetch_assoc($result)) {
					echo "<p><h3> Appoitment Fee : ". $row["price"]. "</h3></p>";
							$appointfee = (int)$row["price"];

						}
				} 
			else {
				echo "0 results";
				}
				$sql1 = "SELECT * from lab ";
				$result1 = $con->query($sql1);

					if (mysqli_num_rows($result1) > 0) {
						// output data of each row
						while($row1 = mysqli_fetch_assoc($result1)) {
					echo "<p><h3> Lab fee : ". $row1["Cost"]. "</h3></p>";
							$labfee = (int)$row1["Cost"];
						}
				} 
			else {
				echo "0 results";
				}

				$sql2 = "SELECT * from pharmacy ";
				$result2 = $con->query($sql2);

					if (mysqli_num_rows($result2) > 0) {
						// output data of each row
						while($row2 = mysqli_fetch_assoc($result2)) {
					echo "<p><h3> Pharmacy Bill : ". $row2["total_amount"]. "</h3></p>";
							$pharmacybill = (int)$row2["total_amount"];
						}
				} 
			else {
				echo "0 results";
				}
				$tot = $appointfee + $labfee + $pharmacybill;
				echo "<p><h2> Total : ".$tot. "</h2></p>";

			

			?>
				<input class="button" type="button" name="pay" id="pay" value="Pay Now">
				<input class="button1" type="button" name="quick" id="quick" value="Quick Pay">


		</div>
		<br><br>
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
   </body>	
</head>
</html>