<?php
include "koneksi.php";
 
$id = $_GET['id'];

echo $id;
 
$result = mysqli_query($con, "DELETE FROM mahasiswa WHERE id=$id");
 
header("Location:index.php?page=mahasiswa");
?>