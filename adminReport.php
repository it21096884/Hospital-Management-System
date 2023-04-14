<!DOCTYPE html>
<html>
	<head>
		<!-- add a title (a)-->
		<title>Report</title>
		<?
			require "config.php";
			session_start();
		?>
		
		<!--add styleSheet-->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="Styles/Report.css">
		<link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro' rel='stylesheet' type='text/css'>
		<meta name="viewport" content="width=device-width, initial-scale=1">


		<!--<script src="js1/script1.js"> </script>-->
		<meta charset = "UTF-8">
		<meta name ="viewport" content = "width = device-width , intial-scale = 1.0">
	
	</head>
	<body>
		<div class = "noprint2">
			<div class="topnav">
				<div class="logo">
				<p> <strong> e Service </strong> </p>
				</div>
				
				<img class = "image" src="image/logo.jpg" width="121px" height="100px">
				
				<div class = "navbar">
					<a href="adminHome.php">Admin Home</a>
					<a href="patientlogin.php" class="login1">
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
		</div>
		
		<div class = "background">
			<h2 class = "loginheading" >Report</h2> 
			<div class="login">    
				<form id="login" action="" method = "POST">    
					<input type="text" placeholder="Search by Type" name="search" style = 'font-family: "Source Sans Pro"; font-size: 16px;'>
					<br><br>
					<input type="submit" name="log" id="log" value="Submit">
				</form>  
				<br>
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
										require "config.php";
										if(isset($_POST['search']))
										{
											$filtervalues = $_POST['search'];
											if( strcmp($filtervalues, "Doctor") == 0 ){
												$query = "SELECT * from doctor";
												$query_run = mysqli_query($con, $query);

												if(mysqli_num_rows($query_run) > 0)
												{
													foreach($query_run as $items)
													{
														?>
															<tr>
																<td><?= $items['DoctorID']; ?></td>
																<td><?= $items['Email']; ?></td>
																<td><?= $items['First_Name']; ?></td>
																<td><?= $items['Last_Name']; ?></td>
																<td><?= $items['Date_of_Birth']; ?></td>
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
											
											else if( strcmp($filtervalues, "Feedback Manager") == 0 ){
												$query = "SELECT * from feedback_manager";
												$query_run = mysqli_query($con, $query);

												if(mysqli_num_rows($query_run) > 0)
												{
													foreach($query_run as $items )
													{
														?>
															<tr>
																<td><?= $items['Feedback_ManagerID']; ?></td>
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
											
											else if( strcmp($filtervalues, "Inventory Manager") == 0 ){
												$query = "SELECT * from inventory_manager";
												$query_run = mysqli_query($con, $query);

												if(mysqli_num_rows($query_run) > 0)
												{
													foreach($query_run as $items)
													{
														?>
															<tr>
																<td><?= $items['Inventory_ManagerID']; ?></td>
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
											
											else if( strcmp($filtervalues, "Lab Assistant") == 0 ){
												$query = "SELECT * from lab_assistant";
												$query_run = mysqli_query($con, $query);

												if(mysqli_num_rows($query_run) > 0)
												{
													foreach($query_run as $items)
													{
														?>
															<tr>
																<td><?= $items['Lab_AssistantID']; ?></td>
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
										}
									?>
								</tbody>
						</table>
					</div>
				<br><br>
				<button onclick = "window.print();" class = "print"> Print </button>
			</div>    
		<!---footer--!>
		<!----------------------footer-------------------------------------------->
		<br><br><br><br><br><br><br><br><br><br>
		</div>
		<div class = "noprint1">
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
		</div>
   </body>	
</html>