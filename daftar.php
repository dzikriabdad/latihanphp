<!DOCTYPE html>
<html>
<head>
    <title>Daftar Akun</title>
</head>
<body>

    <h2>Form Daftar Akun</h2>
    <p>Silakan isi data di bawah ini:</p>

    <form action="proses.php" method="POST">
        
        <label>Username :</label><br>
        <input type="text" name="username" required>
        <br><br> <label>Password :</label><br>
        <input type="password" name="password" required>
        <br><br>

        <label>Jenis Kelamin :</label><br>
        <input type="radio" name="jk" value="L"> Laki-laki
        <input type="radio" name="jk" value="P"> Perempuan
        <br><br>

        <button type="submit" name="daftar">Daftar Sekarang</button>

    </form>
    <br>
    <br>
    
    <a href="index.php">Kembali ke Menu Utama</a>

</body>
</html>