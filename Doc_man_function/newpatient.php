<?php
      require'Configuration.php';
	  session_start();
	  $pid = $_SESSION['pid'];
	  $sql ="SELECT PatientID,First_Name,Last_Name,Age FROM 	patient where PatientID = '$pid'";
	// resultser int result variable
	$result=$con -> query($sql);
	
	if ( $result -> num_rows>0)
	{
		// read data
		while ($row = $result -> fetch_assoc())
		{
			$PatientID=$row["PatientID"];
			$Fname=$row["First_Name"];
			$Lname=$row["Last_Name"];
			$Age=$row["Age"];
			$Fullname= $Fname." ".$Lname;
	
			
			
		}
		echo "</table>";
	}
	
	$con-> close();

?>
	  






<!DOCTYPE html>
<html>
	<head>
		<!-- add a title (a)-->
		<title>New Patient Page</title>
		
		<!--add styleSheet-->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="StylesD/opt1234.css">
		<!--<script src="js1/script1.js"> </script>-->
		<meta charset = "UTF-8">
		<meta name ="viewport" content = "width = device-width , intial-scale = 1.0">
		
	
	 
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
	<!--------------------------------------------------------------------------------------------------------------------------------------------------------------------------------->

	
	<div class = "maindev"><br>
	   <div class = "odpatnt_second">
				 <br><br>
			 		 <center>
					     <h2 id = "tp">New Patient Consulation</h2>
						<table border="0" width="40%" height="20%" id = "table">
							
							<tr>
							    <td><h3>Patient ID</h3></td>
								<td><h3><?php echo$PatientID?></h3></td>
							</tr>
							<tr>
								<td><h3>Full Name</h3></td>
								<td><h3><?php echo$Fullname?></h3> </td>
							</tr>
							<tr>
								<td><h3>Age</h3></td>
								<td><h3><?php echo$Age ?></h3></td>
							</tr>
						</table>
					</center>
		
			   <br><br><br><br>
			   
			  <form method = "POST" action ="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
			   <center>
				<button name ="pres" id = "Btn_save" >STORE PATIENT DETAILS</button> <br><br><br><br>
				 </center>
			  </form><br>
					 
						  
					 <?php 
						
						   if(isset($_POST["pres"]))
						   {
							   disform($PatientID);
						   }
						  
						   ?>
						   
					
				   
				  <br><br>
				 
				  
	             <button  onclick ="location.href = 'dateNew.php';" id = "btn_back">Back</button><br><br>
	  </div><br>
	   
	</div>
	
	
	
	
	
	 <?php
	      require'Configuration.php';
	 
	     function disform($PatientID){
			 echo'
			        <form method = "POST" action = "">
					<div class = "odpatnt2">
					<br>
					 <label id = "text1">Pateint ID  </label><input type = "text" id = "pid" name = "pid_la" readonly value = '.$PatientID.' ><br><br>
					 
					 <label id = "text1" >Date  &nbsp &nbsp &nbsp </label><input type="date" id="enter" name="date" required><br>
					<br>
					 <label id = "text1"><br>Affliction  </label>
					 <select name = "aff">
								  <option value="sel">Select the Affliction</option>
								  <option value="Diabities">Diabities</option>
								  <option value="Cancer">Cancer</option>
								  <option value="Corona">Corona</option>
								  <option value="Cholesterol">Cholesterol</option>
								  <option value="other">other</option>
							 </select><br><br>
					 <label id = "text1"><br>Medicines   </label><textarea id="med" name="med" required></textarea><br><br>
					  <label id = "text1">Condition   </label><textarea id="cond" name="cond" required ></textarea><br><br><br>
					
					
					 
					 <label id = "text1">Lab report type </label> &nbsp
					 <select name = "lab_report_type">
								  <option value="volvo">Select</option>
								  <option value="blood">Fasting blood glucose</option>
								  <option value="TSH">TSH</option>
								  <option value="LH">LH</option>
								  <option value="Cholos">Cholesterol</option>
								  <option value="albumin">Albumin</option>
								  <option value="globon">Globulin</option>
								  <option value="prol">Prolactin</option>
								  <option value="noth">No need Of Lab report</option>
							 </select><br><br>
					 <input type = "submit" id = "record" name = "send" value = "Send" "Send" ><br><br><br>
					  </div>
					  </form>';
			 
		 }
		 
		 
		 
		 
		 
		 ?>
		 
		 		 <!-----------------insert------------------------------>
		      <?php
		 
								    if(isset($_POST["send"]))
								 {  
									 InsertData();		
						         }
		 
              ?>
			  
				<?php
				
						function InsertData()
						
						{
							
							 if(isset($_POST["send"]))
							 {
								 $pid = $_POST['pid_la'];
							     $medicine = $_POST['med'];
								 $date = $_POST['date'];
								 $affliction = $_POST['aff'];
								 $condition = $_POST['cond'];
								 $labreports = $_POST['lab_report_type'];
								 
							 }
							
							
									global $con;
									
									$sql2 = "SELECT DoctorID FROM `patient` WHERE PatientID = '$pid'";
									
									$result=$con -> query($sql2);
											
											if ( $result -> num_rows>0)
											{
												// read data
												while ($row = $result -> fetch_assoc())
												{
													$DoctorID=$row["DoctorID"];
												}
												echo "</table>";
											}
													
									
									$sql = "INSERT INTO `treatment` (`Treatment_ID`,`Date`,`Affliction`,`Patient_Condition`, `Prescription`, `Lab_Report_type`, `DoctorID`, `PatientID`) 
									        VALUES (NULL,'$date','$affliction','$condition', '$medicine', '$labreports', '$DoctorID', '$pid');";
											
									if($con->query($sql))
									{
										echo "<Script>alert('Patient data inserted Successfully..!!')</script>";
										  }
										else{
										echo "Error: ".$con->error;
									 }
								    }
									
										
								
						
									
								
							//$con->close();
						?>
		 
		 
		 

 
 
 
 
	
	
	
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