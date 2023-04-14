<!DOCTYPE html>
<?php
	include_once 'config.php';
	
										
		$sql = "DELETE FROM item WHERE ItemID='" . $_GET['did'] . "'";
		if (mysqli_query($con, $sql)) {
		echo "Record deleted successfully";
		header('location:StocksD.php');
		} else {
		echo "Error deleting record: " . mysqli_error($con);
			}
		mysqli_close($con);
?>

	
	/*/ resultser int result variable
	$result = mysqli_query($con,"SELECT * FROM item WHERE ItemID='" . $_GET['did'] . "'");
	
	if ( $result -> num_rows>0)
	{
		while ($row = $result -> fetch_assoc())
		{	
			$ItemID=$row['ItemID'];
			$Name=$row['Name'];
			$Price=$row['Price'];
			$Current_Stock=$row['Current_Stock'];
			$SupplierName=$row['SupplierName'];
							
									
		}
		
	}
		// read data
?>*/

//?php
	//include_once 'config.php';
	
	//$result = mysqli_query($con,"SELECT * FROM item WHERE ItemID='" . $_GET['did'] . "'");
	//$row= mysqli_fetch_array($result);


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
			<!--center>
			<div class="inner">
				<form name="frmUser" >
				<div>
				</div>
					<h3>Delete Item Details</h3>
					<center>
						<div class ="righttop">
							<center>
													
												<table border="0" width="100%" height="100%">
													<tr>
														<td><h4>ItemID</h4></td>
														<td><p class="pr"><?php echo $ItemID?></p> </td>
													</tr>
													<tr>
														<td><h4>Name</h4></td>
														<td><p class="pr"><?php echo $Name ?></p></td>
													</tr>
													<tr>
														<td><h4>Price</h4></td>
														<td><p class="pr"><?php echo $Price ?></p></td>
													</tr>
													<tr>
														<td><h4>Current Stock</h4></td>
														<td><p class="pr"><?php echo $Current_Stock ?></p></td>
													</tr>
													<tr>
														<td><h4>Supplier Name</h4></td>
														<td><p class="pr"><?php echo $SupplierName ?></p></td>
													</tr>
												</table>
											</center>
										</div>
									</center-->
									<?php
										
										$sql = "DELETE FROM item WHERE ItemID='" . $_GET['did'] . "'";
										if (mysqli_query($con, $sql)) {
											echo "Record deleted successfully";
											header('location:StocksD.php');
										} else {
											echo "Error deleting record: " . mysqli_error($con);
										}
										mysqli_close($con);
									?>
									<!--button onclick="window.location='del.php';"><a href="del.php?did=<//?php echo $ItemID; ?>">Delete</a>
										<span><a href="del.php?sid=<//?php echo $ItemID; ?>">Delete</a></span>
									</button-->
							
					<!--button type="button" class="sbutton"><a href="del.php?did=//<//?php echo $ItemID; ?>">Delete</a></button>--
					<!--button type="button" class="sbutton"><a href="del.php?sid=<//?php echo $row["ItemID"]; ?>">Delete</a></button-->
					<!--button ><a href="del.php?sid=<//?php echo $row["ItemID"]; ?>">delete</a>
						<span>Delete</span>
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
						<li><a href="#" class="fa fa-facebook"></a></li>
						<li><a href="#" class="fa fa-twitter"></a></li>
						<li><a href="#" class="fa fa-instagram"></a></li>
					</ul>
				</div>
				
				<br>
			</footer>
		
   </body>	

</html>











