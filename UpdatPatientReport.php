<?php 
	require 'configlab.php';
?>	

<!DOCTYPE html>
<html>
	<head>
		<!-- add a title (a)-->
		<title> Update Patient Report</title>
		
		<!--add styleSheet-->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="Styles/HeaderFooter.css">
		<link rel="stylesheet" href="Styles/forml.css">
		
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
				width: 100%;
				height: 35%;
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
				font-size:19px;
				text-tranform:uppercase;
				color: white;
				border-radius:4px;
				trnsition: .3s

			}

			.container form .btnl:hover{
				opacity: .7;
			}
			
			<!------------------------------------------------->
			.container2{
				margin:auto;
				width: 650px;
				max-width:90%;
			}
						
			.container2 form{
				font-size:23px;
				width: 60%;
				height: 85%;
				padding:20px;
				background:white;
				border-radius:4px;
				background:white;
				box-shadow:0 8px 16px rgba(0,0,0,.3);
				
			}
			
			.container2 form h1{
				font-family: Arial;
			}

			.container2 form .from-control{
				
				width:60%;
				height:40px;
				background:white;
				border-radius:4px;
				border:1px solid silver;
				margin:10px 0 18px 0;
				padding:0 10px;			
			}
			
			.container2 form .btnl{
				margin-left:50%;
				transform: translateX(-50%);
				width:160px;
				height:45px;
				border:none;
				outline : none;
				background: #424242;
				cursor: pointer;
				font-size:19px;
				text-tranform:uppercase;
				color: white;
				border-radius:4px;
				trnsition: .3s

			}

			.container2 form .btnl:hover{
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
	<center>
	<div class = "container">
			<form method="POST" action=<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>>
				<h1><u>Update Patient Lab Report</u></h1><br>
				
				<div class="form-group">
					<label for = "">Lab Report ID  </label><br>
					<input type = "text" name="lbrptid" class= "from-control" required>
					<input type="submit" name="searchbtnSubmit" class="btnl" value=" Search ">
				</div>
				
				<br><br>
			</form>
	</div>
	<center>
		
	<!-----------------//geting details-------------------------------------------------------->
	
	<?php
	
		if(isset($_POST["searchbtnSubmit"]))
		{
			$Name = $_POST['lbrptid'];
			
			$sqls = "SELECT * FROM lab WHERE Lab_ReportID LIKE '%$Name%'";
			$result = $con -> query($sqls);
			

		//read data			
		while($row = $result -> fetch_assoc())
		{
		?>
		
		
		<div class = "container2">
		
			<form method="POST"  action=<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>>
				<div class="form-group">
					<label for = "">Report ID  </label>
					<input type="text" name="lbrptid" class="from-control" value = "<?php echo $row["Lab_ReportID"]; ?>" ><br>
				</div>
				<br>
				
				<div class="form-group">
				<label for = "">Patient ID  </label>
				<input type="text" name= "ptname" class= "from-control" value = "<?php echo $row["PatientID"]; ?>" ><br>
				</div>
				<br>
						
				<div class="form-group">
				<label for = "">Result Report  </label>
				<input type="text" name="rerpt" class= "from-control" value = "<?php echo $row["Report_Result"]; ?>" ><br>
				</div>
				<br>
							
				<div class="form-group">
				<label for = "">Payment Status  </label>
				<input type = "radio" name="paystatus" value="done"> Done <br>
				&nbsp &nbsp &nbsp  &nbsp &nbsp   &nbsp &nbsp   &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp  &nbsp <input type = "radio" name="paystatus" value="pending"> Pending<br>
				<!--<input type="text" name="rerpt" class= "from-control" value = "<?php //echo $row["Report_Result"]; ?>" ><br>-->
				</div>
				<br>
				
				<div class="form-group">
				<label for = "">Report Status  </label>
					<input type = "radio" name="reortstatus" value="pending" > Pending<br>
					&nbsp &nbsp &nbsp  &nbsp &nbsp   &nbsp &nbsp   &nbsp &nbsp &nbsp &nbsp  &nbsp  &nbsp <input type = "radio" name="reortstatus" value="available"> Avaiable <br>
					&nbsp &nbsp &nbsp  &nbsp &nbsp   &nbsp &nbsp   &nbsp &nbsp &nbsp &nbsp <input type = "radio" name="reortstatus" value="issued"> Isuued<br>
					<!--<input type="text" name="rerpt" class= "from-control" value = "<?php //echo $row["Report_Result"]; ?>" ><br>-->
				</div>
				<br>
				 
				 <center>
				<input type="submit" name="updatebtn" class="btnl"  value=" UPDATE ">
				</center>
			</form>
		
		</div>
		
				
				
				
<?php		
			}	
		}
		
		//update---------------------------------------------------------
		
			if(isset($_POST['updatebtn']))
			{				
				$ReportID = $_POST['lbrptid'];
				$Patientt_Name = $_POST['ptname'];
				$Result_report = $_POST['rerpt'];
				
				//update query
				$sqlq = "UPDATE  lab SET  Report_Name= '".$_POST['rptname']."', Duration_To_Return='".$_POST['duration']."', Price='".$_POST['price']."' WHERE ReportID = '".$_POST['rptid']."' ";
				
				if($con -> query($sqlq)){
					echo"<script> alert('updated succesfully') </script>";
				}
				
				else{
					echo"Error updating" , $con -> error;			
				}			
			}
			
			$con ->close();		
?>
	
	
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