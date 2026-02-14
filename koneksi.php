<?php
$host = "145.79.11.226:3306";
$user = "dzikri_kaka";
$pass = "nxLAw7TB8KwkyWeK"; // Kosongkan jika pakai Laragon/XAMPP standar
$db   = "latihan";
$koneksi = mysqli_connect($host, $user, $pass, $db);

// Cek koneksi untuk memastikan tidak error lagi
if (!$koneksi) {
    die("Koneksi ke database gagal: " . mysqli_connect_error());
}
?>