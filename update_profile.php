<?php

include 'configp.php';
session_start();
$user_id = $_SESSION['user_id'];

if(isset($_POST['update_profile'])){

   $update_fname = mysqli_real_escape_string($conn, $_POST['update_fname']);
   $update_lname = mysqli_real_escape_string($conn, $_POST['update_lname']);
   $update_email = mysqli_real_escape_string($conn, $_POST['update_email']);
   $update_dob = mysqli_real_escape_string($conn, $_POST['update_dob']);
   $update_age = mysqli_real_escape_string($conn, $_POST['update_age']);
   $update_nic = mysqli_real_escape_string($conn, $_POST['update_nic']);
   $update_telephone = mysqli_real_escape_string($conn, $_POST['update_telephone']);

   mysqli_query($conn, "UPDATE `patient` SET First_Name = '$update_fname', Last_Name = '$update_lname', Email = '$update_email', Date_Of_Birth = '$update_dob', Age = '$update_age' , NIC = '$update_nic', Telephone = '$update_telephone' WHERE PatientID = '$user_id'") or die('query failed');

   /* $old_pass = $_POST['old_pass'];
   $update_pass = mysqli_real_escape_string($conn, md5($_POST['update_pass']));
   $new_pass = mysqli_real_escape_string($conn, md5($_POST['new_pass']));
   $confirm_pass = mysqli_real_escape_string($conn, md5($_POST['confirm_pass'])); */ //Encrypted pass
   
   $old_pass = $_POST['old_pass'];
   $update_pass = mysqli_real_escape_string($conn, $_POST['update_pass']);
   $new_pass = mysqli_real_escape_string($conn, $_POST['new_pass']);
   $confirm_pass = mysqli_real_escape_string($conn, $_POST['confirm_pass']);

   if(!empty($update_pass) || !empty($new_pass) || !empty($confirm_pass)){
      if($update_pass != $old_pass){
         $message[] = 'old password not matched!';
      }elseif($new_pass != $confirm_pass){
         $message[] = 'confirm password not matched!';
      }else{
         mysqli_query($conn, "UPDATE `patient` SET Password = '$confirm_pass' WHERE PatientID = '$user_id'") or die('query failed');
         $message[] = 'password updated successfully!';
      }
   }

   $update_image = $_FILES['update_image']['name'];
   $update_image_size = $_FILES['update_image']['size'];
   $update_image_tmp_name = $_FILES['update_image']['tmp_name'];
   $update_image_folder = 'uploaded_img/'.$update_image;

   if(!empty($update_image)){
      if($update_image_size > 2000000){
         $message[] = 'image is too large';
      }else{
         $image_update_query = mysqli_query($conn, "UPDATE `patient` SET image = '$update_image' WHERE PatientID = '$user_id'") or die('query failed');
         if($image_update_query){
            move_uploaded_file($update_image_tmp_name, $update_image_folder);
         }
         $message[] = 'image updated succssfully!';
      }
   }

}

?>

<!DOCTYPE html>
<html lang="en">
<head>

   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>update profile</title>

   <!-- custom css file link  -->
   <!-- <link rel="stylesheet" href="Styles/PProfile.css">
   <link rel="stylesheet" href="Styles/patientprofile.css"> -->
   <link rel="stylesheet" href="Styles/updateprofile.css">
   <link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro' rel='stylesheet' type='text/css'>
   

</head>
<body>
   
<div class="update-profile">

   <?php
      $select = mysqli_query($conn, "SELECT * FROM `patient` WHERE PatientID = '$user_id'") or die('query failed');
      if(mysqli_num_rows($select) > 0){
         $fetch = mysqli_fetch_assoc($select);
      }
   ?>

   <form action="" method="post" enctype="multipart/form-data">
      <?php
         if($fetch['image'] == ''){
            echo '<img src="images/default-avatar.png">';
         }else{
            echo '<img src="uploaded_img/'.$fetch['image'].'">';
         }
         if(isset($message)){
            foreach($message as $message){
               echo '<div class="message">'.$message.'</div>';
            }
         }
      ?>
      <div class="flex">
         <div class="inputBox">
            <span>First Name :</span>
            <input type="text" name="update_fname" value="<?php echo $fetch['First_Name']; ?>" class="box">
            <span>Your Email :</span>
            <input type="email" name="update_email" value="<?php echo $fetch['Email']; ?>" class="box">
			<span>Your Tel No :</span>
            <input type="tel" name="update_telephone" value="<?php echo $fetch['Telephone']; ?>" class="box">
            <span>Update Your Pic :</span>
            <input type="file" name="update_image" accept="image/jpg, image/jpeg, image/png" class="box">
			<span>Your Date Of Birth :</span>
            <input type="date" name="update_dob" value="<?php echo $fetch['Date_Of_Birth']; ?>" class="box">
			<span>Your Age :</span>
            <input type="text" name="update_age" value="<?php echo $fetch['Age']; ?>" class="box">
         </div>
         <div class="inputBox">
			<span>Last Name :</span>
            <input type="text" name="update_lname" value="<?php echo $fetch['Last_Name']; ?>" class="box">
            <input type="hidden" name="old_pass" value="<?php echo $fetch['Password']; ?>">
            <span>Old Password :</span>
            <input type="password" name="update_pass" placeholder="enter previous password" class="box">
            <span>New Password :</span>
            <input type="password" name="new_pass" placeholder="enter new password" class="box">
            <span>Confirm Password :</span>
            <input type="password" name="confirm_pass" placeholder="confirm new password" class="box">
			<span>Your NIC :</span>
            <input type="text" name="update_nic" value="<?php echo $fetch['NIC']; ?>" class="box">
         </div>
      </div>
      <input type="submit" value="update profile" name="update_profile" class="btn">
      <a href="patientprofile.php" class="delete-btn">go back</a>
   </form>

</div>

</body>
</html>