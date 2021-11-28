<?php
	include('config.php');
	$query = "SELECT * FROM users";
	$select = mysqli_query($conn, $query);
?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
	
<link href="assets/css/bootstrap.min.css" rel="stylesheet">
<link href="assets/css/bootstrap.min.css.map" rel="stylesheet">
<link href="assets/css/style.css" rel="stylesheet">
	
<title>REGISTRASI</title>
</head>

<body>
<!--HEADER HEADER HEADER-->
<header>
	<nav class="navbar navbar-expand-lg navbar-info-hover-black fixed-top bg-info ps-5 shadow">
		<div class="col-6">
			<div class="mx-auto" style="width: 200px;">
				<a href="index.php"><p>EAD Travel</p></a>
			</div>
		</div>
		<div class="col-6">
			<div class="mx-auto" style="width: 200px;">
				<ul type="none">
					<li class="d-inline"><a href="register.php">Register</a></li>
					<li class="d-inline" style="padding-left: 20px;"><a href="login.php">Login</a></li>
				</ul>
			</div>
		</div>
	</nav>
<?php
	if(isset($_GET['login'])){
			echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
					  <strong>Holy guacamole!</strong> You should check in on some of those fields below.
					  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
							<span aria-hidden="true">&times;</span>
					  </button>
				</div>';
	}
	?>
<?php
	if(isset($_SESSION['message'])):?>
	<div class="alert alert-warning alert-dismissible fade show fade in" role="alert">
		<?= $_SESSION['message'];?>
		<button type="button" class="btn-close" data-dismiss="alert" aria-label="Close">
			<span aria-hidden="true">&times;</span>
		</button>
	</div>
<?php
	unset($_SESSION['message']);
	endif;
	?>
	
<?php
	if(isset($_SESSION['registered'])):?>
	<div class="alert alert-warning alert-dismissible fade show fade in" role="alert">
		<?= $_SESSION['registered'];?>
		<button type="button" class="btn-close" data-dismiss="alert" aria-label="Close">
			<span aria-hidden="true">&times;</span>
		</button>
	</div>
<?php
	unset($_SESSION['registered']);
	endif;
	?>
</header>
<!--MAIN MAIN MAIN-->
<main style="padding-top: 50px;padding-bottom: 100px">
	<section style="padding-top:10%">
		<div class="card rectangle m-auto bg-light">
			<p class="text-dark text-center">Login</p>
			<hr style='border-width:2;color:black;background-color:black;width:75%;margin:auto'>
			<div class="card-body">		
				<form action="login_config.php" method="post">
					<!--mail-->
					<label for="email" class="form-label" style="padding-left: 10px">Email</label>
					<input type="text" class="form-control label" id="email" aria-describedby="email" name="email" placeholder="Masukkan Alamat E-mail" required>
					<!--kata sandi-->
					<label for="password" class="form-label" style="padding-left: 10px">Kata Sandi</label>
					<input type="password" class="form-control label" aria-describedby="password" name="password" placeholder="Kata Sandi Anda" required>
					<!--remember me-->
					<div class="form-check" style="padding-top: 20px">
						<input class="form-check-input" type="checkbox" value="rememberme" id="flexCheckDefault">
						<label class="form-check-label" for="flexCheckDefault">Remember Me</label>
					</div>
					<!--submit-->
						<div style="padding-top: 10px;" class="d-flex justify-content-center">
							<a href="indexafterlogin.php" type="Submit" class="btn btn-primary" style="width: 35%" name="login">login</a>
						</div>
				</form>
				<p class="text-dark text-center">
					Anda belum punya akun?<a href="register.php">Register</a>
				</p>
			</div>
		</div>
	</section>
</main>
<!--FOOTER FOOTER FOOTER-->
<footer class="mt-auto bg-info fixed-bottom">
	<p>&#169; 2021 Copyright: BagusTri_1202190025</p>
</footer>
</body>
<!--SCRIPT-->
<script type="application/javascript" src="assets/js/jquery-3.3.1.min.js"></script>	
<script type="application/javascript" src="assets/js/bootstrap.bundle.min.js"></script>
<script type="application/javascript" src="assets/js/bootstrap.bundle.min.js.map"></script>
</html>