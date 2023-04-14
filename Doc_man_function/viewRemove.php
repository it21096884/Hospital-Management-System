<?php
      require'Configuration.php';
	  session_start();
	  $uID = $_SESSION['uID'];
	  $uID_val = $uID;
	  $sql ="SELECT DoctorID,First_Name,Last_Name  
             FROM doctor where DoctorID = '$uID'";
	// resultser int result variable
	$result=$con -> query($sql);
	
	if ( $result -> num_rows>0)
	{
		// read data
		while ($row = $result -> fetch_assoc())
		{
			$DoctorID = $row["DoctorID"];
			
		
		}
		echo "</table>";
	}
	
	$con-> close();

?>



<!DOCTYPE html>
<html>
	<head>
		<!-- add a title (a)-->
		<title>Remove Patients</title>
		
		<!--add styleSheet-->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="StylesD/removept12.css">
		<!--<script src="js1/script1.js"> </script>-->
		<meta charset = "UTF-8">
		<meta name ="viewport" content = "width = device-width , intial-scale = 1.0">




		
		 <style>
		 
	   <!-----refuring to the youtube video disabple the click option of the table header-------------->
	 
		
			#table {
			  font-family: Arial, Helvetica, sans-serif;
			  border-collapse: collapse;
			  width: 110%;
			}

			#table td, #customers th {
			  border: 1px solid #ddd;
			  padding: 10px;
			}

			#table tr:nth-child(even){background-color: #f2f2f2;}
			#table tr:nth-child(odd){background-color: #f2f2f2;}

			#table tr:hover {background-color: #ddd;}

			#cl1 {
			  width:120px;
			  padding-top: 12px;
			  padding-bottom: 12px;
			  text-align: center;
			  background-color:#324960;
			  color: white;
			}
			#cl2 {
			  width:120px;
			  padding-top: 12px;
			  padding-bottom: 12px;
			  text-align: center;
			  background-color:#4FC3A1;
			  color: white;
			}
</style>

	
	
	</style>
	 
	<div class="topnav">
		<div class="logo">
		<p> <strong> e Service </strong> </p>
		</div>
		
	    <img class = "image" src="imaged/logo.jpg" width="121px" height="100px">
		
		<div class = "navbar">
			<a href="#">Home</a>
			<a href="#" >About Us</a>
			<a href="#" >Contact us</a>
			<a href="#">Terms & Conditions</a>
			<a href="#" class="login">Login</a>
		</div>
		<br>
	</div>
	</head>
<body>
<br><br>
 <div>


<br>


<?php
	
       require'Configuration.php';
	   global $con;
	   
	   $sql= "SELECT `PatientID`, `Pateint_FName`, `Pateint_LName`, `patient_condition`, `prescription`, `Lab_reports`,`Reason For Removing`
	          FROM `remove patients` WHERE DoctorID = '$DoctorID'";
	   $result = $con->query($sql); //executing the database results//
	   
	   if($result -> num_rows>0)
	   {
		   //read data
		  
		   echo"<table border = 1 class = 'table' id = 'table'>";
		   echo"<th id = 'cl1'>Patient ID</th><th id = 'cl2'>Patient Firts Name </th><th id = 'cl1'>Patient Last Name</th><th id = 'cl2'>Patient Medical condition </th><th id = 'cl1'>Patient Medical Prescriprtion</th><th id = 'cl2'>Patient Medical Lab Records</th><th id = 'cl1'>Reason for removing the patient</th>";
		  
		   while($row = $result->fetch_assoc())
		   {
			   echo"<tr>";
			   echo"<td>".$row['PatientID']."</td>";
			   echo"<td>".$row['Pateint_FName']."</td>";
			   echo"<td>".$row['Pateint_LName']."</td>";
			   echo"<td>".$row['patient_condition']."</td>";
			   echo"<td>".$row['prescription']."</td>";
			   echo"<td>".$row['Lab_reports']."</td>";
			   echo"<td>".$row['Reason For Removing']."</td>";
			   echo"</tr>";
			   
		   }
		   
		   echo"</table>";
	   }
	  
	     
	   else
	   {
		   echo"<Script>alert('No any appointment for this date !!!')</script>";
	   }
	      //$con -> close();
		  
		  
	
       
	
		   	 
		?>	 
		<br>
		<br>
		<div id = "backbtn">
				   
				  <button  onclick ="location.href = 'cardview.php';" id = "btn_back" >Back</button><br><br><br>
                </div> 
			 
			 
			 
		<br><br><br><br><br><br>	 
	<!---footer--!>
	<!----------------------footer-------------------------------------------->
		<footer>
			 <img class = "image1" src="imaged/qr2.PNG" width="121px" height="100px">
			
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