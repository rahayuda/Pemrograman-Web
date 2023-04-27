<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Nama Website</title>
    <link rel="shortcut icon" href="images/house.ico">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.3/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>  

    <style>
        .center {
            position: absolute;
            top: 50%;
            left: 50%;
            -ms-transform: translate(-30%, -30%);
            transform: translate(-50%, -50%);
            width: 400px;
        }
    </style>

</head>

<div class="container">
    <div class="center border border-primary p-3">

        <form action="register.php" method="post">
            <div class="row m-2">
                <div class="col-3">
                    <label>Nama</label>
                </div>
                <div class="col-9">
                    <input class="form-control form-control" type="text" name="nama">
                </div>
            </div>

            <div class="row m-2">
                <div class="col-3">
                    <label>Username</label>
                </div>
                <div class="col-9">
                    <input class="form-control form-control" type="text" name="username">
                </div>
            </div>

            <div class="row m-2">
                <div class="col-3">
                    Password
                </div>
                <div class="col-9">
                    <input class="form-control form-control" type="password" name="password">
                </div>
            </div>

            <div class="row m-2 mt-4">
                <div class="col-3">

                </div>
                <div class="col-9">
                  <input class="btn btn-primary btn" type="submit" name="submit" value="Register">                  
                  <a class="btn btn-outline-success" href="login.php" role="button">Login</a>
              </div>
          </div>
      </form>

  </div>
</div>


<?php

if(isset($_POST['submit'])) 
{
    $nama       = $_POST['nama'];
    $username   = $_POST['username'];
    $password   = $_POST['password'];
    $sha_pass   = sha1($password);

    include "koneksi.php";                

    $result = mysqli_query($con, "INSERT INTO user (nama,username,password) VALUES ('$nama','$username','$sha_pass')");
    ?><script>window.location="login.php"</script><?php
}
?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>



</html>