<!DOCTYPE html>
<?php
	include_once 'config.php';
	if(count($_POST)>0) {
		mysqli_query($con,"UPDATE item set ItemID='" . $_POST['ID'] . "', Name='" . $_POST['Name'] . "', Price='" . $_POST['Price'] . "', Current_Stock='" . $_POST['Current_Stock'] . "' ,SupplierName='" . $_POST['SupplierName'] . "' WHERE ItemID='" . $_POST['ID'] . "'");
		
		header('location:StocksD.php');
	}
	$result = mysqli_query($con,"SELECT * FROM item WHERE ItemID='" . $_GET['id'] . "'");
	$row= mysqli_fetch_array($result);
?>

<html>
	<head>
    
		<!-- add a title (a)-->
		<title>Item Update Form</title>
				<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<!-- LINEARICONS -->
		<link rel="stylesheet" href="fonts/linearicons/style.css">

		<!-- MATERIAL DESIGN ICONIC FONT -->
		<link rel="stylesheet" href="fonts/material-design-iconic-font/css/material-design-iconic-font.min.css">

		<!-- DATE-PICKER -->
		<link rel="stylesheet" href="vendor/date-picker/css/datepicker.min.css">
		
		<!-- STYLE CSS -->
		<link rel="stylesheet" href="Styles/Docmain.css">
		<link rel="stylesheet" href="Styles/update.css">
		
		<!--add styleSheet-->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		
		
		
		<!--<script src="js1/script1.js"> </script>-->
		<meta charset = "UTF-8">
		<meta name ="viewport" content = "width = device-width , intial-scale = 1.0">
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
		<div class="wrapper">
			<br>
			<center>
			<div class="inner">
				<form name="frmUser" method="post" action="">
				<div>
				</div>
					<h3>Update Item Details</h3>
					<center>
						<div class="form-row">
							<div class="form-wrapper">
								<label for="">Item ID </label>
								<input type="text" name="ID" class="form-control" placeholder="<?php echo $row['ItemID']?>" Value="<?php echo $row['ItemID']?>">
							</div>
						</div>	
						<div class="form-row">
							<div class="form-wrapper">
								<label for="">Item Name</label>
								<input type="text"  name="Name" class="form-control"  placeholder="Enter item name" Value="<?php echo $row['Name']?>">
							</div>
						</div>
						<div class="form-row last">
							<div class="form-wrapper">
								<label for="">Price</label>
								<input type="text" name="Price" class="form-control" placeholder="Enter suplier name" Value="<?php echo $row['Price']?>">
								
							</div>
						</div>
						<div class="form-row last">
							<div class="form-wrapper">
								<label for="">Current stock</label>
								<input type="text" name="Current_Stock" class="form-control" placeholder="0" Value="<?php echo $row['Current_Stock']?>">
								
							</div>
						</div>
						<div class="form-row">
						<div class="form-wrapper">
							<label for="">Supplier Name</label>
							<select  name="SupplierName" class="form-control" placeholder="Enter suplier name" Value="<?php echo $row['SupplierName']?>" class="form-control">
								<option value="Ravi Filipe">Ravi Filipe</option>
								<option value="Rohit Valentin">Rohit Valentin</option>
								<option value="Vester Ainhoa">Vester Ainhoa</option>
								<option value="Rahel Roswell">Rahel Roswell</option>
								<option value="Cleopas Amber">Cleopas Amber</option>
								
							</select>
							<i class="zmdi zmdi-chevron-down"></i>
						</div>
						
					</center>
					<button data-text="Update">
						<span>Update</span>
					</button>
				</form>
			</div>
			</center>
		
			<script src="js/jquery-3.3.1.min.js"></script>

			<!-- DATE-PICKER -->
			<script src="vendor/date-picker/js/datepicker.js"></script>
			<script src="vendor/date-picker/js/datepicker.en.js"></script>

			<script src="js/main.js"></script>
		
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