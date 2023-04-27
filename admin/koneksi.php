<?php
	//KycuR[J/5A5eajet
	//$server		= "localhost"; 
	//$user		= "id19445650_root"; 
	//$password	= "KycuR[J/5A5eajet"; 
	//$database	= "id19445650_kampus"; 
	include "session.php";
	$server		= "localhost"; // sesuaikan alamat server anda
	$user		= "root"; // sesuaikan user web server anda
	$password	= ""; // sesuaikan password web server anda
	$database	= "kampus"; // sesuaikan database web server anda
		
	$con = mysqli_connect($server,$user,$password,$database);
?>