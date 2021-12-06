<?php
session_start();
include('config.php');
include ('indexafterlogin.php');
if(isset($_POST['add01'])) {
    global $conn;
    $userID = $_SESSION['id'];
    $idBooking = rand(000, 999);
    $nama_tempat = 'Raja Ampat';
    $lokasi = 'Papua';
    $harga = 7000000;
    $date = $_POST['bookingdate01'];

    $insert = mysqli_query($conn, "INSERT INTO bookings(id, user_id, nama_tempat, lokasi, harga, tanggal) VALUES('$idBooking ','$userID','$nama_tempat','$lokasi','$harga','$date'");
}

if(isset($_POST['add02'])) {
    global $conn;
    $userID = $_SESSION['id'];
    $idBooking  = rand(000, 999);
    $nama_tempat = 'Gunung Bromo';
    $lokasi = 'Malang';
    $harga = 2000000;
    $date = $_POST['bookingdate02'];

    $insert = mysqli_query($conn, "INSERT INTO bookings(id, user_id, nama_tempat, lokasi, harga, tanggal) VALUES('$idBooking ','$userID','$nama_tempat','$lokasi','$harga','$date'");
}

if(isset($_POST['add03'])) {
    global $conn;
    $userID = $_SESSION['id'];
    $idBooking = rand(000, 999);
    $nama_tempat = 'Tanah Lot';
    $lokasi = 'Bali';
    $harga = 5000000;
    $date = $_POST['bookingdate03'];

    $insert = mysqli_query($conn, "INSERT INTO bookings(id, user_id, nama_tempat, lokasi, harga, tanggal) VALUES('$idBooking ','$userID','$nama_tempat','$lokasi','$harga','$date'");
}

?>