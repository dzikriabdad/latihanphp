<!DOCTYPE html>
<html>
<head>
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
<link rel="stylesheet" href="buton.css">
    <title>Form Pendaftaran</title>
</head>
<body>
    <h2>Formulir Pendaftaran</h2>
    <form action="proses.php" method="POST">
        <label>Username :</label><br>
        <input type="text" name="username" required><br><br>

        <label>Password:</label><br>
        <input type="password" name="password" required><br><br>

        <label>Jenis Kelamin:</label><br>
        <input type="radio" name="jk" value="L"> Laki-laki
        <input type="radio" name="jk" value="P"> Perempuan<br><br>

        <button type="submit">Daftar</button>
    </form>
</body>
</html>
