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
			$first = $row["First_Name"];
			$last = $row["Last_Name"];
			$name = $first."".$last;
		
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
		<link rel="stylesheet" href="StylesD/remplz3.css">
		<!--<script src="js1/script1.js"> </script>-->
		<meta charset = "UTF-8">
		<meta name ="viewport" content = "width = device-width , intial-scale = 1.0,height: auto;">




		
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
	<?php
	     echo"<center>";
		 echo"<h2>&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp Patients Under  Dr.".$name.".<br><br>";
		 echo"</center>";
         require'Configuration.php';	      
   
	   global $con;
	   $sql= "SELECT p.PatientID,p.First_Name,p.Last_Name,t.Prescription,t.Lab_Report_type,t.Patient_Condition
              FROM treatment t,patient p
              WHERE t.PatientID = p.PatientID AND t.DoctorID = '$DoctorID' ";
	   $result = $con->query($sql); //executing the database results//
	   
	   if($result -> num_rows>0)
	   {
		   //read data
		  
		   echo"<table border = 1 class = 'table' id = 'table'>";
		   echo"<th id = 'cl1'>Patient ID</th><th id = 'cl2'>Patient First Name </th><th id = 'cl1'>Patient Last Name </th><th id = 'cl2'>Prescription</th><th id = 'cl1'>Lab Report</th><th id = 'cl2'>Patient Medical Conditions </th>";
		  
		   while($row = $result->fetch_assoc())
		   {
			   echo"<tr>";
			   echo"<td>".$row['PatientID']."</td>";
			   echo"<td>".$row['First_Name']."</td>";
			   echo"<td>".$row['Last_Name']."</td>";
			   echo"<td>".$row['Prescription']."</td>";
			   echo"<td>".$row['Lab_Report_type']."</td>";
			   echo"<td>".$row['Patient_Condition']."</td>";
			   echo"</tr>";
			   
		   }
		   
		   echo"</table>";
	   }
	  
	     
	   else
	   {
		   echo"<Script>alert('No any Patients for your ID  !!!')</script>";
	   }
	      //$con -> close();
		  
		  
	
    
		?>
	
	
				<br><br>
				<div id = "backbtn">
				   
				  <button  onclick ="location.href = 'cardview.php';" id = "btn_back" >Back</button><br><br><br>
                </div>   				  
	</div><br>
		  
		
				
				   <!-----refuring to the youtube video -------------->
			    <script>
		       var table = document.getElementById('table'),rIndex;
			   
			   for(var i = 0 ; i < table.rows.length; i++)
			   {
			      table.rows[i].onclick =function()
				  {
				     rIndex = this.rowIndex;
					 
					 document.getElementById("pid").value = this.cells[0].innerHTML;
					 document.getElementById("name").value = this.cells[1].innerHTML;
					 document.getElementById("name1").value = this.cells[3].innerHTML;
					 document.getElementById("age").value = this.cells[4].innerHTML;
				 };
			   }
		  </script>
		  
		
		      <div class = "datediv2"><br>
				<form method = "POST" action = "">   <!--------------------adding the labels------------------------------------------------>
				     
				     <label id = "ban">Patient ID </label>    :<br> <input type = "text" name = "pid" id = "pid" required readonly  ><br><br></label>
					 <label id = "ban">Patient Name </label>    :<br> <input type = "text" name = "name" id = "name"  required ></textarea><br><br></label>
					 <label id = "ban">Prescription</label>     :<br> <textarea name = "name1" id = "name1" required readonly  ></textarea><br><br></label>
					 <label id = "ban">Lab Reports</label>      : <br> <input type  = "text" name = "age" id = "age"  required ><br>
					  <label id = "ban"><br>Reason</label><br>
					             <select name = "reasonforrem">
								  <option value="sel">Select the Reason</option>
								  <option value="Transfer to another hospital">Transfer to another hospital</option>
								  <option value="Patient Die">Patient Die</option>
								  <option value="Patient Recovered">Patient Recovered</option>
								  <option value="other">other</option>
							     </select>
					  <br>
					  <br>
					  <br>
					  <br>
					 <input type = "submit" value = "Remove Patient" name = "remove" id = "del_pt">
				   <!------------------------------------------------------------------------------------>
				</form>
		      <br><br>
		      </div><br><br>
			  
			  <?php
			  require'Configuration.php';
						if(isset($_POST["remove"]))
					{ 
					  
					   $pid =$_POST["pid"];
					   $res =$_POST["reasonforrem"];
						if($pid!=""&& $res!="")
								{
									InsertRemovePatients($pid,$res);
									deleteData($pid);
										
																
								}
					}
	"</div>";
	?>
	<?php
					 require'Configuration.php';
					 function deleteData($enter){
						 
						global $con;
						$sql = "DELETE treatment
								FROM   treatment
								WHERE PatientID = '$enter'";
						if($con->query($sql)){
						//echo "<Script>alert('Patient are removed Successfully..!!')</script>";
						echo"echo '<Script>alert('Patient removed succesfully ')</script>'";
						  }
						else{
						echo "Error: ".$con->error;
						 }
					}
					
					 function InsertRemovePatients($enter,$res){
						 
							
							     $reason_for_remove = $res;
								 
							 
							
						 global $con;
									
									$sql2 = "SELECT  t.DoctorID,p.PatientID,p.First_Name,p.Last_Name,t.Prescription,t.Lab_Report_type,t.Patient_Condition
                                             FROM treatment t,patient p
                                             WHERE t.PatientID = p.PatientID AND p.PatientID = '$enter' ";
									
									$result=$con -> query($sql2);
											
											if ( $result -> num_rows>0)
											{
												// read data
												while ($row = $result -> fetch_assoc())
												{
													$DoctorID=$row["DoctorID"];
													$PatientID=$row["PatientID"];
													$First_Name=$row["First_Name"];
													$Last_Name=$row["Last_Name"];
													$Prescription=$row["Prescription"];
													$Lab_Report_type=$row["Lab_Report_type"];
													$Patient_Condition=$row["Patient_Condition"];
													
												}
												echo "</table>";
											}
						global $con;
						$sql = "INSERT INTO `remove patients`(`PatientID`, `Pateint_FName`, `Pateint_LName`, `patient_condition`, `prescription`, `Lab_reports`,`Reason For Removing`,`DoctorID`) 
						        VALUES ('$PatientID','$First_Name','$Last_Name','$Prescription','$Lab_Report_type','$Patient_Condition','$reason_for_remove','$DoctorID')";
						if($con->query($sql)){
							echo "<Script>alert('Patient data succesfully stored before remove ')</script>";
						  }
						else{
							  echo "<Script>alert('Patient data did not stored succesfully So don't remove !!! ')</script>";
						      echo "Error: ".$con->error;
						 }
					}
					
			
				
				?>
				<br>
				
				   <p id='demo'> </p>
				

    <br><br>

	<br><br>
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