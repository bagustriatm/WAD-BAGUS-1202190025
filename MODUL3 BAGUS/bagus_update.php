<?php 
	include('bagus_config.php');
	include('bagus_detailedbook.php');

	if(isset($_POST['update'])){
		$title 		 = $_POST['booktitle'];
		$author		 = $_POST['writer'];
		$years 		 = $_POST['year'];
		$description = $_POST['desc'];
		$lang		 = $_POST['language'];
		$imageadd	 = $_POST['gambar'];
		$tag 		= implode(",", $_POST['tag']);
		
		$update = "UPDATE buku_table SET judul_buku='$title', penulis_buku='$author', tahun_terbit='$years', deskripsi='$description', bahasa='$lang', gambar='$imageadd', tag='$tag'";
		
		$success = mysqli_query($conn, $update);
		
		
	}
	header('Location: bagus_home.php');
?>