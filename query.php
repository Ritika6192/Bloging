<?php
    include "config.php";

    $cover = "assets/img/cover/".$_POST['cover'];

// ====================insert query====================
$sql="INSERT INTO `chapter_tb`(`title`, `discription`, `datee`, `cover`, `body`, `video`) VALUES ('".$_POST['title']."','".$_POST['discription']."','".$_POST['datee']."','".$cover."','".$_POST['body']."','".$_POST['video']."')";
$result = mysqli_query($con, $sql);
if($result){
    header('location:pannel.php');
}else{
    echo "something went wrong";
}
?>