<?php
	require "config.php";
	session_start();
	
	$uID = $_SESSION["uID"];
		
	$sql = "DELETE from doctor WHERE DoctorID = '$uID'";
	
	if( $con -> query($sql) ){
		header('location: doctorlogin.html');
	}
	
	else
	{
		echo "Error inserting" , $con -> error;
	}
?>