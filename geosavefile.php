<?php
include "device.php";
include "koneksi.php"

$db 	= mysqli_select_db($con,$database);

if($_POST['lat'] && $_POST['long'])
{
	$lat = $_POST['lat'];
	$long = $_POST['long'];
	
	echo $lat;

	$upd  = mysqli_query($con,"update visitors set latitude='$lat',longitude='$long' where ip='$IP'");
}
?>

