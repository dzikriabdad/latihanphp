<?php
session_start(); 

// 1. Cek apakah user BELUM login?
if (!isset($_SESSION['username'])) {
    echo "<script>
            alert('Akses Ditolak! Anda harus Login dulu.');
            window.location.href = 'index.php';
          </script>";
    exit; 
}

// 2. Panggil koneksi database
include 'koneksi.php'; 
?>

<!DOCTYPE html>
<html>
<head>
    <title>Data User</title>
    <link rel="stylesheet" href="buton.css"> 
    <style>
        /* CSS Sederhana untuk Tabel supaya rapi */
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>

    <h2>Daftar Pengguna (User)</h2>
    <a href="daftar.php" class="tombol-biru">+ Tambah User Baru</a>
    <a href="index.php" class="tombol-biru">Kembali ke Menu Utama</a>
    <br><br>

    <table>
        <thead>
            <tr>
                <th>No</th>
                <th>Username</th>
                <th>Password</th> 
                <th>Jenis Kelamin</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php
            // 3. Buat Query yang BENAR di sini (pakai $koneksi)
            $query = "SELECT * FROM users ORDER BY id ASC";
            $result = mysqli_query($koneksi, $query);

            $no = 1;

            // 4. Looping data
            while ($row = mysqli_fetch_assoc($result)) {
            ?>
                <tr>
                    <td><?php echo $no++; ?></td>
                    <td><?php echo $row['username']; ?></td>
                    <td><?php echo str_repeat("*", rand(5, 12)); ?></td>
                    <td><?php echo $row['jeniskelamin']; ?></td>
                    <td>
                        <a href="edit.php?id=<?php echo $row['id']; ?>">Edit</a> 
                        |
                        <a href="hapus.php?id=<?php echo $row['id']; ?>" onclick="return confirm('Yakin mau hapus data ini?')">Hapus</a>
                    </td>
                </tr>
            <?php
            }
            ?>
        </tbody>
    </table>

</body>
</html>