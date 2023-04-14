<?php
	require 'config.php';
?>

<!DOCTYPE html>
<html>
	<head>
		<!-- add a title (a)-->
		<title>Lab Reports</title>
		
		<!--add styleSheet-->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="Styles/HeaderFooter.css">
		<link rel="stylesheet" href="Styles/LabReportD.css">
		
		<!--<script src="js1/script1.js"> </script>-->
		<meta charset = "UTF-8">
		<meta name ="viewport" content = "width = device-width , intial-scale = 1.0">
		
		<style>
		
		.container{
				margin:auto;
				width: 800px;
				max-width:90%;
			}
						
			.container form{
				width: 100%;
				height: 70%;
				padding:20px;
				background:white;
				border-radius:4px;
				background:white;
				box-shadow:0 8px 16px rgba(0,0,0,.3);
				
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
	width:120px;
	height:34px;
	border:none;
	outline : none;
	background: #27a327;
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
	
	
	<!------------------------------------------------------------------------->
	
	<h1> &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp  Lab Report Details </h1>
	<br>
	
	
	<a class="btn btn-primary" href="AddNewLabReport.php" role= "button"> New Report </a>
	<div class = "tb1">
	<center>
	<table border ="1" width="75%" class = "tbstyle">
		<?php

		$sql = "SELECT * FROM lab_report";
		$result = $con -> query($sql);

		if($result -> num_rows > 0)
		{
			echo "<table border='1' >";
			echo "<th> ReportID </td> 
			<th> Report_Name </th> 
			<th> Duration_To_Return </th>
			<th> Price </th> ";
			
			//read data
			while($row = $result -> fetch_assoc())
			{
				echo "<tr>";
				echo "<td>" . $row["ReportID"] . "</td>"; 
				echo "<td>" . $row["Report_Name"] . "</td>";
				echo "<td>" . $row["Duration_To_Return"] . "</td>";
				echo "<td>" . $row["Price"] . "</td>";
				echo "</tr>";	
			}
			
			echo "</table>";
		}

		else
		{
			echo "<script> alert('No Records!!') </script>";
		}

?>
	
	
	
	</center>
	</div>
	
	<br><br>
		&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp 
		&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
		<button type="button" class ="btn" oncick="location.href='https://courseweb.sliit.lk/'">  ADD REPORT  </button>
		&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
		<button type="button" class ="btn" oncick="location.href='https://courseweb.sliit.lk/'">  UPDATE REPORT  </button>
		&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
		<button type="button" class ="btn" onclick="location.href='https://courseweb.sliit.lk/'">  DELETE REPORT  </button>
	<br><br>
	<!-------------------------------------------------------------------------------------------->
	

	
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