<?php
	require 'create.php';
	include('config.php');

?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
	
<link href="assets/css/bootstrap.min.css" rel="stylesheet">
<link href="assets/css/bootstrap.min.css.map" rel="stylesheet">
<link href="assets/css/style.css" rel="stylesheet">
<script src="assets/js/YouShallPass.js"></script>
	
<title>REGISTRASI</title>
</head>

<body>
<!--HEADER HEADER HEADER-->
<header>
	<nav class="navbar navbar-expand-lg navbar-info-hover-black static-top bg-info ps-5 shadow">
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
	if(isset($_POST['daftar'])){
		if(register($_POST)>0){
			header('Location: login.php');
		}
	}
	?>
</header>
<!--MAIN MAIN MAIN-->
<main style="padding-top: 2px;padding-bottom: 100px">
	<section style="padding-top:50px">
		<div class="card rectangle m-auto bg-light">
			<p class="text-dark text-center">Register</p>
			<hr style='border-width:2;color:black;background-color:black;width:75%;margin:auto'>
			<div class="card-body">		
				<form action="" method="post">
					<!--nama-->
					<label for="name" class="form-label" style="padding-left: 10px">Nama</label>
					<input type="text" class="form-control label" id="name" aria-describedby="name" name="name" placeholder="Masukkan Nama Lengkap" required>
					<!--mail-->
					<label for="email" class="form-label" style="padding-left: 10px">Email</label>
					<input type="text" class="form-control label" id="email" aria-describedby="email" name="email" placeholder="Masukkan Alamat E-mail" required>
					<!--no hp-->
					<label for="number" class="form-label" style="padding-left: 10px">Nomor Handphone</label>
					<input type="text" class="form-control label" id="number" aria-describedby="number" name="number" placeholder="Masukkan Nomor Handphone" required>
					<!--kata sandi-->
					<label for="password" class="form-label" style="padding-left: 10px">Kata Sandi</label>
					<input type="password" class="form-control label" aria-describedby="password" name="password" placeholder="Kata Sandi Anda" required>
					<!--konfirmasi kata sandi-->
					<label for="password" class="form-label" style="padding-left: 10px">Konfirmasi Kata Sandi Anda</label>
					<input type="password" class="form-control label" aria-describedby="password" name="passwordkonfi" placeholder="Konfirmasi Kata Sandi Anda" required>
					<!--submit-->
						<div style="padding-top: 10px;" class="d-flex justify-content-center">
							<button type="Submit" class="btn btn-primary" style="width: 35%" name="daftar">Daftar</button>
						</div>
				</form>
				<p class="text-dark text-center">Anda sudah punya akun?
					<a href="login.php"> Login</a>
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