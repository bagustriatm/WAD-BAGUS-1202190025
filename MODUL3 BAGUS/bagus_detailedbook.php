<?php
include('bagus_config.php');
$id = $_GET['id_buku'];
$query = "SELECT * FROM buku_table WHERE id_buku='$id'";
$select =mysqli_query($conn, $query);
$data = mysqli_fetch_assoc($select);
?>

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="assets/css/bootstrap.css">
        <link rel="stylesheet" href="assets/css/style.css">
		<script src="assets/js/jquery-3.3.1.min.js"></script>
		<script src="assets/js/bootstrap.min.js"></script>
<style>
body {font-family: Arial, Helvetica, sans-serif;}

/* The Modal (background) */
.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow:scroll; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
  -webkit-animation-name: fadeIn; /* Fade in the background */
  -webkit-animation-duration: 0.4s;
  animation-name: fadeIn;
  animation-duration: 0.4s
}

/* Modal Content */
.modal-content {
  position: fixed;
  background-color: #fefefe;
  width: 50%;
  -webkit-animation-name: slideIn;
  -webkit-animation-duration: 0.4s;
  animation-name: slideIn;
  animation-duration: 0.4s
}

/* The Close Button */
.close {
  float: right;
  font-size: 28px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color:crimson;
  text-decoration: none;
  cursor: pointer;
}

.modal-header {
  padding: 2px 16px;
  background-color:white;
}

.modal-body {padding: 2px 16px;}

.modal-footer {
  padding: 2px 16px;
  background-color: #5cb85c;
  color: white;
}

/* Add Animation */
@-webkit-keyframes slideIn {
  from {bottom: -300px; opacity: 0} 
  to {bottom: 0; opacity: 1}
}

@keyframes slideIn {
  from {bottom: -300px; opacity: 0}
  to {bottom: 0; opacity: 1}
}

@-webkit-keyframes fadeIn {
  from {opacity: 0} 
  to {opacity: 1}
}

@keyframes fadeIn {
  from {opacity: 0} 
  to {opacity: 1}
}
</style>
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
			<div class="d-flex justify-content-center"><img src="assets/images/bookcover/<?php echo $data['gambar']; ?>" style="height:400px; object-fit: cover; padding-bottom: 30px;"></div>
			
			<div style="margin:auto">
				<h4 align="center">Detail Buku</h4>
				<hr style="height:4px;border-width:2;color:black;background-color:black">
				<p><strong>Judul Buku :</strong></p>
				<p><?= $data['judul_buku'] ?></p>
				<p><strong>Penulis :</strong></p>
				<p><?= $data['penulis_buku'] ?></p>
				<p><strong>Tahun Terbit :</strong></p>
				<p><?= $data['tahun_terbit'] ?></p>
				<p><strong>Deskripsi :</strong></p>
				<p><?= $data['deskripsi'] ?></p>
				<p><strong>Bahasa :</strong></p>
				<p><?= $data['bahasa'] ?></p>
				<p><strong>Tag :</strong></p>
				<p><?= $data['tag']?></p>
				<div class="row">
				<!--Modal Button-->
				<div class="col m-auto">
					<button type="submit" class="btn btn-primary" id="myBtn" style="width: 100%;" name="submit" data-toggle="modal" data-target="#editModal">Sunting</button>		
				</div>
				<!--Delete Button-->
				<div class="col m-auto">
				<form action="bagus_delete.php?id=<?php echo $data['id_buku']?>" method="get">
<!--					<input name="id" value="<?= $data['id_buku'] ?>" hidden>-->
					<button type="submit" class="btn btn-primary btn-danger" style="width: 100%;" name="delete">Hapus</button>	
				</form>
				<a href="bagus_delete.php?id=<?php echo $data['id_buku']?>" class="btn btn-primary btn-danger">Hapus</a>
				</div>
				</div>
			</div>			
		</div>
</main>	
<!-- The Modal -->
<div id="myModal" class="modal" style="padding-left: 250px;padding-top: 75px;">

  <!-- Modal content -->
  <div class="modal-content">
    <div class="modal-header shadow">
      <span class="close">&times;</span>
      <h2>Sunting</h2>
    </div>
    <div class="modal-body" style="padding-top: 10px;">
			<form action="bagus_update.php" method="post">
				<div class="mb-0">
					<label for="booktitle" class="col-form-label-lg" ><strong>Judul Buku</strong></label>
					<input type="text" class="form-control" id="booktitle" aria-describedby="booktitle" name="booktitle" placeholder="Contoh : Pemrogaman Web Bersama EAD" value="<?= $data['judul_buku'] ?>">
				</div>
				<div class="mb-2">
					<label for="writer" class="col-form-label-lg"><strong>Penulis</strong></label>
					<input type="text" class="form-control" id="writer" value="Bagus_1202190025" aria-describedby="writer" name="writer" readonly>
				</div>
				<div class="mb-2">
					<label for="year" class="col-form-label-lg"><strong>Tahun Terbit</strong></label>
					<input type="number" class="form-control" id="year" aria-describedby="year" name="year" placeholder="Contoh : 1990" value="<?= $data['tahun_terbit'] ?>">
				</div>
				<div class="mb-3">
					<label for="desc" class="form-label"><strong>Deskripsi</strong></label>
					<textarea class="form-control" id="desc" name="desc" rows="3" placeholder="Contoh : Buku ini menjelaskan tentang ... ." ><?= $data['deskripsi'] ?></textarea>
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
				  	<input class="form-control" type="file" id="formFile" name="gambar" value="">
				</div>
				<div class="d-flex justify-content-end">
					<button type="submit" class="btn btn-outline-secondary" style="width: 15%;" name="submit">Tutup</button>
					<button type="submit" class="btn btn-primary" style="width: 25%;" name="update">Simpan Perubahan</button>
				</div>
			</form>
    </div>
  </div>
</div>

<!--SCRIPT-->
<script>
var modal = document.getElementById("myModal");
var btn = document.getElementById("myBtn");
var span = document.getElementsByClassName("close")[0];
btn.onclick = function() {
  modal.style.display = "block";
}
span.onclick = function() {
  modal.style.display = "none";
}
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
</script>

</body>
</html>
