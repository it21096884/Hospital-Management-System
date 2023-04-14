<?php
	
	$con = new mysqli("localhost","root","","hospital_management_system");

		if($con -> connect_error)
		{
			die("connnection error".$con->connect_error);
		}
		 else
		 {
			//echo "Connection success !";
		 }
?>