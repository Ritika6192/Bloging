<?php
    include "config.php";

    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
// ====================insert query====================
$fed="INSERT INTO `feedback_tb`(`name`, `email`, `message`) VALUES ('".$name."','".$email."','".$message."')";
$result = mysqli_query($con, $fed);
if($result){
    header('location:index.php');
}else{
    echo "something went wrong";
}
?>