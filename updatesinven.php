<!DOCTYPE html>
<?php
	include_once 'config.php';
	if(count($_POST)>0) {
		mysqli_query($con,"UPDATE supplier set SupplierID='" . $_POST['ID'] . "', Name='" . $_POST['Name'] . "', Email='" . $_POST['Email'] . "', Company='" . $_POST['Company'] . "' WHERE SupplierID='" . $_POST['ID'] . "'");
	
		header('location:supplierD.php');
	}
	$result = mysqli_query($con,"SELECT * FROM supplier WHERE SupplierID='" . $_GET['id'] . "'");
	$row= mysqli_fetch_array($result);
?>

<html>
	<head>
    
		<!-- add a title (a)-->
		<title>Supplier Update Form</title>
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
		<style>
		
				button {

  box-shadow: 0px 8px 15px rgba(0, 0, 0, 0.5);
  border: none;
  width: 173px;
  height: 42px;
  margin-top: 30px;
  cursor: pointer;
  display: flex;
  align-items: center;
  justify-content: center;
  padding: 0;
  background: #424242;
  color: #fff;
  text-transform: uppercase;
  font-family: "Muli-SemiBold";
  font-size: 15px;
  position: relative;
  transition: all 0.3s ease; }
  button span {
    letter-spacing: 3px;
    -webkit-transition: all 0.3s;
    -moz-transition: all 0.3s;
    -o-transition: all 0.3s;
    transition: all 0.3s; }
  button:after {
    content: attr(data-text);
    position: absolute;
    width: 100%;
    height: 100%;
    top: 50%;
    left: 0;
    opacity: 0;
    letter-spacing: 3px;
    -webkit-transform: translate(-30%, -25%);
    transform: translate(-30%, -25%);
    -webkit-transition: all 0.3s;
    -moz-transition: all 0.3s;
    -o-transition: all 0.3s;
    transition: all 0.3s; }
  button:hover {
    background: #0072fd; }
    button:hover span {
      opacity: 0;
      -webkit-transform: translate(0px, 40px);
      transform: translate(0px, 40px); }
    button:hover:after {
      opacity: 1;
      -webkit-transform: translate(0, -25%);
      transform: translate(0, -25%); }
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
		<div class="wrapper">
			<br>
			<center>
			<div class="inner">
				<form name="frmUser" method="post" action="">
				<div>
				</div>
					<h3>Update Supplier Details</h3>
					<center>
						<div class="form-row">
							<div class="form-wrapper">
								<label for="">Supplier ID </label>
								<input type="text" name="ID" class="form-control" Value="<?php echo $row['SupplierID']?>">
							</div>
						</div>	
						<div class="form-row">
							<div class="form-wrapper">
								<label for="">Name</label>
								<input type="text"  name="Name" class="form-control"  placeholder="Enter item name" Value="<?php echo $row['Name']?>">
							</div>
						</div>
						<div class="form-row last">
							<div class="form-wrapper">
								<label for="">Email</label>
								<input type="text" name="Email" class="form-control" placeholder="Enter suplier name" Value="<?php echo $row['Email']?>">
								
							</div>
						</div>
						<div class="form-row last">
							<div class="form-wrapper">
								<label for="">Company</label>
								<input type="text" name="Company" class="form-control" placeholder="0" Value="<?php echo $row['Company']?>">
								
							</div>
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