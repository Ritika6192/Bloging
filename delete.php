<?php
include "config.php";
$del="DELETE FROM chapter_tb WHERE id=".$_GET['id'];
$result= mysqli_query($con, $del);
if ($result) {
    header("location:select.php");
}else{
    echo "Something went wrong";
}
?>