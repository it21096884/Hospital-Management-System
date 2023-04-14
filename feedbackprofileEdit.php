<?php
	require "config.php";
	session_start();
	
	$fn = $_POST['fn'];
	$ln = $_POST['ln'];
	$email = $_POST['Email'];
	$dob = $_POST['date'];
	$uID = $_SESSION["uID"];
	
	$sql1 = "UPDATE user SET Email = '$email', First_Name = '$fn', Last_Name = '$ln', Date_Of_Birth = '$dob' WHERE UserID = '$uID'";
	$sql2 = "UPDATE feedback_manager SET Email = '$email', First_Name = '$fn', Last_Name = '$ln', Date_Of_Birth = '$dob', WHERE Feedback_ManagerID = '$uID'";
	
	if( $con -> query($sql1) && $con -> query($sql2) )
	{																											
		header('location:feedbackmanagerprofile.php');
	}
	
	else
	{
		echo "Error updating" , $con -> error;
	}
	
	$con -> close();
	
?>