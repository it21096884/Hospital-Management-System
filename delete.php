<?php
	require 'config.php';
	session_start();
	
	$id = $_SESSION["cardNo"];

	$sql = "Delete From card Where CardNo = '$id'";

	if ($con -> query($sql)) {
		echo"Delete Succesfull";
	}
	else {
		echo"Error Deleting", $con -> error;
	}
	$con ->close();
?>