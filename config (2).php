<?php

//create the connection
$con = new mysqli("localhost" , "root" , "" , "hospital_management_system" );

if($con -> connect_error)
{
	die("connection failed" . $con -> connect_error);

}
else
{
	//echo "connected succesfully";
	
}

?>