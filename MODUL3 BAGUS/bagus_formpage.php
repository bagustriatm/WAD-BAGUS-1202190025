<?php
	include('bagus_config.php');
	$query = "SELECT * FROM buku_table";
	$select = mysqli_query($conn,$query);
?>

<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <title>EAD Library</title>
        <link rel="stylesheet" href="assets/css/bootstrap.css">
        <link rel="stylesheet" href="assets/css/style.css">
    </head>

<body>
	<nav class="navbar navbar-expand-lg navbar-dark-hover-black fixed-top bg-dark ps-5 shadow">
 		<div class="container-fluid">
			<a href="bagus_home.php"><img src="assets/images/logo-ead.png" class="nav-brand" alt="logo" height="33px"></a>
		</div>
		<form action="bagus_formpage.php">
			<div style="padding-right: 20px">
			<button type="submit" class="btn btn-primary" style="width: 150px;">Tambah Buku</button>
			</div>		
		</form>
	</nav>
	
	<main style="padding-top: 100px">
		<div class="container bg-light shadow p-5">
			<h4 align="center">Tambah Data Buku</h4>
			<form action="bagus_create.php" method="post">
				<div class="mb-3">
					<label for="booktitle" class="col-form-label-lg" ><strong>Judul Buku</strong></label>
					<input type="text" class="form-control" id="booktitle" aria-describedby="booktitle" name="booktitle" placeholder="Contoh : Pemrogaman Web Bersama EAD" required>
				</div>
				<div class="mb-3">
					<label for="writer" class="col-form-label-lg"><strong>Penulis</strong></label>
					<input type="text" class="form-control" id="writer" value="Bagus_1202190025" aria-describedby="writer" name="writer" readonly>
				</div>
				<div class="mb-3">
					<label for="year" class="col-form-label-lg"><strong>Tahun Terbit</strong></label>
					<input type="number" class="form-control" id="year" aria-describedby="year" name="year" placeholder="Contoh : 1990" required>
				</div>
				<div class="mb-3">
					<label for="desc" class="form-label"><strong>Deskripsi</strong></label>
					<textarea class="form-control" id="desc" name="desc" rows="3" placeholder="Contoh : Buku ini menjelaskan tentang ... ."></textarea>
				</div>
				<table>
                	<tr>
                     	<div class="form-group row">
                        	<td class="left">
                            	<label for="language" class="col col-form-label"><strong>Bahasa</strong></label>
                         	</td>
                            <td>
                            	<div class="form-check form-check-inline">
                                	<input type="radio" class="form-check-input" for="language" name="language" id="idn" value="Indonesia">
									<label class="form-check-label" for="idn">Indonesia</label>
                                </div>
                                <div class="form-check form-check-inline">
                                	<input type="radio" class="form-check-input" for="language" name="language" id="other" value="lainya">
                                 	<label class="form-check-label" for="Lainya">Lainya</label>
                                </div>
                        	</td>
                    	</div>
                	</tr>
					<br>
					<tr>
                        <td class="left">
                            <label for="tag" class="col col-form-label"><strong>Tag</strong></label>
                        </td>
						<td style="width: 85%">
							<div class="form-check form-check-inline">
							  	<input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="Pemrogaman" name="tag[]">
							  	<label class="form-check-label" for="inlineCheckbox1">Pemrogaman</label>
							</div>
							<div class="form-check form-check-inline">
							  	<input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="Website" name="tag[]">
							  	<label class="form-check-label" for="inlineCheckbox2">Website</label>
							</div>
							<div class="form-check form-check-inline">
							  	<input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="Java" name="tag[]">
							  	<label class="form-check-label" for="inlineCheckbox3">Java</label>
							</div>
							<div class="form-check form-check-inline">
							  	<input class="form-check-input" type="checkbox" id="inlineCheckbox4" value="OOP" name="tag[]">
							  	<label class="form-check-label" for="inlineCheckbox4">OOP</label>
							</div>
							<div class="form-check form-check-inline">
							  	<input class="form-check-input" type="checkbox" id="inlineCheckbox5" value="MVC" name="tag[]">
							  	<label class="form-check-label" for="inlineCheckbox5">MVC</label>
							</div>
							<div class="form-check form-check-inline">
							  	<input class="form-check-input" type="checkbox" id="inlineCheckbox6" value="Kalkulus" name="tag[]">
							  	<label class="form-check-label" for="inlineCheckbox6">Kalkulus</label>
							</div>
							<div class="form-check form-check-inline">
							  	<input class="form-check-input" type="checkbox" id="inlineCheckbox7" value="Lainya" name="tag[]">
							  	<label class="form-check-label" for="inlineCheckbox7">Lainya</label>
							</div>
						</td>
					</tr>
				</table>
				<br>
				<div class="mb-3">
				  	<label for="formFile" class="form-label"><strong>Gambar</strong></label>
				  	<input class="form-control" type="file" id="formFile" name="gambar">
				</div>
				<div class="d-flex justify-content-center">
					<button type="submit" class="btn btn-primary" style="width: 50%;" name="submit"> + Tambah</button>
				</div>
			</form>
		</div>
	</main>
        <br>
<footer class="footer mt-auto py-3 bg-light">
 	<div class="container">
    	<span class="text-muted">
		<img src="assets/images/logo-ead.png" width="200px";>
		<h2>Perpustakaan EAD</h2>
		<p>Dibuat oleh BAGUS TRI ATMAJA_1202190025</p>
		</span>
 	</div>
</footer>
</body>
<script type="application/javascript" src="assets/js/jquery-3.3.1.min.js"></script>
<script type="application/javascript" src="assets/js/bootstrap.min.js"></script>
</html>