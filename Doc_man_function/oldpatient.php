<?php
      require'Configuration.php';
	  session_start();
	  $eid = $_SESSION['eid'];
	  $pid = $_SESSION['pid'];
	  $pid_val = $pid;
	  $eid_val = $eid;
	  
	  $sql ="SELECT PatientID,First_Name,Last_Name,Age,DoctorID FROM patient where PatientID = '$pid'";
	// resultser int result variable
	$result=$con -> query($sql);
	
	if ( $result -> num_rows>0)
	{
		// read data
		while ($row = $result -> fetch_assoc())
		{
			$DoctorID=$row["DoctorID"];
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
		<title>Appointments</title>
		
		<!--add styleSheet-->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="StylesD/opat12.css">
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
		
		 <style>
	   
			#tb {
			  font-family: Arial, Helvetica, sans-serif;
			  border-collapse: collapse;
			  width: 70%;
			}

			#tb td, #customers th {
			  border: 1px solid #ddd;
			  padding: 10px;
			}

			#tb tr:nth-child(even){background-color: #f2f2f2;}
			#tb tr:nth-child(odd){background-color: #f2f2f2;}

 			#tb tr:hover {background-color: #ddd;}
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
}
	
	
	</style>
	</div>
	<!-------------------------------------------------------------------------------------------------------->
	
	
	
<?php
		 
   require'Configuration.php';	      
   function p_records($PatientID)
   {
	   global $con;
	   
	   $sql= " SELECT Patient_Condition,Prescription,Affliction
			   FROM treatment
			   WHERE PatientID = '$PatientID'";
	   $result = $con->query($sql); //executing the database results//
	   
	   if($result -> num_rows>0)
	   {
		   //read data
		  
		   echo"<table border = 1 class = 'table' id = 'tb'>";
		   echo"<th id = 'cl1'>Pateint Condition</th><th id = 'cl2'>Medicines</th><th id = 'cl1'>Affliction</th>";
		  
		   while($row = $result->fetch_assoc())
		   {
			   echo"<tr>";
			   echo"<td>".$row['Patient_Condition']."</td>";
			   echo"<td>".$row['Prescription']."</td>";
			   echo"<td>".$row['Affliction']."</td>";
			   
			   echo"</tr>";
			   
		   }
		   
		   echo"</table>";
	   }
	  
	     
	   else
	   {
		   echo"<Script>alert('No any data !')</script>";
	   }
	      //$con -> close();
	
   }      
		?>
		

	
	<div class = "maindev"><br>
	   <div class = "odpatnt">
	     <br><br>
		 <center>     
		               <h2 id = "tp">Patient Consultation Page</h2>
						
						
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
		<br><br>
		
	          
	  <form method = "POST" action ="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
	    <button name ="condti" id = "records">Condition</button> &nbsp &nbsp &nbsp &nbsp  &nbsp
	    <button name ="pres" id = "records">Prescription</button><br><br>
	  </form><br>
	         
				  
			 <?php 
				
				   if(isset($_POST["pres"]))
				   {
					   disform($PatientID);
				   }
				   echo'<br>'
			  ?>
			
				   	  
			 <?php 
				
				   if(isset($_POST["condti"]))
				   {
					   cond_form($PatientID);
				   }
				  echo'<br>'
			  ?>
		   
		   
		   
	      <br><br>
	      <form method = "POST" action ="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
	          &nbsp &nbsp &nbsp &nbsp  &nbsp  &nbsp  &nbsp  &nbsp <button name ="recods_past" id = "records">Previous Patient Records</button> &nbsp &nbsp  &nbsp  &nbsp  &nbsp  &nbsp
		  </form><br><br><br>
		  
			   <?php 
					//previous records
					   if(isset($_POST["recods_past"]))
					   {
						   p_records($PatientID);
					   }
					  
					   ?>
	<br><br>
	<button  onclick ="location.href = 'dateNew.php';" id = "btn_back" >Back</button><br><br>
	      
	  </div><br>
	   
	</div>
	
	 
	
	
	 <?php

