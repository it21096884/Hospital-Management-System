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
		<!--<script src="js1/script1.js"> </script>-->
		<meta charset = "UTF-8">
		<meta name ="viewport" content = "width = device-width , intial-scale = 1.0">
		
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
		
		<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js"></script>
	
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
	background-color:#e5e9e6;
	width : 1000px;
	height :1400px;
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


  		#medi {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 95%;
}

#medi  td, #medi th {
  border: 1px solid #ddd;
  padding: 30px;
}

#medi tr:nth-child(even){background-color: #f2f2f2;}

#medi  tr:hover {background-color: #ddd;}

#medi  th {
  padding-top: 20px;
  padding-bottom: 20px;
  text-align: left;
  background-color:#1e4e83 ;
  color: white;
}

.button {
  display: inline-block;
  padding: 30px 80px;
  font-size: 17px;
  cursor: pointer;
  text-align: center;
  text-decoration: none;
  outline: none;
  color: #fff;
  background-color: black;
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

input[type=text]:focus {
  width: 40%;
}

#text{
	color : black;
	
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
		
	</div>
	
	
	<br><br><br>
		<div class="container">
		<center><h1 style="font-size :40px; color:black;  text-decoration: underline; "><b>MONTHLY REPORT </b></h1></center><br>
		
		<h3 style="text-align: left; color:black; ">Amoxicillin 250mg</h3><br>
		<div class="progress">
		<div class="progress-bar progress-bar-success progress-bar-striped" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="50" style="width:80%">
		17500
		</div>
		</div><br>
  
		<h3 style="text-align: left; color:black; ">Paracetemol</h3><br>
		<div class="progress">
		<div class="progress-bar progress-bar-info progress-bar-striped" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width:70%">
		10000
		</div>
		</div><br>
  
		<h3 style="text-align: left; color:black; ">Chepalexin 250mg</h3><br>
		<div class="progress">
		<div class="progress-bar progress-bar-warning progress-bar-striped" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width:50%">
		4500
		</div>
		</div><br>
		
		<h3 style="text-align: left; color:black; ">Demerol 50mg</h3><br>
		<div class="progress">
		<div class="progress-bar progress-bar-danger progress-bar-striped" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width:40%">
		2000
		</div>
		</div><br>
		
		<h3 style="text-align: left; color:black; ">Pyridoxin 2mg</h3><br>
		<div class="progress">
		<div class="progress-bar progress-bar-danger progress-bar-striped" role="progressbar" aria-valuenow="5" aria-valuemin="0" aria-valuemax="100" style="width:20%">
		500
		</div>
		</div>
		
		<br><br><br>
		<center>
		<canvas id="myChart" style="width:100%;max-width:600px"></canvas>

<script>
var xValues = ["Amoxicillin", "Paracetemol", "Chepalexin", "Demerol", "Pyridoxin"];
var yValues = [17500, 10000, 4500, 2000, 500];
var barColors = ["red", "green","blue","orange","brown"];

new Chart("myChart", {
  type: "bar",
  data: {
    labels: xValues,
    datasets: [{
      backgroundColor: barColors,
      data: yValues
    }]
  },
  options: {
    legend: {display: false},
    title: {
      display: true,
      text: "Most Used Medicine in this Month"
    }
  }
});
</script>
<br><br>
		</center>
				<center><input type= "submit" name="btnSubmit" value="PRINT" class="button"><br></center>
		</div>
		<br><br><br>

<br>
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
  
</head>
</html>