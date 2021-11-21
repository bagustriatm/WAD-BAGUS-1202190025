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

<body bgcolor="#FFFFFF">
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

	<main style="padding-top: 50px">
	<?php
	$numrow = mysqli_query($conn, $query);
	$row_count = mysqli_num_rows($numrow);?>
	
	<?php if($row_count==0):?>	
		<div class='jumbotron'>
			<table style='width: 500px;margin:auto'>
				<tr><td><p style='font-size: 24px'>Belum Ada Buku</p></td></tr>
				<tr><td><hr style='height:4px;border-width:2;color:black;background-color:black'></td></tr>
				<tr><td><p>Silahkan Menambahkan Buku</p></td></tr>
			</table>
		</div>";
		
	<?php else :?>
	<section class="container p-2 bg-light shadow">
		<div class="row" style="margin-top:20px">
			<?php
			$records = mysqli_query($conn,"select * from buku_table");
			while($data = mysqli_fetch_array($records))
			{
			?>
			<div class="col-4">
				<form action="bagus_detailedbook.php" method="post">
					<div class="card shower" style="width: 300px">
						<img src="assets/images/bookcover/<?php echo $data['gambar']; ?>" class="card-img-top" style="height: 200px;">
						<input name="image" value="<?php echo $data['gambar']; ?>" hidden>
						<div class="card-body">
							<h5 class="card-title"><?php echo $data['judul_buku'];?></h5>
							<p class="card-text"><?php echo $data['deskripsi']?></p>
							<a href="bagus_detailedbook.php?id_buku=<?php echo $data['id_buku'] ?>" class="btn btn-primary">Pelajari Lebih Lanjut</a>
						</div>
					</div>
				</form>
			</div>
			<?php
			}			
			?>	
		</div>
	</section>
	<?php endif;?>
	
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