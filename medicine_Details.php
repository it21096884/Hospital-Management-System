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
	height :600px;
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
  width: 80%;
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
  padding: 12px 20px;
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

<center>
		<div class="container">
		<center><h1 style="color:black; text-decoration: underline;">MEDICINE DETAILS</h1></center><br><br>
		<form method="POST" action=<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>>

		<div class="contain1">
		<input type="text" name="txtname" >
		<input type="submit" class= "button" value="SEARCH MEDICINE" name="btnsubmit" class="button">
		</div>
		</form>
			
		
	
	<br><br><br>
	
	<?php

if(isset($_POST["btnsubmit"]))
{
$Name = $_POST['txtname'];

$sql = "SELECT * FROM medicine WHERE name LIKE '%$Name%'";

 $result = $con -> query($sql);

if($result -> num_rows > 0)
{
	echo "<table id='medi' border='1'>";
	echo "<th> MedicineID </td> <th> Name </th> <th> Type </th>
	<th> Issued_Date </th> <th> Expire_Date </th> <th> Price </th>
	<th> Current_Quantity </th>";
	
	//read data
	while($row = $result -> fetch_assoc())
	{
		echo "<tr>";
		echo "<td>" . $row["MedicineID"] . "</td>"; 
		echo "<td>" . $row["Name"] . "</td>";
		echo "<td>" . $row["type"] . "</td>";
		echo "<td>" . $row["Issued_Date"] . "</td>";
		echo "<td>" . $row["Expire_Date"] . "</td>";
		echo "<td>" . $row["price"] . "</td>";
		echo "<td>" . $row["Current_Quantity"] . "</td>";
		echo "</tr>";	
	}
	
	echo "</table>";
}

else
{
	
	echo "<script> alert('No Records!!') </script>";
	
}

}

?>
	<br><br><br>
	<div class="contain1">
		<a href="add_medicine.php">
		<input type="submit" class= "button" value="ADD" name="btnsubmit" class="button">
		</a>
		&nbsp
		<a href="update_medicine.php">
		<input type="submit" class= "button" value="UPDATE" name="btnsubmit" class="button">
		</a>
		&nbsp
		<a href="delete_medicine.php">
		<input type="submit" class= "button" value="DELETE" name="btnsubmit" class="button">
		</a>
		</div>
		<br><br><br>
		<div class="contain1">
		<a href="Request.php">
		<input type="submit" class= "button" value="REQUEST MEDICINE" name="btnsubmit" class="button">
		</a>
		</div>
		
		</div>
		</center>
<br><br><br>
	
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