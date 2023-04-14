<?php
	require "configp.php";
	session_start();
	
	$user_id = $_SESSION['user_id'];
		
	$sql = "DELETE from patient WHERE PatientID = '$user_id'";
	
	if( $conn -> query($sql) ){
	header('location:patientlogin.php');
	};
	
?>

