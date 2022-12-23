<?php
$servername = "localhost";
$username = "root";
$password = "toor";
$dbname = "personal";

$con = mysqli_connect($servername, $username, $password, $dbname);

if(!$con){
    die("not connected:" . mysqli_connect_error());
}
?>