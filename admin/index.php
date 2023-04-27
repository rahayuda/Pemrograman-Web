<?php
session_start();
include "session.php";
?>

<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Nama Website</title>
	<link rel="shortcut icon" href="../images/house.ico">

	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.3/dist/jquery.slim.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script> 

	<style>
		body {
			margin: 0;
			font-family: "Calibri";
			font-size: 18px;
		}

		.sidebar {
			margin: 0;
			padding: 0;
			width: 300px;
			background-color: #284059;
			position: fixed;
			height: 100%;
			overflow: auto;
		}

		.sidebar a {
			display: block;
			color: white;
			padding: 15px;
			text-decoration: none;
		}

		.sidebar c {
			display: block;
			color: white;
			padding-left: 15px;
			padding-right: 20px;
			text-decoration: none;
		}

		.sidebar a.active {
			background-color: #90D8BF;
			color: white;
		}

		.sidebar a:hover:not(.active) {
			background-color: #91D8BF;
			color: white;
		}

		div.content {
			margin-left: 300px;
			padding: 1px 20px;
			height: 100%;
		}

		@media screen and (max-width: 700px) {
			.sidebar {
				width: 100%;
				height: auto;
				position: relative;
			}
			.sidebar a {float: left;}
			div.content {margin-left: 0;}
		}

		@media screen and (max-width: 400px) {
			.sidebar a {
				text-align: center;
				float: none;
			}
		}
	</style>
</head>

<body>

	<div class="sidebar">
		
		<c><br><h2 style="color: white;"><b><?php echo $_SESSION['username']; ?></b></h2><hr style="color: white;"></c>
		<a class="active" href="index.php?page=home">Home</a>
		<a href="index.php?page=mahasiswa">Mahasiswa</a>
		<a href="index.php?page=request">Request</a>
		<a href="index.php?page=logout">Logout</a>
	</div>

	<div class="content">
		<?php 
		if(isset($_GET['page']))
		{
			$page = $_GET['page'];

			switch ($page) {
				case 'home':
				include "home.php";
				break;
				case 'mahasiswa':
				include "mahasiswa.php";
				break;   
				case 'insert':
				include "insert.php";
				break;
				case 'edit':
				include "edit.php";
				break;  
				case 'delete':
				include "delete.php";
				break;
				case 'request':
				include "request.php";
				break; 
				case 'up-request':
				include "up-request.php";
				break; 
				case 'logout':
				include "logout.php";
				break;   
			}
		}
		else
		{
			include "home.php";
		}

		?>
	</div>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>
