<?php
	require 'configure.php';
?>

<html>
	<head>
		<!-- add a title (a)-->
		<title>Shedule Appointment</title>
		
		<!--add styleSheet-->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="styles/Docmain.css">
        
		<!--<script src="js1/script1.js"> </script>-->
		<meta charset = "UTF-8">
		<meta name ="viewport" content = "width = device-width , intial-scale = 1.0">
	
	   <style>


.container{
	width : 700px;
	background-color:rgb(0,0,0,0.8);
	margin: auto;
	color: #FFFFFF;
	padding: 0.5px 0px 0.5px 0px;
	text-align: center;
	border-radius: 10px 10px 0px 0px;
}
			
.container{
	background-color:#bec1c2;
	width : 500px;
	height :400px;
	padding:50px 50px 50px 50px;
	margin: auto ;
	border-radius: 20px 20px 20px 20px;
}
			
form{
	padding: 10px
	width: 150%;
}
.fromadd{
	color: black;
	font-size: 15px;
}
.formnijustify{
	display: flex;
	justify-content: space-between;
}


  		#appointment {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 95%;
}

#appointment  td, #appointment th {
  border: 1px solid #ddd;
  padding: 30px;
}

#appointment tr:nth-child(even){background-color: #f2f2f2;}

#appointment  tr:hover {background-color: #ddd;}

#appointment  th {
  padding-top: 20px;
  padding-bottom: 20px;
  text-align: left;
  background-color:#1e4e83 ;
  color: white;
}

.button {
  display: inline-block;
  padding: 12px 20px;
  font-size: 16px;
  cursor: pointer;
  text-align: center;
  text-decoration: none;
  outline: none;
  color: #fff;
  background-color:blue;
  border: none;
  border-radius: 8px;
  box-shadow: 0 9px #999;
}

.button:hover {background-color: #1e4e83}

.button:active {
  background-color: #1e4e83;
  box-shadow: 0 5px #666;
  transform: translateY(4px);
}

input[type=text] {
  width: 400px;
  box-sizing: border-box;
  border: 2px solid #ccc;
  border-radius: 4px;
  font-size: 16px;
  background-color: white;
  background-position: 10px 10px; 
  background-repeat: no-repeat;
  padding: 12px 20px 12px 40px;
  transition: width 0.4s ease-in-out;
}
input[type=time] {
  width: 400px;
  box-sizing: border-box;
  border: 2px solid #ccc;
  border-radius: 4px;
  font-size: 16px;
  background-color: white;
  background-position: 10px 10px; 
  background-repeat: no-repeat;
  padding: 12px 20px 12px 40px;
  transition: width 0.4s ease-in-out;
}
input[type=date] {
  width: 400px;
  box-sizing: border-box;
  border: 2px solid #ccc;
  border-radius: 4px;
  font-size: 16px;
  background-color: white;
  background-position: 10px 10px; 
  background-repeat: no-repeat;
  padding: 12px 20px 12px 40px;
  transition: width 0.4s ease-in-out;
}

input[type=text]:focus {
  width: 40%;
}
input[type=time]:focus {
  width: 40%;
}
input[type=date]:focus {
  width: 40%;
}
input[type=submit]{
  color:#FFFFF;
  background-color: #288ae6;
  width:120px;
  height:34px;

}
form .from-control{
	width:60%;
	height:40px;
	background:white;
	border-radius:4px;
	border:1px solid silver;
	margin:10px 0 18px 0;
	padding:0 10px;			
}
form .btnl{
	margin-left:50%;
	transform: translateX(-50%);
	width:120px;
	height:34px;
	border:none;
	outline : none;
	background: #22cfdb;
	cursor: pointer;
	font-size:16px;
	text-tranform:uppercase;
	color: black;
	border-radius:4px;
	trnsition: .3s

}
	 
	 </style>
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
	<body>
    <center><h1>UPDATE APPOINTMENTS</h1></center>
    <center>
    <div class="container">
<form method="POST" action=<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>>
<center> Appointment ID </br> <input type="text" name="AppointmentID"><br> </center>
</br> </br> </br>
<center> Appointment Time </br> <input type="time" name="Appointment_Time"><br></center>
</br> </br> </br>
<center> Appointment Date </br> <input type="date" name="Appointment_Date"><br></center>
</br> </br> </br>
 
 <center>  <input type="submit" name="btnSubmit" value="SUBMIT"></center>
 
 </div>
</form>

<?php

	if(isset($_POST['btnSubmit']))
	{
    $AppointmentID =  $_POST['AppointmentID'];	
	$Appointment_Time = $_POST['Appointment_Time'];
	$Appointment_Date= $_POST['Appointment_Date'];
	
	//insert query
	$sql = "UPDATE appointment
    SET Appointment_Time = '$Appointment_Time' , Appointment_Date = '$Appointment_Date'
    WHERE AppointmentID= '$AppointmentID' ";
	
	if($con -> query($sql))
	{
		echo"Updated succesfully";
		
	}
	else
	{
		echo"Error inserting" , $con -> error;
		
	}
	}
	
	$con ->close();
	
	

?>

</center>
</body>
<br><br><br>
	
	<!---footer--!>
	<!----------------------footer-------------------------------------------->
		<footer>
			 <img class = "image1" src="images/qr2.PNG" width="121px" height="100px">
			
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