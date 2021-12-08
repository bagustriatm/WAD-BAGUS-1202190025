<?php
	session_start();
	include('config.php');

	if(isset($_POST['login'])){
		global $conn;
		$email = $_POST['email'];
		$password = $_POST['password'];
		
		$cekEmail = "SELECT * FROM users WHERE email='$email'";
		$hub = mysqli_query($conn, $cekEmail);
		
		if(mysqli_num_rows($hub)===1){
			$result = mysqli_fetch_assoc($hub);

			if(password_verify($password, $result['password'])){
				$_SESSION['id'] = $result['id'];
				$_SESSION['nama'] = $result['nama'];
				$_SESSION['no_hp'] = $result['no_hp'];


				$_SERVER['message'] = 'Berhasil Login';
				
				header("Location: indexafterlogin.php");
				exit();

			}else{
				$_SESSION['message'] = 'Password Salah';
				header("Location: login.php");
				exit();
			}
		}
	}
?>

