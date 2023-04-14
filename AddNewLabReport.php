<?php
	require 'configlab.php';
?>
<!DOCTYPE html>
<html>
	<head>
		<!-- add a title (a)-->
		<title> New Lab Report</title>
		
		<!--add styleSheet-->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="Styles/HeaderFooter.css">
		<script src="https://kit.fontawesome.com/7e9997bdc9.js" crossorigin="anonymous"></script>
		
		<!--<script src="js1/script1.js"> </script>-->
		<meta charset = "UTF-8">
		<meta name ="viewport" content = "width = device-width , intial-scale = 1.0">
		
		<style>
		
			.container{
				margin:auto;
				width: 650px;
				max-width:90%;
			}
						
			.container form{
				font-size:18px;
				width: 110%;
				height: 70%;
				padding:20px;
				background:white;
				border-radius:4px;
				background:white;
				box-shadow:0 8px 16px rgba(0,0,0,.3);
				
			}
			
			.container form h1{
				font-family: Arial;
			}

			.container form .from-control{
				
				width:60%;
				height:40px;
				background:white;
				border-radius:4px;
				border:1px solid silver;
				margin:10px 0 18px 0;
				padding:0 10px;			
			}
			
			.container form .btnl{
				margin-left:50%;
				transform: translateX(-50%);
				width:160px;
				height:45px;
				border:none;
				outline : none;
				background: #424242;
				cursor: pointer;
				font-size:16px;
				text-tranform:uppercase;
				color: white;
				border-radius:4px;
				trnsition: .3s

			}

			.container form .btnl:hover{
				opacity: .7;
			}
			
			.form-group span{
				position: absolute;				
				font-size:16px;
				color:red;
			}
			
			#submit_error{
				color:red;
			}
			
			.form-group span i{
				color : seagreen;
			}
			
			
		
		
		</style>
		
	
	
	</head> 
	<body>
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
	
	
	<!---------------------------------------------------------------------------------------->
		<div class = "container">
			<form method= "POST" action=<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>>
				<h1><u>Add New Lab Report</u></h1><br>
				<div class="form-group">
					<label for = "">Report ID   :</label>&nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp  &nbsp 
					<input type = "text" name="rptID" class= "from-control" required>
				</div>
				<br>
				
				<div class="form-group">
					<label for = "">Report Name  : </label>&nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp &nbsp  &nbsp 
					<input type = "text" name="rptName" class= "from-control" placeholder="Add report Name" id="report_name" onkeyup="validateName()" required>
					<br>
					<span id="name_error">  </span>
					<!--Can not enter short form. Please enter the Standard name-->
				</div>
				<br>
				
				<div class="form-group">
					<label for = "">Duration to return : </label>	&nbsp &nbsp &nbsp  &nbsp				
					<input type = "text" name="duration" class= "from-control" placeholder="Add Duration Hours to return report" id="report_time" onkeyup="validateTime()"required>
					<br>
					<span id="duration_error">  </span>
					<!--The time should be less than 120 hours-->
				</div>
				<br>
				
				<div class="form-group">
					<label for = "">Price   : </label>&nbsp &nbsp &nbsp  &nbsp  &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp  &nbsp
					<input type = "text" name="price" class= "from-control" placeholder="Add Price for report" id="report_price" onkeyup="validatePrice()" required>
					<br>
					<span id="number_error">  </span>
					<!--Only numbers can be entered-->
				</div>
				<br>
				
				<input type="submit" name="btnSubmit" class="btnl" value="ADD REPORT">
				<br>
				<span id="submit_error"> </span>
				
				<br><br>
			</form>
		</div>
		
	<!-------------------------------------------------------------------------->	
	<?php

	if(isset($_POST['btnSubmit']))
	{
		
	$ReportID = $_POST['rptID'];
	$Report_Name = $_POST['rptName'];
	$Duration_to_Return = $_POST['duration'];
	$Price = $_POST['price'];
	
	//insert query
	$sql = "INSERT INTO lab_report (ReportID,Report_Name,Duration_to_Return,Price) VALUES 
	('$ReportID','$Report_Name','$Duration_to_Return',$Price)";
	
	if($con -> query($sql))
	{
		echo"<script> alert('inserted succesfully') </script>";
		
	}
	else
	{
		echo"Error inserting" , $con -> error;
		
	}
	}
	
	$con ->close();
	
	

?>

	<script src="validationlab.js"> </script>

	
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
</html>