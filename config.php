<?php
	//create the connection
	$con = mysqli_connect("localhost" , "root" , "" , "hospital_management_system");
	
	if( $con -> connect_error )
	{
		die("connection failed" . $con -> connect_error);
	}
?>