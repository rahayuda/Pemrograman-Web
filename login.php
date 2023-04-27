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

		<form action="cek_login.php" method="post" onSubmit="return validasi()">
			<div class="row m-2">
				<div class="col-3">
					<label>Username</label>
				</div>
				<div class="col-9">
					<input type="text" name="username" id="username" class="form-control"/>
				</div>
			</div>

			<div class="row m-2">
				<div class="col-3">
					<label>Password</label>
				</div>
				<div class="col-9">
					<input type="password" name="password" id="password" class="form-control"/>
				</div>
			</div>

			<div class="row m-2 mt-4">
				<div class="col-3">

				</div>
				<div class="col-9">
					<input type="submit" value="Login" class="btn btn-success">
					<a class="btn btn-outline-primary ml-2" href="register.php" role="button">Register</a>
				</div>
			</div>
		</form>

	</div>
</div>








<script type="text/javascript">
	function validasi() {
		var username = document.getElementById("username").value;
		var password = document.getElementById("password").value;		
		if (username != "" && password!="") {
			return true;
		}else{
			alert('Username dan Password harus di isi !');
			return false;
		}
	}

</script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>



</html>