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
			$Fname = $row["First_Name"];
			$Lname = $row["Last_Name"];
			$Fullname = $Fname."".$Lname;
	
			
			
		}
		echo "</table>";
	}
	
	$con-> close();

?>

<!DOCTYPE html>
<html>
	<head>
		<!-- add a title (a)-->
		<title>Doctor Consultations</title>
		
		<!--add styleSheet-->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="StylesD/docmainpage.css">
		<!--<script src="js1/script1.js"> </script>-->
		<meta charset = "UTF-8">
		<meta name ="viewport" content = "width = device-width ">
	
		
	<style> 
		input[type=text] {
			  width: 130px;
			  box-sizing: border-box;
			  border: 2px solid #ccc;
			  border-radius: 4px;
			  font-size: 16px;
			  background-color: white;
			  background-image: url('searchicon.png');
			  background-position: 10px 10px; 
			  background-repeat: no-repeat;
			  padding: 12px 20px 12px 40px;
			  -webkit-transition: width 0.4s ease-in-out;
			  transition: width 0.4s ease-in-out;
			}

			input[type=text]:focus {
			  width: 50%;
			}
			
			
			#btn_prof{
				background-color:#424242;
				font-size:20px;
				color:white;
				width:200px;
				height:50px;
				border-radius:40px;
			
				
			}
			
		}
     </style>
	 </head>
	
	  
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
		
	</div>
	
	
	<div class = "maindev"><br>
	      <div class = "docdive"><br><br> 
		  <form method="post" action="Search.php">
                &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp   <input type="text" name="search" placeholder="Search by patient ID....">
                 <input type="submit" value="SEARCH" name="Search" id = "search_btn">
          </form>
	</head>	   
	<body> 	   
		   	 
	<?php
	    require'Configuration.php';
	    if(isset($_POST["Search"]))
		{
			$search_value = $_POST['search'];
			
			$sql = "SELECT p.PatientID,p.First_Name,p.Last_Name,p.Date_Of_Birth,t.Patient_Condition,t.Prescription
                    FROM patient p , doctor d ,treatment t
					WHERE p.DoctorID = d.DoctorID and t.PatientID = p.PatientID and d.DoctorID = '$DoctorID'
					AND p.PatientID LIKE '$search_value'";
			$result = $con -> query($sql);

        if($result -> num_rows > 0){
			
		   echo"<table border = 1 class = 'table' id = 'table'>";
		   echo"<th>PatientID</th><th>Patient First Name</th><th>Patient Last Name</th><th>Patient Age </th><th>Patient Conditions</th><th>Medicines</th>";
		  
		   while($row = $result->fetch_assoc())
		   {
			   echo"<tr>";
			   echo"<td>".$row['PatientID']."</td>";
			   echo"<td>".$row['First_Name']."</td>";
			   echo"<td>".$row['Last_Name']."</td>";
			   echo"<td>".$row['Date_Of_Birth']."</td>";
			   echo"<td>".$row['Patient_Condition']."</td>";
			   echo"<td>".$row['Prescription']."</td>";
			   echo"</tr>";
			   
		   }
		   
		    echo"</table>";
	   }
	  
			 
		   else
		   {
			   echo"<Script>alert('Patient Recods are not there.......')</script>";
		   }
	      //$con -> close();
	
		}			
			
			
			
			
			
			
		
	
	?>
		   
	
	         <br><br>
            <div class = "subdiv"> 	
			   <div class = "docmain2"><br>
					 <img class = "image2" src="imaged/male.PNG" ><br>
				  
					<center>
						<table border="0" width="25%" height="8%" id = "table">
							
							<tr>
								<td><h2>Dr.<?php echo$Fullname?></h2></td>
							</tr>
						</table>
					</center>
					<br><br>
					
					<button  id = "btn"><a id = "Ap1"href = "bar2.php">  Generate Report</a> </button>
					<br><br><br>
					<button  id = "btn"><a id = "Ap2"href = "patientview.php"> View Appointments</a> </button><br>
					<br><br>
					<button  id = "btn"><a id = "Ap3"href = "indexRemove.php">Manage Remove Patients</a> </button><br>
					<br><br>
				</div>	<br><br><br><br>
			</div>
			
			<button id = "btn_prof" onclick = "location.href = '../doctorprofile.php';"> My profile </button>
			<BR><BR>
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