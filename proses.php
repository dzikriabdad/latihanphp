<?php
// 1. Panggil koneksi database
include 'koneksi.php';

// 2. Ambil data dari form
$username = $_POST['username'];
$password = $_POST['password'];
$jk       = $_POST['jk']; // Ini mengambil dari input name="jk"

// 3. Masukkan ke Database
// Saya sudah sesuaikan: kolom di database kamu bernama 'jeniskelamin' (tanpa spasi/underscore)
$query = "INSERT INTO users (username, password, jeniskelamin) 
          VALUES ('$username', '$password', '$jk')";

// 4. Cek berhasil atau gagal
if (mysqli_query($koneksi, $query)) {
    echo "<script>
            alert('Data berhasil disimpan!');
            window.location.href = 'daftar.php';
          </script>";
} else {
    echo "Gagal menyimpan: " . mysqli_error($koneksi);
}
?>