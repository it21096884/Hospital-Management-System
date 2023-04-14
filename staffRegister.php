<?php
	require "config.php";
	
	$fn = $_POST['fn'];
	$ln = $_POST['ln'];
	$pass = $_POST['password'];
	$email = $_POST['email'];
	$dob = $_POST['dob'];
	$tele = $_POST['telephone'];
	$type = $_POST['type'];
	$passconf = $_POST['confirmpass'];
	
	if( strcmp($pass,$passconf) == 0 ){
		if( strcmp($type, "Lab Assistant") == 0 ){
			$sql1 = "INSERT into user(Email, Password, First_Name, Last_Name, Date_Of_Birth) VALUES ('$email', '$pass', '$fn', '$ln', '$dob')";
			
			if( $con -> query($sql1) )
			{			
				$query = mysqli_query($con, "SELECT UserID from user where Email = '$email'");
				$row = mysqli_fetch_assoc($query);
				$ID = $row["UserID"];
				
				$sql2 = "INSERT into lab_assistant(Lab_AssistantID, Email, Password, First_Name, Last_Name, Date_Of_Birth) VALUES ('$ID', '$email', '$pass', '$fn', '$ln', '$dob')";
				if( $con -> query($sql2) ){
					echo "<br> <button> <a href = 'adminHome.html'> Insert Success, back to home </a> </button>";
				}
			}
			
			else
			{
				echo "<br> <button> <a href = 'adminHome.html'> Error inserting, back to home </a> </button>";
			}
		}
		
		else if( strcmp($type, "Inventory Manager") == 0 ){
			$sql1 = "INSERT into user(Email, Password, First_Name, Last_Name, Date_Of_Birth) VALUES ('$email', '$pass', '$fn', '$ln', '$dob')";
			
			if( $con -> query($sql1) )	
			{							
				$query = mysqli_query($con, "SELECT UserID from user where Email = '$email'");
				$row = mysqli_fetch_assoc($query);
				$ID = $row["UserID"];
				
				$sql2 = "INSERT into inventory_manager(Inventory_ManagerID, Email, Password, First_Name, Last_Name, Date_Of_Birth) VALUES ('$ID', '$email', '$pass', '$fn', '$ln', '$dob')";
				if( $con -> query($sql2) ){
					echo "<br> <button> <a href = 'adminHome.html'> Insert Success, back to home </a> </button>";
				}
			}
			
			else
			{
				echo "<br> <button> <a href = 'adminHome.html'> Error inserting, back to home </a> </button>";
			}
		}
		
		else if( strcmp($type, "Pharmacist") == 0 ){
			$sql1 = "INSERT into user(Email, Password, First_Name, Last_Name, Date_Of_Birth) VALUES ('$email', '$pass', '$fn', '$ln', '$dob')";
			
			if( $con -> query($sql1) )
			{							
				$query = mysqli_query($con, "SELECT UserID from user where Email = '$email'");
				$row = mysqli_fetch_assoc($query);
				$ID = $row["UserID"];
				
				$sql2 = "INSERT into pharmacist(PharmacistID, Email, Password, First_Name, Last_Name, Date_Of_Birth) VALUES ('$ID', '$email', '$pass', '$fn', '$ln', '$dob')";
				
				if( $con -> query($sql2) ){
					echo "<br> <button> <a href = 'adminHome.html'> Insert Success, back to home </a> </button>";
				}
			}
			
			else
			{
				echo "<br> <button> <a href = 'adminHome.html'> Error inserting, back to home </a> </button>";
			}
		}
		
		else if( strcmp($type, "Feedback Manager") == 0 ){
			$sql1 = "INSERT into user(Email, Password, First_Name, Last_Name, Date_Of_Birth) VALUES ('$email', '$pass', '$fn', '$ln', '$dob')";
			
			if( $con -> query($sql1) )
			{													
				$query = mysqli_query($con, "SELECT UserID from user where Email = '$email'");
				$row = mysqli_fetch_assoc($query);
				$ID = $row["UserID"];
				
				$sql2 = "INSERT into feedback_manager(Feedback_ManagerID, Email, Password, First_Name, Last_Name, Date_Of_Birth) VALUES ('$ID', '$email', '$pass', '$fn', '$ln', '$dob')";
				if( $con -> query($sql2 ) ){
					echo "<br> <button> <a href = 'adminHome.html'> Insert Success, back to home </a> </button>";
				}
			}
			
			else
			{
				echo "<br> <button> <a href = 'adminHome.html'> Error inserting, back to home </a> </button>";
			}
		}
		
		else{
			echo "<br> <button> <a href = 'adminHome.html'> Error inserting, back to home </a> </button>";
		}
	}
	
	else {
		echo "<br> <button> <a href = 'adminHome.html'> Password does not match, back to home </a> </button>";
	}
	
	$con -> close();
?>