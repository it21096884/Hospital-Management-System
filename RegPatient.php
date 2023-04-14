<?php
	require 'configlab.php';
?>

<!DOCTYPE html>
<html>
	<head>
		<!-- add a title (a)-->
		<title>Register Patient Report</title>
		
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
				width: 600px;
				max-width:90%;
			}
						
			.container form{
				font-size:20px;
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
				width:150px;
				height:40px;
				border:none;
				outline : none;
				background: #424242;
				cursor: pointer;
				font-size:20px;
				text-tranform:uppercase;
				color: white;
				border-radius:4px;
				trnsition: .3s

			}

			.container form .btnl:hover{
				opacity: .7;
			}
		
			.container2{
				margin:auto;
				width: 700px;
				max-width:90%;
			}
						
			.container2 form{
				font-size:20px;
				width: 100%;
				height: 105%;
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
				height:60px;
				background:white;
				border-radius:4px;
				border:1px solid silver;
				margin:10px 0 18px 0;
				padding:0 10px;			
			}
			
			.container2 form .btnl{
				margin-left:50%;
				transform: translateX(-50%);
				width:150px;
				height:40px;
				border:none;
				outline : none;
				background: #424242;
				cursor: pointer;
				font-size:20px;
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
	<div class = "container">
			<form method="POST" action=<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?> >
				<h1><u>Patient Report Details</u></h1>
				<br>
				<div class="form-group">
					<label for = "">Search </label>
					<input type = "text" name="ptid" class= "from-control" >
					<br>
					<input type="submit" name="searchbtnSubmit" class="btnl" value=" Search ">
				</div>
			</form>
	</div>
				
		<!------------------------------------------------------------------------->
		<?php
		
			if(isset($_POST["searchbtnSubmit"]))
			{
				$Name = $_POST['ptid'];
				$RptName = 
				$sqls = "SELECT * FROM patient WHERE PatientID LIKE '%$Name%'";
				$result = $con -> query($sqls);
				

				//read data
				
				while($row = $result -> fetch_assoc())
				{
					
			?>
			
			
			
			<div class = "container2">
				<form method="POST" action=<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>>
				
					<div class="form-group">
						<label for = "">Lab Report ID  :</label>
						<input type = "text" name="rptnid" class="from-control" >
					</div>
							
				
					<div class="form-group">
						<label for = "">Report Name  :</label> 
						<input type = "text" name="rptname" class="from-control" value = "<?php echo  $row["LabType"]; ?>" >
					</div>
					
					<div class="form-group">
						<label for = "">Patient Name  :</label> 
						<input type = "text" name="patientname" class= "from-control" value = "<?php echo  $row["First_Name"]; ?>">
					</div>
				
					<div class="form-group">
						<label for = "">Patient ID  :</label>
						<input type = "text" name="ptid" class= "from-control"  value = "<?php echo  $row["PatientID"]; ?>">
					</div>
					
					<div class="form-group">
						<label for = ""> Email  :</label>
						<input type = "text" name="mail" class= "from-control" value = "<?php echo  $row["Email"]; ?>">
					</div>
					
					<div class="form-group">
						<label for = ""> Contact Number  :</label>
						<input type = "text" name="ctnumber" class= "from-control" value = "<?php echo  $row["Telephone"]; ?>">
					</div>
					
					<div class="form-group">
						<label for = "">Report Requested Date :</label>
						<input type = "date" name="rqestdate" class= "from-control" value = "<?php echo   date("Y-m-d") ; ?>">
					</div>
					
					<div class="form-group">
						<label for = ""> Cost   :</label>
						<input type = "text" name="cost" class= "from-control" value = "1500.00">
					</div>
				
					<input type="submit" name="btnsybmit" class="btnl" value="SUBMIT">
				
				<br><br>	
			</form>		
		</div>
<?php
		
			}	
		}
		
		
		if(isset($_POST['btnsybmit']))
		{			
			$LabReportID = $_POST['rptnid'];
			$ReportName = $_POST['rptname'];
			$PatientName = $_POST['patientname'];
			$PatientID= $_POST['ptid'];
			$Email = $_POST['mail'];
			$ContactNumber = $_POST['ctnumber'];
			$RtRequestedDate = $_POST['rqestdate'];
			$Cost = $_POST['cost'];
		
			
			//insert query
			$sql = "INSERT INTO lab (Lab_ReportID,Cost,PatientID,Patient_RequestedDate) VALUES 
			('$LabReportID','$Cost','$PatientID',$RtRequestedDate)";
			
			if($con -> query($sql)){
				echo"<script> alert('inserted succesfully') </script>";				
			}
			
			else{
				echo"Error inserting" , $con -> error;
				
			}
		}
			
			$con ->close();		
		
?>
	
		
	<!------------------------------------------------------------------------->
	
	
	
	
	
	
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