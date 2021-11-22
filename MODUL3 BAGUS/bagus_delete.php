<?php 
	include('bagus_config.php');
	$book_id	 = $_GET['id'];
	
	$delete = "DELETE FROM buku_table WHERE id_buku ='$book_id'";
	$success = mysqli_query($conn, $delete);

?>