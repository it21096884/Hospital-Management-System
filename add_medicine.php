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
				<h1 style= "color:black; text-decoration: underline;"> <center> Add Medicine </center></h1>
				</div>
				<br><br>
				
				<center><lable for ="id" style="font-size:20px">  <b>Medicine ID </b></label>
				&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
				&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp	
				&nbsp&nbsp&nbsp&nbsp
				<input type="text" name="mid" align="left" > </center>
				<br><br>				
				
				<center><lable for ="name" style="font-size:20px">  <b>Medicine Name </b></label>
				&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
				&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp	
				<input type = "text" name="txtname" align="left" id="Name" onkeyup="validateName()" required></center>
				<br>
				&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
				<span id="name_error" style="color:red; font-size:20px;">  </span>
				<span></span>
				<br><br>
				
				<center><b><label for ="type" style="font-size:20px">Type</label>
				&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
				&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp	
				&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
				&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
				<select name="mtype">
					<option value="Tablet">Tablet</option>
					<option value="Capsule">Capsule</option>
					<option value="Liquid">Liquid</option>
				</select></center></b>	
				
				
				<br><br>
				
				<center><b><label for ="issuedate" style="font-size:20px">Issue Date</label>
				&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
				&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp	
				&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
				&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
				<input type="date" name="issdate"></center>
					<br><br>
				
				<center><b><label for ="expiredate" style="font-size:20px">Expire Date</label>
				&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
				&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp	
				&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
				
				<input type="date" name="exdate"></center>
					<br><br>
					
				<center><lable for ="price" style="font-size:20px">  <b>Price </b></label>
				&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
				&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp	
				&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
				<input type="text" name="mprice" id="price" onkeyup="validatePrice()" required></center>
				<br>
				&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
				<span id="number_error" style="color:red; font-size:20px;">  </span>
					<br><br>
				
				<center><lable for ="cqty" style="font-size:20px">  <b>Current_Quantity</b></label>
				&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp	&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
				<input type="text" name="currentQty"></center><br>
				
					<br><br>
					
				<center><input type= "submit" name="btnSubmit" value="Submit" class="button"><br><br><br></center>
				
				<!--input type="submit" class="button" ><br-->
			</div>
			
			</form>
			</div>
			

		</div>

	</div>
	</fieldset>
	
<script>
	var nameError = document.getElementById('name_error');
	var numberError = document.getElementById('number_error');


function validateName(){
	var name = document.getElementById('Name').value;
	
	if(name.length == 0){
		nameError.innerHTML = "Name is required";
		return false;
	}
	
	if(name.length <= 5){
		nameError.innerHTML = "Cannot enter short form. Please enter the Full name";
		return false;
	}
	
	
	
	nameError.innerHTML = '<i class="fa-solid fa-circle-check"></i>';
	return true;
}


function validatePrice(){
	var price = document.getElementById('price').value;
	
	if(price.length == 0){
		numberError.innerHTML = "Price is required";
		return false;
	}
	
	if(!price.match(/^[0-9]+$/)){
		numberError.innerHTML = "Only numbers can be entered";
		return false;
	}
	
	numberError.innerHTML = '<i class="fa-solid fa-circle-check"></i>';
	return true;
}

</script>
	<br><br>

<!------------------------------------------php-------------------------------------------------->	
	<?php

	if(isset($_POST['btnSubmit']))
	{
		
	$MedicineID = $_POST['mid'];
	$Name = $_POST['txtname'];
	$type = $_POST['mtype'];
	$Issued_Date = $_POST['issdate'];
	$Expire_Date = $_POST['exdate'];
	$price = $_POST['mprice'];
	$Current_Quantity = $_POST['currentQty'];
	
	
	//insert query
	$sql = "INSERT INTO medicine(MedicineID,Name,type,Issued_Date,Expire_Date,price,Current_Quantity) VALUES 
	('$MedicineID','$Name','$type','$Issued_Date','$Expire_Date','$price','$Current_Quantity')";
	
	if($con -> query($sql))
	{
		echo"<script> alert('inserted succesfully') </script>";
		
	}
	else
	{
		echo"Error inserting" , $con -> error;
		
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