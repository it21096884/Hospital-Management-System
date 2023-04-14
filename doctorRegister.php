<?php
	require 'config.php';
	
	$fn = $_POST['fn'];
	$ln = $_POST['ln'];
	$pass = $_POST['password'];
	$spec = $_POST['specialization'];
	$email = $_POST['email'];
	$dob = $_POST['dob'];
	$tele = $_POST['telephone'];
	$passconf = $_POST['confirmpass'];
	
	$sql = "INSERT into user(Email, Password, First_Name, Last_Name, Date_Of_Birth) VALUES ('$email', '$pass', '$fn', '$ln', '$dob')";
	$result = $con -> query($sql);
	
	if( strcmp($pass,$passconf) == 0 ){
		if( $result )
		{										
			$query = mysqli_query($con, "SELECT UserID from user where Email = '$email'");
			$row = mysqli_fetch_assoc($query);
			$ID = $row["UserID"];
			
			$sql2 = "INSERT into doctor(DoctorID, Email, Password, First_Name, Last_Name, Date_Of_Birth, Specialization, Telephone) VALUES ('$ID', '$email', '$pass', '$fn', '$ln', '$dob', '$spec', '$tele')";
			
			if( $con -> query($sql2) ){
				echo "<br> <button> <a href = 'adminHome.php'> Insert Success, back to home </a> </button>";
			}
		}
		
		else
		{
			echo "<br> <button> <a href = 'adminHome.php'> Error inserting, back to home </a> </button>";
		}
	}
	
	else {
		echo "<br> <button> <a href = 'adminHome.php'> Password does not match, back to home </a> </button>";
	}
	
	$con -> close();
?>