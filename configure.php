<?php

//create the connection
$con = new mysqli("localhost" , "root" , "" , "hospital_management_system" ,3306);

if($con -> connect_error)
{
	die("connection failed" . $con -> connect_error);

}
else
{
	//echo "<script> alert('connected succesfully') </script>";
	
}

?>