<?php
include 'koneksi.php';

// 1. Tangkap ID dari URL (yang dikirim dari link 'Hapus' tadi)
$id = $_GET['id'];

// 2. Buat Query Hapus
$query = "DELETE FROM users WHERE id = '$id'";

// 3. Eksekusi Query
if (mysqli_query($koneksi, $query)) {
    echo "<script>
            alert('Data berhasil dihapus!');
            window.location.href = 'data_user.php';
          </script>";
} else {
    echo "Gagal menghapus: " . mysqli_error($koneksi);
}
?>