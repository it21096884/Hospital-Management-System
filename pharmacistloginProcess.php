<?php
	require "config.php";
	session_start();
			
	if( isset($_POST['log']) ){
		$email = $_POST['Email'];
		$pass = $_POST['Pass'];
				
		$sql = mysqli_query($con, "SELECT * FROM user WHERE Email = '$email' and Password = '$pass'");
		$row = mysqli_fetch_array($sql);
		
		if( is_array($row) ){
			$_SESSION["uID"] = $row['UserID'];
			header("Location: pharmacistprofile.php");
		}
		
		else{
			echo "Invalid details";
			echo "<br><br> <button> <a href = 'Home.html'> Back to home </a> </button>";
		}
	}
?>