
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
					<td><img src="https://upload.wikimedia.org/wikipedia/commons/d/d9/Pura_tanah_lot_sunset_no3.jpg" alt="tanah lot" width="350px;" height="233.52px"></td>
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
							<button type="submit" class="btn btn-primary" style="width: 95%" name="pesan01" data-bs-toggle="modal" data-bs-target="#Modal01" disabled>Pesan Tiket</button>
						</div>
					</td>
					<td>
						<div style="padding-top: 10px;" class="d-flex justify-content-center">
							<button type="submit" class="btn btn-primary" style="width: 95%" name="pesan02" data-bs-toggle="modal" data-bs-target="#Modal02" disabled>Pesan Tiket</button>
						</div>
					</td>
					<td>
						<div style="padding-top: 10px;" class="d-flex justify-content-center">
							<button type="submit" class="btn btn-primary" style="width: 95%" name="pesan03" data-bs-toggle="modal" data-bs-target="#Modal03" disabled>Pesan Tiket</button>
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
	<form action="insertBooking.php" method="post">
      <div class="modal-body">
			<input type="text" hidden name="place01" value="Raja Ampat">
			<input type="text" hidden name="city01" value="Papua">
			<input type="number" hidden name="prize01" value="7000000">
			<label for="bookingdate" class="form-label">Event Date</label>
			<input type="date" class="form-control" id="bookingdate01" aria-describedby="bookingdate" name="bookingdate01" required> 
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary" value="add">Tambahkan</button>
      </div>
	</form>
    </div>
  </div>
</div>

<!-- Modal 02-->
<div class="modal fade" id="Modal02" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
	<form action="insertBooking.php" method="post">
      <div class="modal-body">
			<label for="bookingdate" class="form-label">Event Date</label>
			<input type="date" class="form-control" id="bookingdate02" aria-describedby="bookingdate" name="bookingdate02" required>
			<input type="text" hidden name="place02" value="Gunung Bromo">
			<input type="text" hidden name="city02" value="Malang">
			<input type="number" hidden name="prize02" value="2000000">
		
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary" value="add">Tambahkan</button>
      </div>
	</form>
    </div>
  </div>
</div>

<!-- Modal 03-->
<div class="modal fade" id="Modal03" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
	<form action="insertBooking.php" method="post">	
      <div class="modal-body">
			<label for="bookingdate" class="form-label">Event Date</label>
			<input type="date" class="form-control" id="bookingdate03" aria-describedby="bookingdate" name="bookingdate03" required>
			<input type="text" hidden name="place03" value="Tanah Lot">
			<input type="text" hidden name="city03" value="Bali">
			<input type="number" hidden name="prize03" value="5000000">
		
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary" value="add">Tambahkan</button>
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