// insert prescription form
	 
	     function disform($PatientID){
				 echo'
			        <form method = "POST" action = "">
						<div class = "odpatnt2">
						<br>
						
						     
							 <br><br><label id = "text1">Pateint ID : <br> </label><input type = "text"  id = "pid" name = "pid_la" readonly value = '.$PatientID.'><br><br>
							 
							 <label id = "text1" >Date :<br></label><input type="date" id="date" name ="date" required><br>
							 
							 <label id = "text1"><br>Medicines : <br> </label><textarea id="med" name="med" required></textarea><br>
							 <label id = "text1"><br>Affliction  </label><br>
					             <select name = "aff">
								  <option value="sel">Select the Affliction</option>
								  <option value="Diabities">Diabities</option>
								  <option value="Cancer">Cancer</option>
								  <option value="Corona">Corona</option>
								  <option value="Cholesterol">Cholesterol</option>
								  <option value="other">other</option>
							     </select>
							<br>
							 <label id = "text1"><br>Patient Condition :<br> </label><textarea id="med" name="condion" required></textarea><br>
							 <br><br>
							 <label id = "text1">Lab report type <br> </label> &nbsp
							 <select name = "lab_report_type">
								  <option value="volvo">Select</option>
								  <option value="blood">Fasting blood glucose</option>
								  <option value="TSH">TSH</option>
								  <option value="LH">LH</option>
								  <option value="Cholos">Cholesterol</option>
								  <option value="albumin">Albumin</option>
								  <option value="globon">Globulin</option>
								  <option value="prol">Prolactin</option>
							 </select><br><br>
							   
								<input type = "submit" id = "record" name = "send" value = "Send" "Send" ><br><br><br>
						  </div><br><br><br>
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
								 $aff = $_POST['aff'];
								 $cond = $_POST['condion'];
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
																	
							
								
									
									$sql = "INSERT INTO `treatment` (`Treatment_ID`, `Date`,`Affliction`,`Patient_Condition`, `Prescription`, `Lab_Report_type`, `DoctorID`, `PatientID`) 
									        VALUES (NULL, '$date','$aff','$cond', '$medicine', '$labreports', '$DoctorID', '$pid');";
											
									if($con->query($sql))
									{
										echo "<Script>alert('Patient data saved Successfully..!!')</script>";
										  }
										else{
										echo "Error: ".$con->error;
									 }
								    }
									
										
								
						
									
								
							//$con->close();
						?>
		 

		 
	<!---------------------------update form---------------------------------->	 
	 
		 <?php
		 
		  function cond_form($PatientID){
			  echo'
			 
			        <form method = "POST" action = "">
					  <div class = "odpatnt3">
					      <br>
					     <label id = "text1">Patient ID : <br> </label><input type = "text" id = "pid" name = "pid" readonly  value = '.$PatientID.' ><br><br>
						 <label id = "text1"><br>Affliction  </label><br>
					 <select name = "aff">
								  <option value="sel">Select the Affliction</option>
								  <option value="Diabities">Diabities</option>
								  <option value="Cancer">Cancer</option>
								  <option value="Corona">Corona</option>
								  <option value="Cholesterol">Cholesterol</option>
								  <option value="other">other</option>
							 </select><br>
					    <label id = "text1"><br>Patient Condition :<br> </label><textarea id="med" name="condion" required></textarea><br><br><br>
					    <input type = "submit" id = "record" name = "submit"  value = "Save" > <br><br><br>
					  </div><br><br>
					 </form>';
		  }
			 
			 
			?>

 
 
 <!-----------------------------------------update---------------------------------------------------------------------------------------->
 
 
 
 
				<?php
				
						function UpdateData($pid)
						
						{
							
							 if(isset($_POST["submit"]))
							 {
							     $condion_pt = $_POST['condion'];
								 $condion_aff = $_POST['aff'];
							 }
							
							
									global $con;
									$sql = "update treatment set Affliction = '$condion_aff' , Patient_Condition = '$condion_pt' where PatientID ='$pid'";
									if($con->query($sql))
									{
										echo "<Script>alert('Patient Condition Updated Successfully..!!')</script>";
										  }
										else{
										echo "Error: ".$con->error;
									 }
								    }
									
									
									
									
								
								    if(isset($_POST["submit"]))
								{  
							       
		                              
			 
							
							               $pid=$_POST["pid"];
										   if($pid!="")
										   {
											  UpdateData($pid);
														
										    }
												else
												{
												  echo"<h2>Details were not added successfully...!!</h2>";
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