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
			margin: auto;
			flex: 1 0 auto;
			min-height: 67.5%;
			width: 30%;
			padding: 10px;
		}
		#footer {
			flex-shrink: none;
		}
	</style>

</head>

<div class="relative-top">
	<header>
		<div style="background-color:#90D8BF; height: 100px;">
			<b class="nav justify-content-center navbar">&nbsp;</b>
		</div>
		<div style="background-color:#284059;">
			<ul class="nav justify-content-center border-bottom navbar navbar-expand-lg" data-bs-theme="dark">
				<li class="nav-item"><a href="#" class="nav-link px-2 text-muted">&nbsp;</a></li>
			</ul>
		</div>
	</header>
</div>

<div id="content">
	<div style="height: 200px"></div>
		<table class="table table-borderless " >
			<tbody>
				<form action="cek_login.php" method="post" onSubmit="return validasi()">
					<tr>
						<td width="20%"><label>Username</label></td>    			
						<td ><input type="text" name="username" id="username" class="form-control"/></td>
					</tr>
					<tr>
						<td><label>Password</label></td>    			
						<td><input type="password" name="password" id="password" class="form-control"/></td>
					</tr>
					<tr>
						<td></td>
						<td>
							<input type="submit" value="Login" class="btn btn-success">&nbsp;
							<a class="btn btn-outline-primary" href="register.php" role="button">Register</a>
						</td>
					</tr>
				</form>
			</tbody>
		</table>
</div>

<div class="relative-bottom" id="footer">
	<footer>
		<div style="background-color:#284059;">
			<ul class="nav justify-content-center border-bottom navbar navbar-expand-lg" data-bs-theme="dark">
				<li class="nav-item"><a href="#" class="nav-link px-2 text-muted">&nbsp;</a></li>
			</ul>
		</div>
		<div style="background-color:#90D8BF; height: 100px;">
			<b class="nav justify-content-center navbar">&nbsp;</b>
		</div>
	</footer>
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