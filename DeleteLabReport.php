<?php
	require 'configlab.php';
?>

<!DOCTYPE html>
<html>
	<head>
		<!-- add a title (a)-->
		<title>Delete Lab Report Details</title>
		
		<!--add styleSheet-->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="Styles/HeaderFooter.css">
		
		<!--<script src="js1/script1.js"> </script>-->
		<meta charset = "UTF-8">
		<meta name ="viewport" content = "width = device-width , intial-scale = 1.0">
		
		
		<style>
		.container{
				margin:auto;
				width: 700px;
				max-width:90%;
				height :600px;
			}
						
			.container form{
				width: 100%;
				height: 93%;
				padding:20px;
				background:white;
				border-radius:4px;
				background:white;
				box-shadow:0 8px 16px rgba(0,0,0,.3);
				
			}
			
			.container form h1{
				font-family: Arial;
				text-align:left;
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
			
			
			.content_table{
				border-collapse: collapse;
				padding-top: 10px;
				padding-bottom: 10px;
				border-spacing: 100px 50px;
				margin: 50px 10px;
				font-size :0.5cm;
				min-width:300px;							
			}
			
			th{
				background: #DBF3FA;
				padding: 15px 35px;
			}
			
			td{
				padding: 15px 35px;								
			}
			
			tr { 
				background: #E8E9EB;			
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
	
	<div class = "container">
		
			<form method="POST" action=<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>>
				<h1><u>Delete Lab Report</u></h1><br>
				
					<div class="form-group">
						<label for = "">Report ID  </label><br>
						<input type = "text" name="rptid" class= "from-control" required>
						<input type="submit" name="searchbtnSubmit" class="btnl" value=" Search ">
					</div>
				<br><br><br>
				
				
		
	<!------------------------------------------------------------------------->
	<?php
		if(isset($_POST["searchbtnSubmit"]))
		{
			$Name = $_POST['rptid'];
			
			$sqls = "SELECT * FROM lab_report WHERE ReportID LIKE '%$Name%'";
			$result = $con -> query($sqls);

			if($result -> num_rows > 0){
				
				?>
				<table class="content_table">
				
				<?php
			
			echo "<th> ReportID </td> 
				<th> Report_Name </th> 
				<th> Duration_To_Return </th>
				<th> Price </th>";
			
				//read data			
				while($row = $result -> fetch_assoc()){
					echo "<tr>";
					echo "<td>" . $row["ReportID"] . "</td>"; 
					echo "<td>" . $row["Report_Name"] . "</td>";
					echo "<td>" . $row["Duration_To_Return"] . "</td>";
					echo "<td>" . $row["Price"] . "</td>";
					echo "</tr>";	
				}
			
				echo "</table>";
			}
						
			else{
			echo "<script> alert('No Records!!') </script>";
			}

		}	
?>


	
<?php	
		//delete-----------------------------------------------------------
		if(isset($_POST['deletebtnSubmit']))
		{
			
			$ReportID = $_POST['rptid'];
			
			//insert query
			$sql = "DELETE FROM lab_report where ReportID = '$ReportID'";
			
			if($con -> query($sql)){
				echo "<script> alert('deleted succesfully') </script>";
			}
				
			else{
				echo "Error deleting" , $con -> error;
			}
		}
		
		$con ->close();
?>

		<br><br>
		<input type="submit" name="deletebtnSubmit" class="btnl" value=" DELETE ">
				
				<br><br><br><br>
				<br><br><br><br>
				<br><br><br><br>
				
			
			</form>		
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
</html>