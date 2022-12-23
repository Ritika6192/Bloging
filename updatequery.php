<?php
include "config.php";
$id = $_POST['id'];
$title = $_POST['title'];
$discription = $_POST['discription'];
$date = $_POST['datee'];
$body = $_POST['body'];
$cover = "assets/img/cover/".$_POST['cover'];
$upd= "UPDATE `chapter_tb` SET title='".$title."',discription='".$discription."',datee='".$date."',body='".$body."',cover='".$cover."' WHERE id='".$id."'";
$result= mysqli_query($con, $upd);
if ($result) {
    header('location:select.php');
}else{
    echo "Something went wrong in query";
}