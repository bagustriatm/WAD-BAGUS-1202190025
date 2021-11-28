<?php
	
if (!isset($_SESSION)){
	session_start();
}
	$dbhost = "localhost";
	$dbuser = "root";
	$dbname = "wad_modul4";
	$dbpass = "";
	$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

	if(!$conn){
		echo "
		<script>
		alert('Failed Connect into Databases')
		</script>";
	}
?>