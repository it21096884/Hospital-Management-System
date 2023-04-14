<?php

include 'configp.php';
session_start();
$user_id = $_SESSION['user_id'];

if(!isset($user_id)){
   header('location:patientlogin.php');
};

if(isset($_GET['logout'])){
   unset($user_id);
   session_destroy();
   header('location:patientlogin.php');
}

?>

<!DOCTYPE html>
<html>
	<head>
		<!-- add a title (a)-->
		<title>Patient Profile</title>
		
		<!--add styleSheet-->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="Styles/patientprofile.css">
		<link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro' rel='stylesheet' type='text/css'>
		<meta name="viewport" content="width=device-width, initial-scale=1">


		<!--<script src="js1/script1.js"> </script>-->
		<meta charset = "UTF-8">
		<meta name ="viewport" content = "width = device-width , intial-scale = 1.0">
	
	 
	<div class="topnav">
		<div class="logo">
		<p> <strong> e Service </strong> </p>
		</div>
		
	    <img class = "image" src="image/logo.jpg" width="121px" height="100px">
		
		<div class = "navbar">
			<a href="Home.html">Home</a>
			<a href="#" >About Us</a>
			<a href="#" >Contact us</a>
			<a href="#">Terms & Conditions</a>
			<a href="patientprofile.php?logout=<?php echo $user_id; ?>" class="logout-btn">logout</a>
		</div>
	</div>
	
	<div class = "background">
		<h2 class = "loginheading" >Patient Profile</h2> 
		
		<div class = "welcome">
		<?php
         $select = mysqli_query($conn, "SELECT * FROM `patient` WHERE PatientID = '$user_id'") or die('query failed');
         if(mysqli_num_rows($select) > 0){
            $fetch = mysqli_fetch_assoc($select);
         }?> <h2>Welcome <?php echo $fetch['First_Name']; ?>!</h2></div>
	  
		<div class="container">

		   <div class="profile">
			  
			  <?php
				 $select = mysqli_query($conn, "SELECT * FROM `patient` WHERE PatientID = '$user_id'") or die('query failed');
				 if(mysqli_num_rows($select) > 0){
					$fetch = mysqli_fetch_assoc($select);
				 }
				 if($fetch['image'] == ''){
					echo '<img src="images/default-avatar.png">';
				 }else{
					echo '<img src="uploaded_img/'.$fetch['image'].'">';
				 }
			  ?>
			  <h3>Patient ID: <?php echo $fetch['PatientID']; ?></h3>
			  <h3>Name:  <?php echo $fetch['First_Name']; ?> <?php echo $fetch['Last_Name']; ?></h3>
			  <h3>Date Of Birth:  <?php echo $fetch['Date_Of_Birth']; ?></h3>
			  <h3>Age:  <?php echo $fetch['Age']; ?></h3>
			  <h3>Gender: <?php echo $fetch['Gender']; ?></h3>
			  <h3>Tel No: <?php echo $fetch['Telephone']; ?></h3>
			  <h3>Email:  <?php echo $fetch['Email']; ?></h3>
			  <h3>NIC: <?php echo $fetch['NIC']; ?></h3>
			  
			  <a href="update_profile.php" class="btn">Update Profile</a>
			  <a href="deletepatient.php" class="delete-btn">Delete Profile</a>
			  <a href="pharmacy_home.php" class="btnForeign">Pharmacy Page</a>
			  <a href="#" class="btnForeign">Feedback Page</a>
			  <a href="booking.php" class="btnForeign">Appointment Page</a>
			  <a href="home.php" class="btnForeign">Payment Page</a>
		   </div>

        </div>
		
		<div class = "prtopic">
		<div class='childprt'><h3>Patient Appointment Records</h3></div>
		<div class='childprt'><h3>Patient Pharmacy Records</h3></div>
		
		</div>
		
		 
		 <div class='patientrecords'>
		   <div class='child'> <!--Patient Appointment Records-->
		   <?php /*
				 $select = mysqli_query($conn, "SELECT * FROM `patient_appointment` WHERE PatientID = '$user_id'") or die('query failed');
				 if(mysqli_num_rows($select) > 0){
					$fetch = mysqli_fetch_assoc($select);
				 }*/?>  <!--<h4>Appointment ID: <?php /* echo $fetch['AppointmentID']; */?> !</h4>------remove--html tag and php tags--------->
				 
	 
				 <table>
				<tr>
					<th>Patient ID:</th><td>
					<th>Appointment ID:</th><td>
				</tr>
				<?php
				$sql =  "SELECT * FROM `patient_appointment` WHERE PatientID = '$user_id'";
				$result = $conn-> query($sql);

				if ($result->num_rows > 0){
					while ($row = $result-> fetch_assoc()){
						echo "<tr><td>" . $row ["PatientID"] . "<td><td>" . $row ["AppointmentID"] . "<tr><td>" ;
					}
				}
				else{
					echo "No Results";
				}

				
				?>
				</table> 
 
		 </div>
  
		 <div class='child'> <!--Patient Pharmacy Records-->

				 <table>
				<tr>
					<th>Patient ID:</th><td>
					<th>Pharmacy ID:</th><td>
					<th>Status:</th><td>
					<th>Total Amount:</th><td>
					<th>Treatment ID:</th><td>
				</tr>
				<?php
				$sql =  "SELECT * FROM `pharmacy` WHERE PatientID = '$user_id'";
				$result = $conn-> query($sql);

				if ($result->num_rows > 0){
					while ($row = $result-> fetch_assoc()){
						echo "<tr><td>" . $row ["PatientID"] . "<td><td>" . $row ["PharmacyID"] . "<td><td>" . $row ["status"] . "<td><td>" . $row ["total_amount"] . "<td><td>" . $row ["Treatment_ID"] . "<tr><td>" ;
					}
				}
				else{
					echo "No Results";
				}


				?>
				</table> 
		</div></div>
		
		
		<div class = "prtopic">
		<div class='childprt'><h3>Patient Lab Records</h3></div>
		<div class='childprt'><h3>Patient Treatment Records</h3></div>
		</div>
		
		 
		 <div class='patientrecords'>
		   <div class='child'> <!--Patient Lab Records-->
		   
				 <table>
				<tr>
					<th>Patient ID:</th><td>
					<th>Lab ReportID:</th><td>
					<th>Report Status:</th><td>
					<th>Cost:</th><td>
					<th>Patient Requested Date:</th><td>
					<th>Patient IssuedDate:</th><td>
					<th>Doctor ID:</th><td>
					<th>Treatment ID:</th><td>
				</tr>
				<?php
				$sql =  "SELECT * FROM `lab` WHERE PatientID = '$user_id'";
				$result = $conn-> query($sql);

				if ($result->num_rows > 0){
					while ($row = $result-> fetch_assoc()){
						echo "<tr><td>" . $row ["PatientID"] . "<td><td>" . $row ["Lab_ReportID"] . "<td><td>" . $row ["Report_Status"] . "<td><td>" . $row ["Cost"] . "<td><td>" . $row ["Patient_RequestedDate"] . "<td><td>" . $row ["Patient_IssuedDate"] . "<td><td>" . $row ["DoctorID"] . "<td><td>" . $row ["Treatment_ID"] . "<tr><td>" ;
					}
				}
				else{
					echo "No Results";
				}

				
				?>
				</table> 
 
		 </div>
  
		 <div class='child'> <!--Patient Treatment Records-->
		 
				<table>
				<tr>
					<th>Patient ID:</th><td>
					<th>Treatment ID:</th><td>
					<th>Patient Condition:</th><td>
					<th>Prescription:</th><td>
					<th>Lab Report Type:</th><td>
					<th>Doctor ID:</th><td>
					<th>Date:</th><td>
				</tr>
				<?php
				$sql =  "SELECT * FROM `treatment` WHERE PatientID = '$user_id'";
				$result = $conn-> query($sql);

				if ($result->num_rows > 0){
					while ($row = $result-> fetch_assoc()){
						echo "<tr><td>" . $row ["PatientID"] . "<td><td>" . $row ["Treatment_ID"] . "<td><td>" . $row ["Patient_Condition"] . "<td><td>" . $row ["Prescription"] . "<td><td>" . $row ["Lab_Report_type"] . "<td><td>" . $row ["DoctorID"] . "<td><td>" . $row ["Date"] . "<tr><td>" ;
					}
				}
				else{
					echo "No Results";
				}


				?>
				</table> 
		</div></div>
		
		<div class = "prtopic">
		<div class='childprt'><h3>Patient Faq Records</h3></div>
		<div class='childprt'><h3>Patient Complaints Records</h3></div>
		</div>
		
		 
		 <div class='patientrecords'>
		   <div class='child'> <!--Patient Faq Records-->
		   
				 <table>
				<tr>
					<th>Patient ID:</th><td>
					<th>FAQ ID:</th><td>
					<th>Question:</th><td>
					<th>Answers:</th><td>
				</tr>
				<?php
				$sql =  "SELECT * FROM `faq` WHERE PatientID = '$user_id'";
				$result = $conn-> query($sql);

				if ($result->num_rows > 0){
					while ($row = $result-> fetch_assoc()){
						echo "<tr><td>" . $row ["PatientID"] . "<td><td>" . $row ["FAQID"] . "<td><td>" . $row ["Question"] . "<td><td>" . $row ["Answers"] . "<tr><td>" ;
					}
				}
				else{
					echo "No Results";
				}

				
				?>
				</table> 
 
		 </div>
  
		 <div class='child'> <!--Patient Complaints Records-->
		 
				<table>
				<tr>
					<th>Patient ID:</th><td>
					<th>Complaint ID:</th><td>
					<th>Complaints:</th><td>
					<th>Answers:</th><td>
				</tr>
				<?php
				$sql =  "SELECT * FROM `complaint` WHERE PatientID = '$user_id'";
				$result = $conn-> query($sql);

				if ($result->num_rows > 0){
					while ($row = $result-> fetch_assoc()){
						echo "<tr><td>" . $row ["PatientID"] . "<td><td>" . $row ["ComplaintID"] . "<td><td>" . $row ["complaints"] . "<td><td>" . $row ["Answers"] . "<tr><td>" ;
					}
				}
				else{
					echo "No Results";
				}


				?>
				</table> 
		</div></div>		
		
		
		<div class = "loginheading">
		<div class='loginheading'><h3>Click the button below to generate a report to see which doctors are available for an appointment today </h3><a href="CheckAvailabilityDoc.php" class="btnForeign">Check Availability Of Doctors</a>
		</div></div>
		
       <div class = "loginheading">
		<div class='loginheading'><h3>Search Doctors </h3>
		</div>
		
		<!-- Search Doctors Function-->
	<div class="searchbutton">
        <div class="row">
                    <div class="table-body">
                        <div class="row">
                                <form action="" method="GET">
                                    <div class="input-group mb-3">
                                        <input type="text" name="search" id="search" required value="<?php if(isset($_GET['search'])){echo $_GET['search']; } ?>" class="form-control" placeholder="Search data">
                                        <button type="submit" class="submit" id="submit">Search</button>
                                    </div>
                                </form>
                        </div>
                    </div>


            
                <div class="table-body">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>   Doctor ID    </th>
                                <th> First Name    </th>
                                <th> Last Name    </th>
                                <th>  Specialization    </th>
								<th>   Telephone    </th>
                            </tr>
                        </thead>
                        <tbody>
                                <?php 
                                    $con = mysqli_connect("localhost","root","","hospital_management_system");

                                    if(isset($_GET['search']))
                                    {
                                        $filtervalues = $_GET['search'];
                                        $query = "SELECT * FROM doctor WHERE CONCAT(First_Name,Last_Name,Specialization,Telephone) LIKE '%$filtervalues%' ";
                                        $query_run = mysqli_query($con, $query);

                                        if(mysqli_num_rows($query_run) > 0)
                                        {
                                            foreach($query_run as $items)
                                            {
                                                ?>
                                                <tr>
                                                    <td><?= $items['DoctorID']; ?></td>
                                                    <td><?= $items['First_Name']; ?></td>
                                                    <td><?= $items['Last_Name']; ?></td>
                                                    <td><?= $items['Specialization']; ?></td>
													<td><?= $items['Telephone']; ?></td>
                                                </tr>
                                                <?php
                                            }
                                        }
                                        else
                                        {
                                            ?>
                                                <tr>
                                                    <td colspan="4">No Record Found</td>
                                                </tr>
                                            <?php
                                        }
                                    }
                                ?>
                        </tbody>
                    </table>
                </div>
            
        </div>
    </div>
	</div>	
		  
	<!---footer--!>
	<!----------------------footer-------------------------------------------->
	<br><br><br><br><br><br><br><br><br><br>
	</div>
	<footer>
		<img class = "image1" src="image/qr2.PNG" width="121px" height="100px">
			
		<p>+94 712 571 22</p>
		<p>eservice@gmail.com</p>
		<p>eService PLC,nO:108,W A D Ramanayaka Mawatha,Kandy,Sri Lanka</p>
		
		<hr class = "hr1">
		<p class="para4"> @2022 All Rights Reserved </p>
		
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