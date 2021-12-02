<?php
session_start();
include('config.php');

if(isset($_POST['add'])) {
    $userID = $_SESSION['id'];

    if ($_POST['add'] === 'add01') {
        $id = rand(000, 999);
        $nama_tempat = 'Raja Ampat';
        $lokasi = 'Papua';
        $harga = 7000000;
        $date = $_POST['bookingdate01'];
    } elseif ($_POST['add'] === 'add02') {
        $id = rand(000, 999);
        $nama_tempat = 'Gunung Bromo';
        $lokasi = 'Malang';
        $harga = 2000000;
        $date = $_POST['bookingdate02'];
    } elseif($_POST['add'] === 'add03') {
        $id = rand(000, 999);
        $nama_tempat = 'Tanah Lot';
        $lokasi = 'Bali';
        $harga = 5000000;
        $date = $_POST['bookingdate03'];
    }else{
        echo error_log();
    }

    $query = "INSERT INTO bookings VALUES('$id','$userID','$nama_tempat','$lokasi','$harga','$date')";
    mysqli_query($conn, $query);

}
?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
	
<link href="assets/css/bootstrap.min.css" rel="stylesheet">
<link href="assets/css/bootstrap.min.css.map" rel="stylesheet">
<link href="assets/css/style.css" rel="stylesheet">
	
<title>EAD Travel</title>
</head>

<body>
<!--HEADER HEADER HEADER-->
<header>
	<nav class="navbar navbar-expand-lg navbar-info-hover-black fixed-top bg-info ps-5 shadow">
		<div class="col-6">
			<div class="mx-auto" style="width: 200px;">
				<a href="indexafterlogin.php"><p>EAD Travel</p></a>
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
		<div class="container p-2 bg-success shadow text-white text-center">
			<h1>EAD Travel</h1>
		</div>
		<section  class="container p-2 bg-light shadow">
			<table class="mx-auto">
				<tr>
					<td><img src="https://upload.wikimedia.org/wikipedia/commons/8/88/Raja_Ampat%2C_Mutiara_Indah_di_Timur_Indonesia.jpg" alt="raja ampat" width="350px"></td>
					<td><img src="https://s-light.tiket.photos/t/01E25EBZS3W0FY9GTG6C42E1SE/original/events/2020/12/22/391ca0b3-f23b-4476-b18b-d19d63f5dcc7-1608634979013-8c313f9e66f333afb59469a021af1ec2.jpg" alt="gunung bromo" width="350px"></td>
					<td><img src="https://backpackerjakarta.com/wp-content/uploads/2017/03/173-tanah-lot-temple2.jpg" alt="tanah lot" width="350px;" height="233.52px"></td>
				</tr>
				<tr>
					<td><strong>Raja Ampat, Papua</strong></td>
					<td><strong>Gunung Bromo, Malang</strong></td>
					<td><strong>Tanah Lot, Bali</strong></td>
				</tr>
				<tr style="vertical-align: top">
					<td>Kepulauan Raja Ampat merupakan rangkaian empat gugusan pulau yang berdekatan dan berlokasi di barat bagian Kepala Burung (Vogelkoop) Pulau Papua. Secara administrasi, gugusan ini berada di bawah Kabupaten Raja Ampat, Provinsi Papua Barat. Kepulauan ini sekarang menjadi tujuan para penyelam yang tertarik akan keindahan pemandangan bawah lautnya. Empat gugusan pulau yang menjadi anggotanya dinamakan menurut empat pulau terbesarnya, yaitu Pulau Waigeo, Pulau Misool, Pulau Salawati, dan Pulau Batanta.</td>
					<td>Gunung Bromo atau dalam bahasa Tengger dieja "Brama", adalah sebuah gunung berapi aktif di Jawa Timur, Indonesia. Gunung ini memiliki ketinggian 2.329 meter di atas permukaan laut dan berada dalam empat wilayah kabupaten, yakni Kabupaten Probolinggo, Kabupaten Pasuruan, Kabupaten Lumajang, dan Kabupaten Malang.</td>
					<td>Pura Tanah Lot adalah salah satu Pura (Tempat Ibadah Umat Hindu) yang sangat disucikan di Bali, Indonesia. Di sini ada dua pura yang terletak di atas batu besar. Satu terletak di atas bongkahan batu dan satunya terletak di atas tebing mirip dengan Pura Uluwatu. Pura Tanah Lot ini merupakan bagian dari pura Dang Kahyangan. Pura Tanah Lot merupakan pura laut tempat pemujaan dewa-dewa penjaga laut. Tanah Lot terkenal sebagai tempat yang indah untuk melihat matahari terbenam.</td>
				</tr>
				<tr>
					<td><hr><strong>Rp 7.000.000</strong></td>
					<td><hr><strong>Rp 2.000.000</strong></td>
					<td><hr><strong>Rp 5.000.000</strong></td>
				</tr>
				<tr>
					<td>
						<div style="padding-top: 10px;" class="d-flex justify-content-center">
							<button type="submit" class="btn btn-primary" style="width: 95%" name="pesan01" data-bs-toggle="modal" data-bs-target="#Modal01">Pesan Tiket</button>
						</div>
					</td>
					<td>
						<div style="padding-top: 10px;" class="d-flex justify-content-center">
							<button type="submit" class="btn btn-primary" style="width: 95%" name="pesan02" data-bs-toggle="modal" data-bs-target="#Modal02">Pesan Tiket</button>
						</div>
					</td>
					<td>
						<div style="padding-top: 10px;" class="d-flex justify-content-center">
							<button type="submit" class="btn btn-primary" style="width: 95%" name="pesan03" data-bs-toggle="modal" data-bs-target="#Modal03">Pesan Tiket</button>
						</div>
					</td>
				</tr>
			</table>
		</section>
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


<!-- Modal 01-->
<div class="modal fade" id="Modal01" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
	<form action="" method="post">
      <div class="modal-body">
			<label for="bookingdate" class="form-label">Event Date</label>
			<input type="date" class="form-control" id="bookingdate01" aria-describedby="bookingdate" name="bookingdate01" required> 
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary" value="add01" name="add">Tambahkan</button>
      </div>
	</form>
    </div>
  </div>
</div>

<!-- Modal 02-->
<div class="modal fade" id="Modal02" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
	<form action="" method="post">
      <div class="modal-body">
			<label for="bookingdate" class="form-label">Event Date</label>
			<input type="date" class="form-control" id="bookingdate02" aria-describedby="bookingdate" name="bookingdate02" required>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary" value="add02" name="add">Tambahkan</button>
      </div>
	</form>
    </div>
  </div>
</div>

<!-- Modal 03-->
<div class="modal fade" id="Modal03" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
	<form action="" method="post">
      <div class="modal-body">
			<label for="bookingdate" class="form-label">Event Date</label>
			<input type="date" class="form-control" id="bookingdate03" aria-describedby="bookingdate" name="bookingdate03" required>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary" value="add03" name="add">Tambahkan</button>
      </div>
	</form>
    </div>
  </div>
</div>


</body>
<!--SCRIPT-->
<script type="application/javascript" src="assets/js/jquery-3.3.1.min.js"></script>	
<script type="application/javascript" src="assets/js/bootstrap.bundle.min.js"></script>
<script type="application/javascript" src="assets/js/bootstrap.bundle.min.js.map"></script>
</html>