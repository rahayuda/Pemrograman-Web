<?php 
include 'koneksi.php';
 
$username = $_POST['username'];
$sha_pass = sha1($_POST['password']);
 
$login = mysqli_query($con,"select * from user where username='$username' and password='$sha_pass'");
$cek = mysqli_num_rows($login);
 
if($cek > 0){
	session_start();
	$_SESSION['username'] = $username;
	$_SESSION['status'] = "login";
	$upd 		= mysqli_query($con,"update user set status='online' where username='$username'");
	header("location:admin/index.php");
}else{
	header("location:index.php");	
}
 
?>