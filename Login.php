<?php
session_start(); // Mulai sesi
include 'koneksi.php'; // Panggil file koneksi database Anda

// Cek apakah tombol login ditekan
if (isset($_POST['login'])) {

    // 1. Ambil data dari form
    $username = $_POST['username'];
    $password = $_POST['password'];

    // 2. Mencegah SQL Injection (Pengamanan dasar)
    // Pastikan variabel $koneksi sesuai dengan yang ada di file koneksi.php Anda
    $username = mysqli_real_escape_string($koneksi, $username);
    $password = mysqli_real_escape_string($koneksi, $password);

    // 3. Cek ke Database
    // Ganti 'users' dengan nama tabel Anda jika berbeda
    $data = mysqli_query($koneksi, "SELECT * FROM users WHERE BINARY username='$username' AND password='$password'");

    // 4. Hitung jumlah data yang ditemukan
    $cek = mysqli_num_rows($data);

    if ($cek > 0) {
        // Jika data ditemukan (Login Berhasil)
        $_SESSION['username'] = $username;
        $_SESSION['status'] = "login";
        
        // Alihkan ke halaman dashboard/admin
        echo "<script>alert('Login Berhasil!'); window.location='index.php';</script>";
    } else {
        // Jika data tidak ditemukan (Login Gagal)
        $error_msg = "Username atau Password salah!";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Login cuy gasken</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="buton.css">
    <style>
        /* Styling pesan error */
        .error { color: red; font-size: 14px; margin-bottom: 10px; display: block; text-align: center;}
    </style>
</head>
<body>

    <center>
        <br><br><br>
        
        <table border="2" cellpadding="20" cellspacing="0" width="300" style="border-collapse: collapse;">
            <tr>
                <td bgcolor="#f0f0f0">
                    <h2 align="center">Silakan Masuk</h2>
                    
                    <form action="" method="POST">
                        
                        <?php if(isset($error_msg)): ?>
                            <span class="error"><?php echo $error_msg; ?></span>
                        <?php endif; ?>

                        <label>Username :</label><br>
                        <input type="text" name="username" style="width: 100%; margin-bottom: 10px;" required><br>

                        <label>Password :</label><br>
                        <input type="password" name="password" style="width: 100%; margin-bottom: 10px;" required><br>

                        <br>
                        <button type="submit" name="login" style="width: 100%; cursor: pointer;">LOGIN</button>
                    </form>

                    <br>
                    <center>
                        Belum punya akun? <a href="daftar.php">Daftar akunnya disini</a>
                    <a href="data_user.php">Kembali ke Menu Utama</a>
                    </center>
                </td>
            </tr>
        </table>

    </center>

</body>
</html>