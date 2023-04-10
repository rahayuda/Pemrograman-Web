<?php 
include 'koneksi.php';

session_start();
$username = $_SESSION['username'];

$upd 		= mysqli_query($con,"update user set status='offline' where username='$username'");

session_destroy();
header("location:../login.php");
?>