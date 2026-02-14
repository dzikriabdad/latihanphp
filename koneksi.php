<?php
$host = "localhost";
$user = "root";
$pass = ""; // Kosongkan jika pakai Laragon/XAMPP standar
$db   = "latihan";
$koneksi = mysqli_connect($host, $user, $pass, $db);

// Cek koneksi untuk memastikan tidak error lagi
if (!$koneksi) {
    die("Koneksi ke database gagal: " . mysqli_connect_error());
}
?>