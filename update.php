<?php
    session_start();
    require 'config.php';

    $name = $_POST['name'];
    $cvv = $_POST['cvv'];
    $date = $_POST['date'];
    $prevCardNo = $_SESSION["cardNo"];
    $sql = "UPDATE card set CVV = $cvv, Expire_Date = '$date', Card_Name = '$name' WHERE CardNo = '$prevCardNo'";

    if ($con -> query($sql)) {
        echo "Update Succesfull";
    }
    else {
        echo "Error Updating", $con -> error;
		header("Location: Mycards.php");
    }
	
    $con ->close();
?>