<?php
include "koneksi.php";

$id = $_GET['id'];

$result = mysqli_query($con, "SELECT * FROM mahasiswa WHERE id=$id");

while($user_data = mysqli_fetch_array($result))
{
    $nim    = $user_data['nim'];
    $nama   = $user_data['nama'];
    $email  = $user_data['alamat'];
}
?>

<br>
<h2><b>Edit</b></h2>
<hr>

<form name="update_user" method="post" action="edit.php">
    <table class="table table-sm table-borderless">
        <tr> 
            <td width="5%">Nim</td>
            <td><input class="form-control form-control-sm" type="text" name="nim" value="<?php echo $nim;?>"></td>
            <td width="50%"></td>
        </tr>
        <tr> 
            <td>Nama</td>
            <td><input class="form-control form-control-sm" type="text" name="nama" value="<?php echo $nama;?>"></td>
        </tr>
        <tr> 
            <td>Email</td>
            <td><input class="form-control form-control-sm" type="text" name="email" value="<?php echo $email;?>"></td>
        </tr>
        <tr>
            <td><input type="hidden" name="id" value="<?php echo $_GET['id'];?>"></td>
            <td><input type="submit" name="update" value="update" class="btn btn-warning btn-sm"></td>
        </tr>
    </table>
</form>


<?php

if(isset($_POST['update']))
{   
    $id     = $_POST['id'];
    $nim    = $_POST['nim'];
    $nama   = $_POST['nama'];
    $email  = $_POST['email'];
    
    $result = mysqli_query($con, "UPDATE mahasiswa SET nama='$nama',alamat='$email',nim='$nim' WHERE id=$id");

    header("Location: index.php?page=mahasiswa");
}
?>