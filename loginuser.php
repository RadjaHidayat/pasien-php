<?php
// Konfigurasi database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "radjabloking";

// Membuat koneksi ke database
$conn = new mysqli($servername, $username, $password, $dbname);

// Memeriksa apakah koneksi berhasil
if ($conn->connect_error) {
    die("Koneksi ke database gagal: " . $conn->connect_error);
}

// Mendapatkan nilai inputan dari form login
$username = $_POST['username'];
$password = $_POST['password'];

// Melakukan query untuk memeriksa kecocokan data login admin
$sql = "SELECT * FROM user WHERE username='$username' AND password='$password'";
$result = $conn->query($sql);

// Memeriksa jumlah baris hasil query
if ($result->num_rows > 0) {
    // Data login valid, redirect ke halaman admin
    header("Location: user.php");
} else {
    // Data login tidak valid, redirect kembali ke halaman login dengan pesan kesalahan
    header("Location: indexuser.php?error=1");
}

$conn->close();
?>