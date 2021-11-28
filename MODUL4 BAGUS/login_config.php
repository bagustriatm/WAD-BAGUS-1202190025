<?php
	include('config.php');
	include('login.php');

	if(isset($_POST['login'])){
		$email = $_POST['email'];
		$password = $_POST['password'];
		
		$cekEmail = "SELECT * FROM users WHERE email='$email'";
		$select = mysqli_query($conn, $cekEmail);
		
		if(mysqli_num_rows($select)==1){
			$result = mysqli_query($select);
			
			if(password_verify($password, $result['password'])){
				$_SESSION['id'] = $result['id'];
				$_SESSION['nama'] = $result['nama'];
				$_SESSION['no_hp'] = $result['no_hp'];
				
				$_SERVER['message'] = 'Berhasil Login';
				
				header("Location: index.php");
				exit();
				
			}else{
				$_SESSION['message'] = 'Password Salah';
				header("Location: login.php");
				exit();
			}
		}
	}
?>