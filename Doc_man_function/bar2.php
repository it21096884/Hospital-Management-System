<?php
      require'Configuration.php';
	  session_start();
	  
	  ?>

<!DOCTYPE html>
<html>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js"></script>
<body>
	<head>
		<!-- add a title (a)-->
		<title>Generate Report</title>
		 <style type = "text/css">
	      #chart-container{
		      width :630px;
			  height:auto;
		  }
	   </style>
		
		<!--add styleSheet-->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="StylesD/bar321.css">
		<!--<script src="js1/script1.js"> </script>-->
		<meta charset = "UTF-8">
		<meta name ="viewport" content = "width = device-width , intial-scale = 1.0">
		
	<div class = "maindev"><br>
	 
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
</div><br><br><br><br><br><br>


	  
<?php
	    require'Configuration.php';
	    
			
			
			$sql2 ="SELECT COUNT(p.PatientID) AS Count
					FROM patient p, patient_appointment ap, appointment a
					WHERE p.PatientID = ap.PatientID and ap.AppointmentID = a.AppointmentID
					and Month(a.Appointment_Date) = 09 ";
		$result =$con -> query($sql2);
	
	if ( $result -> num_rows>0)
	{
		// read data
		while ($row = $result -> fetch_assoc())
		{
			$Count=$row["Count"];
		}
		echo "</table>";
	}
	
	$con-> close();

?>
	  
	  
<?php
	    require'Configuration.php';
	    
			
			
			$sql3 =" SELECT Affliction, 
					 COUNT(Affliction) as c 
					 FROM treatment 
					 WHERE  Month(Date) = '09' and Year(Date) = '2022'
					 GROUP BY Affliction 
					 HAVING COUNT(Affliction) > 0
					 ORDER BY c DESC LIMIT 1  ";
		$result =$con -> query($sql3);
	
	if ( $result -> num_rows>0)
	{
		// read data
		while ($row = $result -> fetch_assoc())
		{
			$Aff=$row["Affliction"];
		}
		echo "</table>";
	}
	else{
		echo"no records for the month !!!";
	}
	
	$con-> close();

?>
	
			
			
			
			
			
		
	
	
    
 <div class = "barchart"><BR><BR>
 


           <h1 id = "at_ti">Monthly Highest Affliction</h1><br><br>
		 <br>
	<div id = "second_bar"> 

  <div id = "chart-container">
	     <canvas id = "mycanvas" width = "500" height = "300"></canvas>
	  
	     <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.0/jquery.min.js"></script>
	     <script src = "https://cdnjs.cloudflare.com/ajax/libs/Chart.js/1.9.3/Chart.min.js"> </script>
	    <script type= "text/javascript" src = "js/app4.js"></script>
     </div>

              <br><br><br>
 
			<center>
						<table border="0" width="40%" height="20%" id = "table">
							<tr>
							  
							<td colspan="3" width="43%"><h2 id = "tp">Summery of the Report</h2></td><br>
							</tr>
							
							<tr>
							    <td><h4 id = "tt">No of patients : </h4></td>
								<!--<td><h4 id = "dt"><?php echo$Count?></h4></td>-->
								  <td><h4 id = "dt">4</h4></td>
							</tr>
							<tr>
								<td><h4 id = "tt">Highest Affliction: </h4></td>
								<td><h4 id = "dt"><?php echo$Aff?></h4> </td>
							</tr>
			             </table><br><br>
						 
			 <button  onclick ="#" id = "btn_back" >Print</button>
			 <button  onclick ="location.href = 'DocMale_main.php';" id = "btn_back" >Back</button><br><br>
   </div>
	  </div>
	
<br><br><br>












  </div>



<br><br><br>




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
			
	</div>		<br>
		</footer>
   </body>	
</head>
</html>
	
	
	
	
	
	
	