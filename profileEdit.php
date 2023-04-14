<?php
	require "config.php";
	session_start();
	
	$fn = $_POST['fn'];
	$ln = $_POST['ln'];
	$spec = $_POST['specialization'];
	$email = $_POST['Email'];
	$dob = $_POST['date'];
	$tele = $_POST['telephone'];
	$uID = $_SESSION["uID"];
	
	$sql1 = "UPDATE user SET Email = '$email', First_Name = '$fn', Last_Name = '$ln', Date_Of_Birth = '$dob' WHERE UserID = '$uID'";
	$sql2 = "UPDATE doctor SET Email = '$email', First_Name = '$fn', Last_Name = '$ln', Date_Of_Birth = '$dob', Specialization = '$spec', Telephone = '$tele' WHERE DoctorID = '$uID'";
	
	if( $con -> query($sql1) && $con -> query($sql2) )
	{																											
		echo "Updated succesfully ";
		header('location:doctorprofile.php');
	}
	
	else
	{
		echo "Error updating" , $con -> error;
	}
	
	$con -> close();
	
?>