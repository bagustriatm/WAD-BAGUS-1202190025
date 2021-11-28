<?php
	include('config.php');
	include('index.php');

	if(isset($_POST['add'])){
		$book_id	 = rand(0000000, 99999999);
		$name		 = $_POST['name'];
		$email		 = $_POST['email'];
		$number		 = $_POST['number'];
		$password	 = $_POST['password'];
		$passwrd_k	 = $_POST['passwordkonfi'];
		
		$query = "INSERT INTO bookings(id, nama, email, password, no_hp) VALUES('$user_id', '$name', '$email', '$password', '$number')";
		$insert = mysqli_query($conn, $query);
	}
	header('Location: index.php');
?>