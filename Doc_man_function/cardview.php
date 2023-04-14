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
		<title>Remove Patient Management</title>
		
		<!--add styleSheet-->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="StylesD/remplz4.css">
		
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


<br><br>






   <div class = "main_div2">
    <li>
   

			<ul class="cards">
			  <li>
			  <a href="" class="card">
				  <img src="imaged/dini_ph2.jpg" class="card__image" alt="" />
				  <div class="card__overlay">
					<div class="card__header">
					  <svg class="card__arc" xmlns="http://www.w3.org/2000/svg"><path /></svg>                     
					  <img class="card__thumb" src="imaged/hospit.jpeg" alt="" />
					  <div class="card__header-text">
						<h3 class="card__title">If you are a new doctor to the system ?</h3>            
						
					  </div>
					</div>
					<p class="card__description">You can remove the patients from the hospital that removed data will be stored in another place 
					                              you can access them using by view removed patient records.</p>
				  </div>
				</a>      
			  </li>
			  
				<a href="removepatient.php" class="card">
				  <img src="imaged/oldpt.jpg" class="card__image" alt="" />
				  <div class="card__overlay">
					<div class="card__header">
					  <svg class="card__arc" xmlns="http://www.w3.org/2000/svg"><path /></svg>                     
					  <img class="card__thumb" src="imaged/trash.PNG" alt="" />
					  <div class="card__header-text">
						<h3 class="card__title">Remove Patinets </h3>            
						
					  </div>
					</div>
					<p class="card__description">You can remove the patients that are under your ID only</p>
				  </div>
				</a>      
			  </li>
			  <li>
			  
				<a href="viewRemove.php" class="card">
				  <img src="imaged/report_doc.jpg" class="card__image" alt="" />
				  <div class="card__overlay">        
					<div class="card__header">
					  <svg class="card__arc" xmlns="http://www.w3.org/2000/svg"><path /></svg>                 
					  <img class="card__thumb" src="imaged/record.jpeg" alt="" />
					  <div class="card__header-text">
						<h3 class="card__title">View Removed Patients Records</h3>
						
					  </div>
					</div>
					<p class="card__description">You can view the past patient records that have been remove from the hospital</p>
				  </div>
				</a>
			  </li>
			  <li>
   </div>
   <br>
   <div class = "divbtn">
   <button id = "btn_B" onclick = "location.href = 'DocMale_main.php';"> Back </button>
   </div>
<Style>
			:root {
			  --surface-color: #fff;
			  --curve: 40;
			}

			* {
			  box-sizing: border-box;
			}

			body {
			  font-family: 'Noto Sans JP', sans-serif;
			  background-color: #fef8f8;
			}

			.cards {
			  display: grid;
			  grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
			  gap: 2rem;
			  margin: 4rem 5vw;
			  padding: 0;
			  list-style-type: none;
			 
			}

			.card {
			  position: relative;
			  display: block;
			  height: 100%;  
			  border-radius: calc(var(--curve) * 1px);
			  overflow: hidden;
			  text-decoration: none;
			   align-items:center;
			}

			.card__image {      
			  width: 100%;
			  height: auto;
			}

			.card__overlay {
			  position: absolute;
			  bottom: 0;
			  left: 0;
			  right: 0;
			  z-index: 1;      
			  border-radius: calc(var(--curve) * 1px);    
			  background-color: var(--surface-color);      
			  transform: translateY(100%);
			  transition: .2s ease-in-out;
			}

			.card:hover .card__overlay {
			  transform: translateY(0);
			}

			.card__header {
			  position: relative;
			  display: flex;
			  align-items: center;
			  gap: 2em;
			  padding: 2em;
			  border-radius: calc(var(--curve) * 1px) 0 0 0;    
			  background-color: var(--surface-color);
			  transform: translateY(-100%);
			  transition: .2s ease-in-out;
			}

			.card__arc {
			  width: 80px;
			  height: 80px;
			  position: absolute;
			  bottom: 100%;
			  right: 0;      
			  z-index: 1;
			}

			.card__arc path {
			  fill: var(--surface-color);
			  d: path("M 40 80 c 22 0 40 -22 40 -40 v 40 Z");
			}       

			.card:hover .card__header {
			  transform: translateY(0);
			}

			.card__thumb {
			  flex-shrink: 0;
			  width: 50px;
			  height: 50px;      
			  border-radius: 50%;      
			}

			.card__title {
			  font-size: 1em;
			  margin: 0 0 .3em;
			  color: #6A515E;
			}

			.card__tagline {
			  display: block;
			  margin: 1em 0;
			  font-family: "MockFlowFont";  
			  font-size: .8em; 
			  color: #D7BDCA;  
			}

			.card__status {
			  font-size: .8em;
			  color: #D7BDCA;
			}

			.card__description {
			  padding: 0 2em 2em;
			  margin: 0;
			  color: #D7BDCA;
			  font-family: "MockFlowFont";   
			  display: -webkit-box;
			  -webkit-box-orient: vertical;
			  -webkit-line-clamp: 3;
			  overflow: hidden;
			}   
            			
</style>




<br><br>
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