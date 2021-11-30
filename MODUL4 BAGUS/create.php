<?php
include('config.php');
// Register
function register($data){
    global $conn;

    // Get Data
	$id   = rand(1000000000, 9999999999);
    $nama = $data["name"];
    $email = $data["email"];
    $nohp = $data["number"];
    $pwd = $data["password"];
    $confirm = $data["passwordkonfi"];

    // cek email
    $email_check = mysqli_query($conn, "SELECT email FROM users WHERE email = '$email'");

    if (mysqli_fetch_assoc($email_check)) {
        echo "
        <div class='alert alert-warning alert-dismissible fade show' role='alert'>
            Email Sudah Pernah Terdaftar!
            <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
        </div>
        ";
        return false;
    }

    // cek confirm pass
    if ($pwd !== $confirm) {
        echo "
        <div class='alert alert-danger alert-dismissible fade show' role='alert'>
            Password Konfirmasi Tidak Sesuai!
            <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
        </div>
        ";
        return false;
    }

    // encryption
    $pwd = password_hash($pwd, PASSWORD_DEFAULT);

    // insert to database
    mysqli_query($conn, "INSERT INTO users VALUES
        ('$id', '$nama', '$email', '$pwd', $nohp)
    ");

    return mysqli_affected_rows($conn);
}
?>