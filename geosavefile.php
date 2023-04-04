<?php

$user_name  = "root";
$password 	= "";
$database 	= "epiz_32822082_ifmagang";
$host_name  = "localhost";

$con 	= mysqli_connect($host_name,$user_name,$password);
$db 	= mysqli_select_db($con,$database);

if($_POST['lat'] && $_POST['long'])
{
	$lat = $_POST['lat'];
	$long = $_POST['long'];
	
	echo $lat;

	$upd  = mysqli_query($con,"update perangkat set time=now(), latitude='$lat',longitude='$long' where email='lia.putricandrawati@gmail.com'");
}
?>