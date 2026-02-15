<?php
// Bismillah dulu biar gak error
session_start();

// Panggil file koneksi (pastikan filenya ada ya)
include 'koneksi.php';

// CEK DULU: Kalau dia iseng buka halaman ini padahal udah login
if(isset($_SESSION['username'])){
    echo "<script>
            alert('Woi ngapain kesini lagi? Kan udah login jotoshi KoH Jue koe');
            window.location='index.php';
          </script>";
    exit;
}

// PROSES LOGIN (Kalau tombol dipencet)
if(isset($_POST['gasken_login'])){
    
    $user = $_POST['username'];
    $pass = $_POST['password'];

    // Cari data di database (semoga ketemu ya Allah)
    $cari = mysqli_query($koneksi, "SELECT * FROM users WHERE username='$user' AND password='$pass'");
    
    // Hitung ada berapa
    $jumlah = mysqli_num_rows($cari);

    if($jumlah > 0){
        // ALHAMDULILLAH KETEMU!
        $_SESSION['username'] = $user;
        $_SESSION['status'] = "login";
        
        echo "<script>
                alert('Widihh Mantap! Berhasil Login maseeh. Selamat Datang!');
                window.location='index.php';
              </script>";
    } else {
        // YAH SALAH :(
        echo "<script>
                alert('Waduh Salah Password Bos! Inget-inget lagi coba, jangan ngasal ');
              </script>";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Login Dulu Cuy</title>
    <style>
        body { font-family: sans-serif; margin-top: 50px; }
        input { padding: 10px; margin-bottom: 10px; width: 250px; }
        button { padding: 10px 20px; cursor: pointer; }
    </style>
</head>
<body>

    <center>
        <h2>SILAKAN MASUK DULU</h2>
        <p>Isi data yang bener, jangan ngawur.</p>

        <hr style="width: 50%;"> 
        <br>

        <form action="" method="POST">
            
            <label><b>Username:</b></label><br>
            <input type="text" name="username" placeholder="Isi username mu..." required>
            <br>

            <label><b>Password:</b></label><br>
            <input type="password" name="password" placeholder="Passwordnyaaaa..." required>
            <br><br>

            <button type="submit" name="gasken_login">
                GAS MASUK 
            </button>

        </form>

        <br>
        <hr style="width: 50%;">
        
        <p>
            Belum punya akun? <a href="daftar.php"><b>Bikin Dulu Disini!</b></a>
        </p>
        <p>
            <a href="index.php">⬅️ Kabur ke Halaman Depan</a>
        </p>

    </center>

</body>
</html>