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
		<title>Appointments</title>
		
		<!--add styleSheet-->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="StylesD/app_date_select.css">
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
	<?php
		 
   require'Configuration.php';	      
   function view_app($enter)
   {
	   global $con;
	   $sql= "SELECT p.PatientID,app.AppointmentID,p.Last_Name,p.Age,app.Appointment_Date
              FROM patient p , patient_appointment ap, appointment  app
              where p.PatientID = ap.PatientID and ap.AppointmentID = app.AppointmentID and app.Appointment_Date = '$enter'";
	   $result = $con->query($sql); //executing the database results//
	   
	   if($result -> num_rows>0)
	   {
		   //read data
		  
		   echo"<table border = 1 class = 'table' id = 'table'>";
		   echo"<th id = 'cl1'>Date</th><th id = 'cl2'>Patient ID</th><th id = 'cl1'>Appointment No</th><th id = 'cl2'>Patient Name </th><th id = 'cl1'>Patient Age</th>";
		  
		   while($row = $result->fetch_assoc())
		   {
			   echo"<tr>";
			   echo"<td >".$row['Appointment_Date']."</td>";
			   echo"<td >".$row['PatientID']."</td>";
			   echo"<td>".$row['AppointmentID']."</td>";
			   echo"<td >".$row['Last_Name']."</td>";
			   echo"<td >".$row['Age']."</td>";
			   echo"</tr>";
			   
		   }
		   
		   echo"</table>";
	   }
	  
	     
	   else
	   {
		   echo"<Script>alert('No any appointment for this date !!!')</script>";
	   }
	      //$con -> close();
		  
		  
	
   }      
		?>
		
	
	<div class = "maindev"><br>
	      <div class = "datediv"><br><br> 
		  
		   <form method = "POST" action ="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
		   <label id = "datelabel">Select Date : </label>
		   <input type="date" id="enter" name="enter" ><br><br><br><br>
	       <button name ="view_appointment" id = "records">View Appointments</button>  &nbsp &nbsp &nbsp &nbsp  &nbsp
	       <button name ="cancelapp" id = "canceldel">Cancel Appointments</button> <br><br>
	     </form><br>
		  <br>
		  
		  <?php
		    
		            if(isset($_POST["view_appointment"]))
				{ $cancel_app1 =$_POST["enter"];
			      
					if($cancel_app1!="")
					        {
								view_app($cancel_app1);
                               						
				            }
				}
		  	
		
		  ?>	
				
		
				<br><br>
				   
				  <button  onclick ="location.href = 'DocMale_main.php';" id = "btn_back" >Back</button><br><br><br>   
	      </div><br><br>
		  
		
				<!----DELETING THE DATA FROM THE DATA BASE to cancel the appointments------>
				<?php
					 require'Configuration.php';
					 function deleteData($enter){
						 
						global $con;
						$sql = "DELETE appointment
								FROM appointment
								INNER JOIN patient_appointment ON patient_appointment.AppointmentID = appointment.AppointmentID INNER JOIN patient on patient.PatientID = patient_appointment.PatientID
								WHERE appointment.Appointment_Date = '$enter'";
						if($con->query($sql)){
						echo "<Script>alert('Appointments are canceled Successfully..!!')</script>";
						  }
						else{
						echo "<Script>alert('Sorry.. No any Appointments For this date to Cancel..!!')</script>";
						 }
					}
					
						
				
						if(isset($_POST["cancelapp"]))
					{ 
					  
					   $cancel_app =$_POST["enter"];
						if($cancel_app!="")
								{
									deleteData($cancel_app);							
								}
						else{
							echo "<Script>alert('Sorry.. No any Appointments For this date to Cancel..!!')</script>";
						}
					}
					  
					
				
				?>
				      
	
				
				   <!-----refuring to the youtube video -------------->
			    <script>
		       var table = document.getElementById('table'),rIndex;
			   
			   for(var i = 0 ; i < table.rows.length; i++)
			   {
			      table.rows[i].onclick =function()
				  {
				     rIndex = this.rowIndex;
					 
					 
					 document.getElementById("pid").value = this.cells[1].innerHTML;
					 document.getElementById("name").value = this.cells[3].innerHTML;
					 document.getElementById("age").value = this.cells[4].innerHTML;
				 };
			   }
		  </script>
		  
		   <br><br><br><br><br>
		      <div class = "datediv2"><br><br>
				<form method = "POST" action = "index.php">   <!--------------------adding the labels------------------------------------------------>
				  
					 <label id = "ban">PatientID </label>     :&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp  <input type = "text" name = "pid" id = "pid" required readonly  ><br><br></label>
					 <label id = "ban">Patient Name</label>     :&nbsp &nbsp <input type = "text" name = "name" id = "name"  required ><br><br></label>
					 <label id = "ban">Age</label>              :&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp  <input type  = "text" name = "age" id = "age"  required ><br><br>
					  <br>
					 <input type = "submit" value = "view" id = "records">
				   <!------------------------------------------------------------------------------------>
				</form>
		  
		      </div><br><br>
	</div>
	<!---footer--!>
	<!----------------------footer-------------------------------------------->
		<footer>
			 <img class = "image1" src="imaged/qr2.PNG" width="121px" height="100px">
			
		    <p>+94 712 571 22</p>
			<p>eservice@gmail.com</p>
			<p>eService PLC,nO:108,W A D Ramanayaka Mawatha,Kandy,Sri Lanka</p>
		
			<br><hr class = "hr1">
			<p class="para4"> &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp @2022 All Rights Reserved </p><br>
			
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