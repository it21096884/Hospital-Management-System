<!DOCTYPE html>
<?php

	require 'config.php';
	
?>
<html>
	<head>
    
		<!-- add a title (a)-->
		<title>Add Item Form</title>
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
		<link rel="stylesheet" href="Styles/Additem.css">
		
		<!--add styleSheet-->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		
		
		
		<!--<script src="js1/script1.js"> </script>-->
		<meta charset = "UTF-8">
		<meta name ="viewport" content = "width = device-width , intial-scale = 1.0">
		<script>
		function validateForm1(){
			it= document.forms["form"]["ItID"].value;
            pr = document.forms["form"]["price"].value;
			inm = document.forms["form"]["ITName"].value;
			qt = document.forms["form"]["Qty"].value;
			var numpattern=/^[0-9]+$/;
			var pricepattern=/^([1-9]\d{0,2}(\,\d{3})*|([1-9]\d*))(\.\d{2})?$/;
			if (it==null||it=="") {
                    alert("Pl. enter the ID")
                    return false
                }
				
				else if (!pr . match(pricepattern) && pr!=""){
					alert("Enter valid price!")
                    return false
					
				}	
				else if (inm==null||inm=="") {
                    alert("Pl. enter the name")
                    return false
                }				
                else if (! qt.match(numpattern) && qt!=""){
					alert("Only enter numbers")
					return false;
				}
		
				
                else  {
                    return true; 
                }
			
		}
		</script>
		<!--script>

		function validateForm1(){
			alert("Enter valid price!")
                it= document.forms["form"]["ItID"].value;
                pr = document.forms["form"]["price"].value;
				inm = document.forms["form"]["ITName"].value;
				qt = document.forms["form"]["Qty"].value;
				var numpattern=/^[0-9]+$/;
				var pricepattern=/^([1-9]\d{0,2}(\,\d{3})*|([1-9]\d*))(\.\d{2})?$/;
				if (it==null||it=="") {
                    alert("Pl. enter the ID")
                    return false
                }
				
				else if (!pr . match(pricepattern) && pr!=""){
					alert("Enter valid price!")
                    return false
					//document.getElementsByID('formid').submit()
                 
				}	
				else if (inm==null||inm=="") {
                    alert("Pl. enter the name")
                    return false
                }				
                else if (! qt.match(numpattern) && qt!=""){
					alert("Only enter numbers")
					return false;
				}
		
				
                else  {
                    return true; 
                }
            }
		
		</script-->
		<style>
		
			.button {
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
				transition: all 0.3s ease; 
			}
			.button span {
				letter-spacing: 3px;
				-webkit-transition: all 0.3s;
				-moz-transition: all 0.3s;
				-o-transition: all 0.3s;
				transition: all 0.3s; }
			.button::after {
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
		.button:hover {
				background: #0072fd; }
				button:hover span {
				  opacity: 0;
				  -webkit-transform: translate(0px, 40px);
				  transform: translate(0px, 40px); }
		.button:hover::after {
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
				<form name="form" action="Additm.php" method="post" onsubmit="return   validateForm1()">
					<h3>Add Item Details</h3>
					<div class="form-row">
						<div class="form-wrapper">
							<label for="">Item ID</label>
							<input type="text" name="ItID" class="form-control" placeholder="IT400">
						</div>
						<div class="form-wrapper">
							<label for="">Price</label>
							<input type="text" name="price" class="form-control" placeholder="Enter Price">
						</div>
					</div>
					<div class="form-row">
						<div class="form-wrapper">
							<label for="">Item Name</label>
							<input type="text" name="ITName" class="form-control" placeholder="Enter Name">
						</div>
						<div class="form-wrapper">
							<label for="">Quantity</label>
							<input type="text" name="Qty" class="form-control" placeholder="0">
						</div>
					</div>
					<div class="form-row">
						<div class="form-wrapper">
							<label for="">Supplier Name</label>
							<select  id="" name="sname" class="form-control">
								<option value="Ravi Filipe">Ravi Filipe</option>
								<option value="Rohit Valentin">Rohit Valentin</option>
								<option value="Vester Ainhoa">Vester Ainhoa</option>
								<option value="Rahel Roswell">Rahel Roswell</option>
								<option value="Cleopas Amber">Cleopas Amber</option>
								
							</select>
							<i class="zmdi zmdi-chevron-down"></i>
						</div>
						<div class="form-wrapper">
							<label for="">Discription</label>
							<textarea rows="4" cols="50" name="Dis" class="form-control" value="" placeholder="Enter text here..."></textarea>
							
						</div>
					</div>
					<input type= "submit" value="ADD" class="button"><br>
					<!--button data-text="ADD">
						<span>ADD</span>
					</button-->
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
						<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
					<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
					<li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
					</ul>
				</div>
				
				<br>
			</footer>
		
   </body>	

</html>