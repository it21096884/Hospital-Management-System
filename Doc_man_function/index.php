<?php
	require 'Configuration.php';
	session_start();
	$pid=$_POST["pid"];
	$uID = $_SESSION["uID"];
	
	
	// select Query
	$sql ="SELECT * FROM treatment where PatientID ='$pid'";
	$result=$con -> query($sql);
	
	if ( $result -> num_rows>0)
	{
		// read data
		while ($row = $result -> fetch_assoc())
		{
			$eid = $row["DoctorID"];
			$pid = $row["PatientID"];
			$_SESSION['eid'] = $row["DoctorID"];
			$_SESSION['pid'] = $row["PatientID"];
			echo $row["PatientID"];
			echo $row["DoctorID"];
			header("Location:oldpatient.php");
		}
		
	}
	else
	{
		
		        $eid = $row["DoctorID"];
				$pid = $_POST["pid"];
				$_SESSION['eid'] = $eid;
			    $_SESSION['pid'] = $pid;
			    echo $row["PatientID"];
				echo $row["DoctorID"];
			    header("Location:newpatient.php");
			
		
	
	}
		

	$con-> close();

?>
