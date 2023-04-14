<?php
	require 'config.php';
	
	$ItID = $_POST['ItID'];
	$price = $_POST['price'];
	$ITName = $_POST['ITName'];
	$Qty = $_POST['Qty'];
	$sname = $_POST['sname'];
	$Dis = $_POST['Dis'];
	$IM="IM001";
	$sid="SUP001";
	$mst="5";
	
	//insert query
	$sql = "INSERT INTO item(ItemID,Name,Price,Description,SupplierName,Min_Stock,Current_Stock,Inventory_ManagerID,SupplierID)
		VALUES ('$ItID','$ITName','$price','$Dis','$sname','$mst','$Qty','$IM','$sid')";
		
		if ($con->query($sql) == TRUE) 
		{
			echo '<script>alert("Connected successfuly")</script>';
			header("Location: StocksD.php");
		} 
		else 
		{
			echo "Error: " . $sql . "<br>" . $con->error;
		}

?>