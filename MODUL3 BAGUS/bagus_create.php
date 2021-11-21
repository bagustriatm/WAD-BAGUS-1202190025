<?php
	include('bagus_formpage.php');
	include('bagus_config.php');

	if(isset($_POST['submit'])){
		
		$book_id	 = rand(1000000000, 9999999999);
		$title 		 = $_POST['booktitle'];
		$author		 = $_POST['writer'];
		$years 		 = $_POST['year'];
		$description = $_POST['desc'];
		$lang		 = $_POST['language'];
		$imageadd	 = $_POST['gambar'];
		$tag 		= implode(",", $_POST['tag']);
		
		$query = "INSERT INTO buku_table(id_buku, judul_buku, penulis_buku, tahun_terbit, deskripsi, gambar, bahasa, tag) VALUES ('$book_id', '$title', '$author', '$years', '$description', '$imageadd', '$lang','$tag')";
		
		$insert = mysqli_query($conn, $query);
	}
	header('Location: bagus_home.php');
?>