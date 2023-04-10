<?php include "device.php"; ?>

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
    html,
    body {
      height: 100%;
    }
    #content {
      flex: 1 0 auto;
      min-height: 30%;
    }
    #footer {
      flex-shrink: none;
    }
  </style>
  
</head>

<body class="d-flex flex-column">

  <header style="background-color:#90D8BF;">

    <div class="container">
      <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">

        <div class="carousel-inner">
          <div class="carousel-item active" data-bs-interval="10000">
            <img src="images/banner_1.png" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item" data-bs-interval="2000">
            <img src="images/banner_1.png" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="images/banner_1.png" class="d-block w-100" alt="...">
          </div>
        </div>

        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>

    </div>

    <nav class="navbar navbar-expand-lg" style="background-color:#284059;" data-bs-theme="dark">
      <div class="container">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">

          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link" aria-current="page" href="index.php?page=home">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" href="index.php?page=profile">Profile</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="index.php?page=visitors">Visitors</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Data
              </a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="index.php?page=data">Mahasiswa</a></li>
                <li><a class="dropdown-item" href="index.php?page=chart"">Chart</a></li>
                <li><hr class="dropdown-divider"></li>
                <li><a class="dropdown-item" href="#">Other</a></li>
              </ul>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="index.php?page=contact">Contact</a>
            </li>
          </ul>
          <form class="d-flex" role="login">
            <a class="btn btn-outline-success" href="login.php" role="button">Login</a>&nbsp;
            <a class="btn btn-outline-primary" href="register.php" role="button">Register</a>&nbsp;
          </form>
        </div>
      </div>
    </nav>

  </header>

  <div class="container" id="content">

    <?php 
    if(isset($_GET['page']))
    {
      $page = $_GET['page'];

      switch ($page) {
        case 'home':
        include "home.php";
        break;
        case 'profile':
        include "profile.php";
        break;
        case 'contact':
        include "contact.php";
        break;  
        case 'visitors':
        include "visitors.php";
        break; 
        case 'data':
        include "data.php";
        break; 
        case 'chart':
        include "chart.php";
        break;    
      }
    }
    else
    {
      include "home.php";
    }

    ?>

  </div>

  <br>
  <footer class="relative-bottom">
    <div style="background-color:#284059;">
      <ul class="nav justify-content-center border-bottom navbar navbar-expand-lg" data-bs-theme="dark">
        <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">Home</a></li>
        <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">Profile</a></li>
        <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">Tugas</a></li>
        <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">Contact</a></li>
        <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">About</a></li>
      </ul>
    </div>
    <div style="background-color:#90D8BF; height: 100px;">
      <br>
      <b class="nav justify-content-center navbar">&copy; 2023 Universitas Udayana</b>
      <br>
    </div>
  </footer>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>



</html>