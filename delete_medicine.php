<?php
	require 'configure.php';
?>

<html>
	<head>
		<!-- add a title (a)-->
		<title>PharmacyMS</title>
		
		<!--add styleSheet-->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="Styles/home.css">
		<link rel="stylesheet" href="styles/addMedicine.css">
		<!--<script src="js1/script1.js"> </script>-->
		<meta charset = "UTF-8">
		<meta name ="viewport" content = "width = device-width , intial-scale = 1.0">
	
	 
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
	
	<br><br>
	
	<!-------------------------------form----------------------------------------->
	<fieldset style= 'font-family: Arial'>
	<div id="imghalf">

		<div id="div1">
			
				<div class="fromadd">
				<form method="POST" id="formnijustify" action=<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>>
				
				<div class="nameadd">
				<br>
				
				<div class="sign_formad"  >
				<h1 style= "color:black; text-decoration: underline;"> <center> Delete Medicine </center></h1>
				</div>
				<br><br>
				
				<center><lable for ="id">  <b>Medicine ID </b></label>
				&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
				&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp	
				&nbsp&nbsp&nbsp&nbsp
				<input type="text" name="mid" align="left" > </center>
				<br><br>				
					
				<center><input type= "submit" name="btnSubmit" value="Submit" class="button"><br><br><br></center>
				
				<!--input type="submit" class="button" ><br-->
			</div>
			
			</form>
			</div>
			

		</div>

	</div>
	</fieldset>
	
	<br><br>
	
	<!------------------------------------------php-------------------------------------------------->	
	<?php

	if(isset($_POST['btnSubmit']))
	{
		
	$MedicineID = $_POST['mid'];
	
	//insert query
	$sql = "DELETE FROM medicine where MedicineID = '$MedicineID'";
	
	if($con -> query($sql))
	{
		echo"<script> alert('deleted succesfully') </script>";
		
	}
	else
	{
		echo"Error deleting" , $con -> error;
		
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
</head>
</html>