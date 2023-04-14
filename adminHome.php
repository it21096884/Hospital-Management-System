<!DOCTYPE html>
<html>
	<head>
		<?php
			require "config.php";
			session_start();
		?>
		<!-- add a title (a)-->
		<title>Admin Home</title>
		
		<!--add styleSheet-->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="Styles/adminHome.css">
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
			<a href="#">Admin Home</a>
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
	
	<div class = "background">
		<div class="wrapper">
			<div class="dashboard">  
				<br>
				<h2 style = "font-size:28;"> &nbsp &nbsp Dashboard </h2> 
				<span class="smallerbr"></span>
				
				<p class="dashboardlist"> <a href="doctorReg.php"> &nbsp &nbsp Register doctor </a></p>
				<span class="mediumbr"></span>
				
				<p class="dashboardlist"> <a href="staffReg.php"> &nbsp &nbsp Register staff </a></p> 
				<span class="mediumbr"></span>
				
				<p class="dashboardlist"> <a href="add.php"> &nbsp &nbsp Manage appointments </a></p> 
				<span class="mediumbr"></span>
				
				<p class="dashboardlist"> <a href="adminReport.php"> &nbsp &nbsp Generate user report </a></p>
			</div>   
			
			<div class="search">    
				<h2 class="searchheading"> Welcome admin </h2> 
				<div class="search-container"> 
					<form action="" method = "POST">
						<input type="text" placeholder="Search by Name or ID" name="search" style = 'font-family: "Source Sans Pro"; font-size: 16px;'>
						<button type="submit"><i class="fa fa-search"></i></button>
					</form>
					
					<div class="table-wrapper">	
						<table class = "fl-table">
							<thead>
							<tr>
								<th>ID</th>
								<th>Email</th>
								<th>First Name</th>
								<th>Last Name</th>
								<th>Date of birth</th>				
							</tr>
							</thead>
								<br>
								<tbody>
									<?php     
										require 'config.php';
										if(isset($_POST['search']))
										{
											$filtervalues = $_POST['search'];
											$query = "SELECT * from user where CONCAT(UserID,First_Name) like '%$filtervalues%'";
											$query_run = mysqli_query($con, $query);

											if(mysqli_num_rows($query_run) > 0)
											{
												foreach($query_run as $items)
												{
													?>
														<tr>
															<td><?= $items['UserID']; ?></td>
															<td><?= $items['Email']; ?></td>
															<td><?= $items['First_Name']; ?></td>
															<td><?= $items['Last_Name']; ?></td>
															<td><?= $items['Date_Of_Birth']; ?></td>
														</tr>
													<?php
												}
											}
											else
											{
												?>
													<tr>
													<td colspan="4">No Record Found</td>
													</tr>
												<?php
											}
										}
									?>
								</tbody>
						</table>
					</div>
				</div>
			</div> 
		</div>
		
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