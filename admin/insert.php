<br>
<h2><b>Insert</b></h2>
<hr>

<form action="insert.php" method="post" name="form1">
    <table class="table table-sm table-borderless">
        <tr> 
            <td width="5%">Nim</td>
            <td><input class="form-control form-control-sm" type="text" name="nim"></td>
            <td width="50%"></td>
        </tr>
        <tr> 
            <td>Nama</td>
            <td><input class="form-control form-control-sm" type="text" name="nama"></td>
        </tr>
        <tr> 
            <td>Email</td>
            <td><input class="form-control form-control-sm" type="text" name="email"></td>
        </tr>
        <tr> 
            <td></td>
            <td><input class="btn btn-primary btn-sm" type="submit" name="submit" value="submit"></td>
        </tr>
    </table>
</form>    


<?php

if(isset($_POST['submit'])) 
{
    $nim    = $_POST['nim'];
    $nama   = $_POST['nama'];
    $email  = $_POST['email'];
    
    include "koneksi.php";                

    $result = mysqli_query($con, "INSERT INTO mahasiswa (nim,nama,alamat) VALUES ('$nim','$nama','$email')");

    header("Location: index.php?page=mahasiswa");
}
?>