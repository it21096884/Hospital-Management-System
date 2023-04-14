<?php
	require 'config.php';
	
	$sid = $_POST['sid'];
	$fnm = $_POST['fnm'];
	$email = $_POST['email'];
	$com = $_POST['com'];
	
	//insert query
	$sql = "INSERT INTO supplier(SupplierID,Name,Email,Company)
		VALUES ('$sid','$fnm','$email','$com')";
		
		if ($con->query($sql) == TRUE) 
		{
			echo '<script>alert("Connected successfuly")</script>';
			header("Location:supplierD.php");
		} 
		else 
		{
			echo "Error: " . $sql . "<br>" . $con->error;
		}

?>