<?php
	include('config.php');
	$query = "SELECT * FROM bookings";
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
<!--
				<ul type="none">
					<li class="d-inline"><a href="register.php">Register</a></li>
					<li class="d-inline" style="padding-left: 20px;"><a href="login.php">Login</a></li>
				</ul>
-->
				<ul type="none">
					<li class="d-inline"><a href="bookingcart.php"><img src="assets/images/cart4.svg" alt="cart"></a></li>
					<li class="d-inline" style="padding-left: 20px;">
						<div class="dropdown btn-group">
							<button class="btn dropdown-toggle" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">Profile</button>
							<ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
								<li><a class="dropdown-item" href="userprofile.php">Edit Profile</a></li>
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
	<div class="container p-0 bg-light shadow">
		<table class="table">
		  <thead>
			<tr>
			  	<th scope="col">No</th>
			  	<th scope="col">Nama Tempat</th>
			  	<th scope="col">Lokasi</th>
			  	<th scope="col">Tanggal Perjalanan</th>
				<th scope="col">Harga</th>
				<th scope="col">Aksi</th>
			</tr>
		  </thead>
		  <tbody>
				<tr>
				  <th scope="row"></th>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td>
						<button type="submit" class="btn btn-danger" style="width: 50%" name="delcart">Hapus</button>
					</td>
				</tr>
		  </tbody>
		</table>
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