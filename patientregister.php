<?php

include 'configp.php';

if(isset($_POST['submit'])){
	
   $First_Name = mysqli_real_escape_string($conn, $_POST['First_Name']);
   $Last_Name = mysqli_real_escape_string($conn, $_POST['Last_Name']);
   $Email = mysqli_real_escape_string($conn, $_POST['Email']);
   $Gender = mysqli_real_escape_string($conn, $_POST['Gender']);
   $Date_Of_Birth = mysqli_real_escape_string($conn, $_POST['Date_Of_Birth']);
   $Age = mysqli_real_escape_string($conn, $_POST['Age']);
   $Telephone = mysqli_real_escape_string($conn, $_POST['Telephone']);
   $NIC = mysqli_real_escape_string($conn, $_POST['NIC']);
   /* $pass = mysqli_real_escape_string($conn, md5($_POST['password'])); //Encrypt Pass
   $cpass = mysqli_real_escape_string($conn, md5($_POST['cpassword'])); //Encrypt Pass */
   $pass = mysqli_real_escape_string($conn, $_POST['password']); 
   $cpass = mysqli_real_escape_string($conn, $_POST['cpassword']); 
   $image = $_FILES['image']['name'];
   $image_size = $_FILES['image']['size'];
   $image_tmp_name = $_FILES['image']['tmp_name'];
   $image_folder = 'uploaded_img/'.$image;

   $select = mysqli_query($conn, "SELECT * FROM `patient` WHERE Email = '$Email' AND password = '$pass'") or die('query failed');

   if(mysqli_num_rows($select) > 0){
      $message[] = 'email address is already registered'; 
   }else{
      if($pass != $cpass){
         $message[] = 'confirm password not matched!';
	  }elseif($image_size > 2000000){
         $message[] = 'image size is too large!';
      }else{
		 $insert2 = "INSERT INTO user(Email, Password, First_Name, Last_Name, Date_Of_Birth) 
											VALUES ('$Email', '$pass', '$First_Name', '$Last_Name', '$Date_Of_Birth')";
		 
         if( $conn -> query($insert2) ){
			 
			$query = mysqli_query($conn, "SELECT UserID from user where Email = '$Email'");
			$row = mysqli_fetch_assoc($query);
			$ID = $row["UserID"];
			
			$insert1 = "INSERT INTO patient(PatientID, Email, Password, First_Name, Last_Name, Date_Of_Birth, Age, NIC, Telephone, Gender, image) 
											VALUES ('$ID', '$Email', '$pass', '$First_Name', '$Last_Name', '$Date_Of_Birth', '$Age', '$NIC', '$Telephone', '$Gender', '$image')";
			
			if( $conn -> query($insert1) ){
				move_uploaded_file($image_tmp_name, $image_folder);
				$message[] = 'registered successfully!';
				header('location:patientlogin.php');
			}
         }
		 
		 else{
            $message[] = 'registeration failed!';
         }
      }
   }

}

?>

