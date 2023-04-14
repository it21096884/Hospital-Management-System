<?php
	require 'config.php';
	
	$ReqID = $_POST['ReqID'];
	$Secname = $_POST['Secname'];
	$Itemname = $_POST['Itemname'];
	$Qty = $_POST['Qty'];
	$RD = date('Y-m-d',strtotime($_POST['date']));
	$LB="LR001";
	$sts="P";
	
	//insert query
	$sql = "INSERT INTO requestlist(RequestListID,Item_Name	,Section,Required_Date,Status,LabReportID,Quantity)
		VALUES ('$ReqID','$Itemname','$Secname','$RD','$sts','$LB','$Qty')";
		
		if ($con->query($sql) == TRUE) 
		{
			echo '<script>alert("Connected successfuly")</script>';
			header("Location: Request.php");
		} 
		else 
		{
			echo "Error: " . $sql . "<br>" . $con->error;
		}

?>