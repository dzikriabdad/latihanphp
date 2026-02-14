<?php
include 'koneksi.php';

// 1. Ambil ID dari URL (yang dikirim dari link 'Edit' di data_user.php)
$id = $_GET['id'];

// 2. Ambil data user lama dari database berdasarkan ID itu
$query_ambil = "SELECT * FROM users WHERE id = $id";
$result = mysqli_query($koneksi, $query_ambil);
$data = mysqli_fetch_assoc($result);

// 3. Proses Update (Jika tombol 'Simpan Perubahan' ditekan)
if (isset($_POST['update'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $jk       = $_POST['jk'];

    // Query UPDATE (Bahasa SQL untuk mengubah data)
    $query_update = "UPDATE users SET 
                     username = '$username',
                     password = '$password',
                     jeniskelamin = '$jk'
                     WHERE id = $id";

    if (mysqli_query($koneksi, $query_update)) {
        echo "<script>
                alert('Data berhasil diubah!');
                window.location.href = 'data_user.php';
              </script>";
    } else {
        echo "Gagal update: " . mysqli_error($koneksi);
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit User</title>
    <link rel="stylesheet" href="buton.css">
</head>
<body>

    <h2>Edit Data User</h2>

    <form action="" method="POST">
        
        <label>Username :</label><br>
        <input type="text" name="username" value="<?php echo $data['username']; ?>" required><br><br>

        <label>Password :</label><br>
        <input type="Password" name="password" value="<?php echo str_repeat("*", strlen($data['password'])); ?>" required><br><br>

        <label>Jenis Kelamin :</label><br>
        <input type="radio" name="jk" value="L" <?php if($data['jeniskelamin'] == 'L') echo 'checked'; ?>> Laki-laki
        <input type="radio" name="jk" value="P" <?php if($data['jeniskelamin'] == 'P') echo 'checked'; ?>> Perempuan<br><br>

        <button type="submit" name="update">Simpan Perubahan</button>
        <a href="data_user.php">Batal</a>
        
    </form>

</body>
</html>