<!DOCTYPE html>
<html>
	<head>
		<!-- add a title (a)-->
		<title>Patient Register</title>
		
		<!--add styleSheet-->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="Styles/PatientLogin.css">
		<link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro' rel='stylesheet' type='text/css'>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		
		
		<script type="text/javascript">
		// Age calculater for given DOB
		function formatDate(date){
		var d = new Date(date),
		month = '' + (d.getMonth() + 1),
		day = '' + d.getDate(),
		year = d.getFullYear();

		if (month.length < 2) month = '0' + month;
		if (day.length < 2) day = '0' + day;

		return [year, month, day].join('-');

		}

		function getAge(dateString){
		var birthdate = new Date().getTime();
		if (typeof dateString === 'undefined' || dateString === null || (String(dateString) === 'NaN')){
		// variable is undefined or null value
		birthdate = new Date().getTime();
		}
		birthdate = new Date(dateString).getTime();
		var now = new Date().getTime();
		// now find the difference between now and the birthdate
		var n = (now - birthdate)/1000;
		if (n < 604800){ // less than a week
		var day_n = Math.floor(n/86400);
		if (typeof day_n === 'undefined' || day_n === null || (String(day_n) === 'NaN')){
		// variable is undefined or null
		return '';
		}else{
		return day_n + ' day' + (day_n > 1 ? 's' : '') + ' old';
		}
		} else if (n < 2629743){ // less than a month
		var week_n = Math.floor(n/604800);
		if (typeof week_n === 'undefined' || week_n === null || (String(week_n) === 'NaN')){
		return '';
		}else{
		return week_n + ' week' + (week_n > 1 ? 's' : '') + ' old';
		}
		} else if (n < 31562417){ // less than 24 months
		var month_n = Math.floor(n/2629743);
		if (typeof month_n === 'undefined' || month_n === null || (String(month_n) === 'NaN')){
		return '';
		}else{
		return month_n + ' month' + (month_n > 1 ? 's' : '') + ' old';
		}
		}else{
		var year_n = Math.floor(n/31556926);
		if (typeof year_n === 'undefined' || year_n === null || (String(year_n) === 'NaN')){
		return year_n = '';
		}else{
		return year_n + ' year' + (year_n > 1 ? 's' : '') + ' old';
		}
		}
		}

		function getAgeVal(pid){
		var birthdate = formatDate(document.getElementById("Date_Of_Birth").value);
		var count = document.getElementById("Date_Of_Birth").value.length;
		if (count=='10'){
		var age = getAge(birthdate);
		var str = age;
		var res = str.substring(0, 1);
		if (res =='-' || res =='0'){
		document.getElementById("Date_Of_Birth").value = "";
		document.getElementById("Age").value = "";
		$('#Date_Of_Birth').focus();
		return false;
		}else{
		document.getElementById("Age").value = age;
		}
		}else{
		document.getElementById("Age").value = "";
		return false;
		}
		}
		</script>


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
			<a href="patientlogin.php" class="login1">Login</a>
		</div>
	</div>
	
	<div class = "background">
		<h2 class = "loginheading" >Patient Register</h2> 
			<div class="RegisterP">

		   <form action="" method="post" enctype="multipart/form-data">
			  <?php
			  if(isset($message)){
				 foreach($message as $message){
					echo '<div class="message">'.$message.'</div>';
				 }
			  }
			  ?>
			  <label style = 'font-family: "Source Sans Pro"; font-size: 20px;'> Enter First Name : </label><br><br>
			  <input type="text" id="Name" name="First_Name" placeholder="enter first name" class="box" required><br><br>
			  <label style = 'font-family: "Source Sans Pro"; font-size: 20px;'> Enter Last Name : </label><br><br>
			  <input type="text" id="Name" name="Last_Name" placeholder="enter last name" class="box" required><br><br>
			  <label style = 'font-family: "Source Sans Pro"; font-size: 20px;'> Select Gender : </label>
				<select name="Gender">
					<option value="male" selected>Male</option>
					<option value="female">Female</option>
				</select><br><br>
			  <!-- <label style = 'font-family: "Source Sans Pro"; font-size: 20px;'> Select Date Of Birth : </label><br><br>
			  <input type="date" id="Name" name="Date_Of_Birth" placeholder="select date of birth" class="box" required><br><br> Old DOB-->
			  <label style = 'font-family: "Source Sans Pro"; font-size: 20px;'> Select Date Of Birth : </label>
			  <input id="Date_Of_Birth" type="date" name="Date_Of_Birth" maxlength="10" placeholder="mm/dd/yyyy" onkeyup="getAgeVal(0)" onblur="getAgeVal(0);" class="box" required><br><br>
			  <label style = 'font-family: "Source Sans Pro"; font-size: 20px;'> Age : </label><br><br>
			  <!-- <input type="text" name="Age" id="Age" autocomplete="off" disabled><br><br> -->
			  <input type="text" id="Age" name="Age" placeholder="Enter your age" class="box" required><br><br>
			  <label style = 'font-family: "Source Sans Pro"; font-size: 20px;'> Telephone Number : </label><br><br>
			  <input type="tel" id="Name" name="Telephone" maxlength="10" placeholder="enter tel no" class="box" required><br><br>
			  <label style = 'font-family: "Source Sans Pro"; font-size: 20px;'> NIC : </label><br><br>
			  <input type="text" id="Name" name="NIC" placeholder="enter nic" class="box" required><br><br>
			  <label style = 'font-family: "Source Sans Pro"; font-size: 20px;'> Enter Email : </label><br><br>
			  <input type="Email" id="Email" name="Email" placeholder="enter Email" class="box" required><br><br>
			  <label style = 'font-family: "Source Sans Pro"; font-size: 20px;'> Enter Password  : </label><br><br>   
			  <input type="password" id="Pass" name="password" placeholder="enter password" class="box" required><br><br>
			  <label style = 'font-family: "Source Sans Pro"; font-size: 20px;'> Confirm Password  : </label><br><br>   
			  <input type="password" id="Cpass" name="cpassword" placeholder="confirm password" class="box" required><br><br>
			  <label style = 'font-family: "Source Sans Pro"; font-size: 20px;'> Upload Profile Image  : </label><br><br>   
			  <input type="file" name="image" class="box" accept="image/jpg, image/jpeg, image/png"><br><br>
			  <input type="submit" id="Subm" name="submit" value="Register" class="btn">
			  <p>already have an account? <a href="patientlogin.php">login now</a></p>
		   </form>
					
			
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