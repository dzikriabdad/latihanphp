<?php
// 1. Panggil Middleware DULUAN (Biar dia ngecek tiket sebelum tamu masuk)
include 'middleware/auth.php';
// Panggil fungsinya langsung
cek_sudah_login(); 

// 2. Baru Panggil Header (Tampilan)
include 'templates/header.php';
?>
<html>

<body>

    <table>
        <tr>
            <th><a href="beranda.php">Beranda</a></th>
            <th><a href="data_user.php">Data User</a></th>
            
            <?php if(!isset($_SESSION['username'])): ?>
                <th><a href="Login.php" id="para2">Login</a></th>
                <th><a href="Daftar.php">Daftar</a></th>
            <?php else: ?>
                <th><a href="logout.php" id="para1" onclick="return confirm('Yakin mau logout?')">Logout</a></th>
            <?php endif; ?>
        </tr>
    </table>

    <br>
    <input type="datetime-local">
    <select>
        <option value="Indonesia">Indonesia</option>
        <option value="English">English</option>
    </select>

    <hr>

    <h1>Selamat Datang 
        <?php 
            if(isset($_SESSION['username'])) {
                echo $_SESSION['username']; 
            }
        ?>
    </h1>

    <p>Contoh aplikasi PHP Native Sederhana: Login + CRUD Mahasiswa</p>
    <p>king sir anang</p>
    <hr>

    <div id="navbar-utama">
        Ini adalah Navigasi (Hanya ada satu)
    </div>

    <button class="tombol-biru">Klik Saya</button>
    <button class="tombol-biru">Daftar Sekarang</button>
    <a href="#" class="tombol-biru">Link Tombol</a>

    <footer>
        <p>PHP Native Demo</p>
    </footer> 

</body>
</html>