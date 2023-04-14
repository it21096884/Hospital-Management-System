 <!DOCTYPE html>
<?php

	require 'config.php';
	// select Query
	$sql ="SELECT RequestListID ,Item_Name,Section,Required_Date,Quantity,Status FROM requestlist";
	// resultser int result variable
	
	$result= mysqli_query($con,$sql);
	
?>

<html>
	<head>
		<!-- add a title (a)-->
		<title>Inventory Home</title>
		
		<!--add styleSheet-->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		
		<link rel="stylesheet" href="Styles/Docmain.css">
		<link rel="stylesheet" href="Styles/Inventory.css">
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
		<br>
	</div>
	
	<div class="wrapper">
	<center>
	<br>
		<div class="maindiv">
				<div class="leftdiv">
				<center><br><br><br><br><br>
					<div class="box-1" onclick="window.location='Request.html';">
					  <div class="btn btn-one">
						<span>STOCK DETAILS</span>
					
					  </div>
					</div>
					<br><br>
					<!--2 -->
					<div class="box-1" onclick="window.location='Request.html';">
					  <div class="btn btn-one">
						<span>ADD NEW ITEM</span>
						
					  </div>
					</div>
					<br><br>
					<!-- #3 -->
					<div class="box-1" onclick="window.location='Request.html';">
					  <div class="btn btn-one">
						<span>ADD NEW SUPPLIER</span>
						
					  </div>
					</div>
			
				</center>
				<p style="font-size:20px;color:#BCC6CC">
				</p>
				
			</div>
			<div class="rightdiv">
			<center>
			
				<h2>Request Item List</h2>
				<div class="table-wrapper">
					<table class="fl-table">
						<thead>
						<tr>

						
							<th>ReqID</th>
							<th>Section</th>
							<th>Item name</th>
							<th>Quantity</th>
							<th>Required Date</th>
							<th>Status</th>
							<th>Check</th>
						</tr>
						</thead>
						<?php

							while ($row = $result -> fetch_assoc())
							{
								if($row ["Status"]=='P')
								{
									$s=$row["Status"]="P";
							
						?>
							<tbody>
							<tr>
								<td><?php echo $row["RequestListID"]; ?></td>
								<td><?php echo $row["Section"]; ?></td>
								<td><?php echo $row["Item_Name"]; ?></td>
								<td><?php echo $row["Quantity"]; ?></td>
								<td><?php echo $row["Required_Date"]; ?></td>
								<td><?php echo $s; ?></td>
								<td><button type="button" class="sbutton" onclick="window.location='Request.html';">Check</button></td>
							</tr>
						<?php
								}
							}
						?>
						
						</tbody>
					</table>
				</div>
			</center>
			
			</div>

		</div>
	</center>
	</div>
	
	
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
</head>
</html>