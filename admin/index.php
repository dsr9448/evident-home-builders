<?php
	error_reporting(0);
	session_start();
	if ($_COOKIE['auth'] == "admin_in"){header("location:"."home.php");}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="author" content="@housamz">
	<meta name="description" content="Mass Admin Panel">
	<title>Admin Panel</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
	</head><style>
	body{
		background:  url('../assets/images/banners/1.jpg');
		width: 100%;
		height: 100vh;
		background-size: cover;
		background-position: center;
		background-repeat: no-repeat;
	}
	.btn-primary {
		background-color: #0E2B5C !important;
	}
</style>
</head>

<body>
	<div class="container  " >
		<div class="row align-items-center justify-content-center py-5">
			<div class="col-sm-6 col-md-4 col-md-offset-4 text-center " style="background-color: #fff; padding: 20px; border-radius: 10px;">
				<img src="../assets/images/logo/logo-dark.png" width="180" alt="" class="mx-auto">
				<h2 class="text-center my-3"> Admin Panel</h2>
				<div>
					<form action="login.php" method="post" name="login">
					<input type="text" class="form-control" placeholder="Email" name="email" required autofocus><br>
					<input type="password" class="form-control" placeholder="Password" name="password" required><br>
					<button class="btn  btn-primary mx-auto w-100 text-center" type="submit">
						Sign in
					</button>
					</form>
				</div>
			</div>
		</div>
	</div>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>