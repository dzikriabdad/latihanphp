<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Beranda - PHP Native Demo</title>
    <style>
        body {
            font-family: "Times New Roman", Times, serif; /* Font klasik sesuai gambar */
            margin: 20px;
        }

        /* Bagian Menu Atas (Logout, Tanggal, dll) */
        .top-bar {
            display: flex;
            align-items: center;
            gap: 10px;
            margin-bottom: 10px;
        }

        .link-logout {
            color: red; /* Biasanya logout berwarna merah atau dibedakan */
            font-weight: bold;
            text-decoration: underline;
            font-size: 18px;
        }

        /* Bagian Navigasi (Beranda, Data Mahasiswa, dll) */
        .nav-menu {
            margin-bottom: 40px;
        }

        .nav-menu a {
            color: blue;
            font-weight: bold;
            text-decoration: underline;
            margin-right: 15px;
            font-size: 18px;
        }

        .nav-menu a:hover {
            color: darkblue;
        }

        /* Bagian Judul Selamat Datang */
        .welcome-header {
            text-align: right; /* Rata kanan sesuai gambar */
            color: #1E90FF; /* Warna biru muda/DodgerBlue */
            margin-right: 50px;
            margin-bottom: 20px;
        }

        .welcome-header h1 {
            margin: 0;
            font-size: 36px;
        }

        /* Teks Konten */
        .content {
            font-size: 18px;
            margin-bottom: 40px;
        }

        .content p {
            margin: 5px 0;
        }

        /* Garis Pembatas */
        hr {
            border: 0;
            border-top: 1px solid #ccc;
            margin: 20px 0;
        }

        .footer {
            font-size: 18px;
        }
    </style>
</head>
<body>

    <div class="top-bar">
        <a href="logout.php" class="link-logout">Logout</a>
        
        <input type="datetime-local" value="<?php echo date('Y-m-d\TH:i'); ?>">
        
        <span>buton</span>
        
        <select>
            <option value="Indonesia">Indonesia</option>
            <option value="English">English</option>
        </select>
    </div>

    <div class="nav-menu">
        <a href="beranda.php">Beranda</a>
        <a href="datamahasiswa.php">Data Mahasiswa</a>
        <a href="login.php">Login</a>
        <a href="daftar.php">Daftar</a>
    </div>

    <div class="welcome-header">
        <h1>Selamat Datang</h1>
    </div>

    <div class="content">
        <p>Contoh aplikasi PHP Native Sederhana: Login + CRUD Mahasiswa</p>
        <p>king sir anang</p>
    </div>

    <hr>
    
    <div class="footer">
        PHP Native Demo
    </div>

</body>
</html>