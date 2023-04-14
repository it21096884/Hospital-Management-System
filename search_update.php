<?php
	require 'configlab.php';
?>

<!DOCTYPE html>
<html>
	<head>
		<!-- add a title (a)-->
		<title>update Lab Report Details</title>
		
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
				width: 500px;
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
				width:150px;
				height:40px;
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
			
			
			<!--------------------------------->
			.container2{
				margin:auto;
				width: 100px;
				max-width:90%;
			}
						
			.container2 form{
				font-size:18px;
				width: 50%;
				height: 60%;
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
				width:150px;
				height:40px;
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
			<form method="POST" action=<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>>
				<h1><u>Update Lab Report</u></h1><br>
				
				<div class="form-group">
					<label for = "">Report ID  </label><br>
					<input type = "text" name="rptid" class= "from-control" required>
					<input type="submit" name="searchbtnSubmit" class="btnl" value=" Search ">
				</div>
				
				<br><br>
			</form>
		</div>
		
	<!------------------------------------------------------------------------->
	
	<?php
	
		if(isset($_POST["searchbtnSubmit"]))
		{
			$Name = $_POST['rptid'];
			
			$sqls = "SELECT * FROM lab_report WHERE ReportID LIKE '%$Name%'";
			$result = $con -> query($sqls);
			

			//read data
			
			while($row = $result -> fetch_assoc())
			{
		?>
		
		
		<div class = "container2">
		<center>
			<form method="POST"  action=<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>>
				<div class="form-group">
					<label for = "">Report ID  </label> &nbsp &nbsp  &nbsp &nbsp &nbsp  &nbsp 
					<input type="text" name="rptid" class="from-control" value = "<?php echo  $row["ReportID"]; ?>" ><br>
				</div>
				<br>
				
				<div class="form-group">
				<label for = "">Report Name  </label>&nbsp &nbsp  &nbsp &nbsp 
				<input type="text" name= "rptname" class= "from-control" value = "<?php echo   $row["Report_Name"] ; ?>" ><br>
				</div>
				<br>
				
				
				<div class="form-group">
				<label for = "">Duration to return</label>
				<input type="text" name="duration" class= "from-control" value = "<?php echo   $row["Duration_To_Return"] ; ?>" ><br>
				</div>
				<br>
				
				
				<div class="form-group">
				<label for = "">Price  </label>&nbsp &nbsp  &nbsp &nbsp &nbsp  &nbsp &nbsp  &nbsp 
				<input type="text" name="price" class= "from-control" value = "<?php echo   $row["Price"] ; ?>" ><br>
				</div>
				<br>
				 
				 <center>
				<input type="submit" name="updatebtn" class="btnl"  value=" UPDATE ">
				</center>
			</form>
		</center>
		</div>
				
				
				
<?php
		
			}	
		}

		
		
		//update---------------------------------------------------------
		
			if(isset($_POST['updatebtn']))
			{				
				$ReportID = $_POST['rptid'];
				$Report_Name = $_POST['rptname'];
				$Duration_to_Return = $_POST['duration'];
				$Price = $_POST['price'];
				
				//update query
				$sqlq = "UPDATE  lab_report SET  Report_Name= '".$_POST['rptname']."', 
				Duration_To_Return='".$_POST['duration']."', Price='".$_POST['price']."' 
				WHERE ReportID = '".$_POST['rptid']."' ";
				
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