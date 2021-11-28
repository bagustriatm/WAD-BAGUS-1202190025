<?php
	include('config.php');
	$query = "SELECT * FROM users";
	$select = mysqli_query($conn,$query);
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
					<li class="d-inline"><a href="bookingcart.php"><img src="assets/images/cart4.svg" alt="cart"></a></li>
					<li class="d-inline" style="padding-left: 20px;">
						<div class="dropdown btn-group">
							<button class="btn dropdown-toggle" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">Profile</button>
							<ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
								<li><a class="dropdown-item" href="#">Edit Profile</a></li>
								<li><a class="dropdown-item" href="#">Logout</a></li>
						  	</ul>
						</div>
					</li>
				</ul>
			</div>
		</div>
	</nav>	
</header>
<!--MAIN MAIN MAIN-->
<main style="padding-top: 100px;padding-bottom: 100px">
	<div class="container bg-light shadow p-5">
		<h2 align="center">Profile</h2>
			<form action="bagus_create.php" method="post">
		  		<div class="mb-3 row">
					<label for="staticEmail" class="col-sm-2 col-form-label">Email</label>
					<div class="col-sm-10">
			  			<input type="text" readonly class="form-control-plaintext" id="staticEmail" value="email@example.com">
					</div>
		  		</div>
<!--				NAMA-->
		  		<div class="mb-3 row">
					<label for="inputName" class="col-sm-2 col-form-label">Nama</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="inputName" name="">
					</div>
		  		</div>
<!--				NOMER-->
		  		<div class="mb-3 row">
					<label for="inputNumber" class="col-sm-2 col-form-label">Nomer Handphone</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="inputumber" name="">
					</div>
		  		</div>
				<hr>
<!--				Password-->
		  		<div class="mb-3 row">
					<label for="inputpass" class="col-sm-2 col-form-label">Kata Sandi</label>
					<div class="col-sm-10">
						<input type="Password" class="form-control" id="inputpass" name="">
					</div>
		  		</div>
<!--				Konfirmasi Password-->
				<div class="mb-3 row">
					<label for="inputNumber" class="col-sm-2 col-form-label">Konfirmasi Kata Sandi</label>
					<div class="col-sm-10">
						<input type="Password" class="form-control" id="inputpasskonf" name="">
					</div>
		  		</div>
<!--				Navbar Edit-->
				<div class="mb-3 row">
					<label for="inputNumber" class="col-sm-2 col-form-label">Warna Navbar</label>
					<div class="col-sm-10">
					<select class="form-control" id="building" name="building">
						<option value="blue">Bluesky</option>
						<option value="red">Red Blood</option>
						<option value="green">Green World</option>
					</select>
					</div>
				</div>
<!--				button-->
				<div class="d-flex justify-content-center">
					<button type="submit" class="btn btn-primary" name="submit">Simpan</button>
					<div style="padding-left: 2px">
						<button type="submit" class="btn btn-warning" name="cancel">Cancel</button>
					</div>
				</div>
			</form>
	</div>
</main>
<!--FOOTER FOOTER FOOTER-->
<footer class="mt-auto bg-info fixed-bottom">
	<p>&#169; 2021 Copyright: <a href="" data-bs-toggle="modal" data-bs-target="#modalfooter">BagusTri_1202190025</a></p>
</footer>
	
<!-- Modal FOOTER -->
<div class="modal fade" id="modalfooter" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Created By:</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        Nama: Bagus Tri Atmaja <br>
		NIM: 1202190025
      </div>
    </div>
  </div>
</div>
	
</body>
<!--SCRIPT-->
<script type="application/javascript" src="assets/js/jquery-3.3.1.min.js"></script>	
<script type="application/javascript" src="assets/js/bootstrap.bundle.min.js"></script>
<script type="application/javascript" src="assets/js/bootstrap.bundle.min.js.map"></script>
</html>