<?php
	require 'Configuration.php';
	session_start();
	$uID = $_SESSION["uID"];
	
	
	// select Query
	$sql ="SELECT * FROM doctor where DoctorID ='$uID'";
	$result=$con -> query($sql);
	
	if ( $result -> num_rows>0)
	{
		// read data
		while ($row = $result -> fetch_assoc())
		{
			$uID = $row["DoctorID"];
			$_SESSION['uID'] = $row["DoctorID"];
			echo $row["DoctorID"];
			header("Location:dateNew.php");
		}
		
	}
	else
	{   
       header("Location:dateNew.php");
	}
		

	$con-> close();

?>
