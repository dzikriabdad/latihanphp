<?php
// 1. Panggil Satpam (Cek Login)
include 'middleware/auth.php'; 
cek_sudah_login();

// 2. Panggil Koneksi
include 'koneksi.php'; 

// 3. Panggil Header (Menu Atas)
include 'templates/header.php';
?>

<center>
    <br><br>

    <h1>Halo, <?php echo $_SESSION['username']; ?>!</h1>
    
    <p>Selamat datang di Halaman Utama.</p>
    
    <p>
        Status: <b><?php echo $_SESSION['status']; ?></b> | 
        Tanggal: <?php echo date('d-m-Y'); ?>
    </p>

    <hr>

    <a href="logout.php" onclick="return confirm('Yakin mau keluar?')">Logout</a>

</center>
<?php
// 4. Panggil Footer (Bagian Bawah)
include 'templates/footer.php';
?>