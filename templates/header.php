<?php
// ga perlu session disini  biar gak lupa
// soalnya sudah ada di auth.php
?>
<!DOCTYPE html>
<html>
<head>
    <title>Web Belajar Dzikri</title>
    <link rel="stylesheet" href="buton.css?v=<?php echo time(); ?>">
</head>
<body>

    <div class="menu-atas">
        <a href="index.php">Rumah</a> | 
        <a href="data_user.php">Data user</a> |
        
        <?php
        // logika simpel buat cek login
        // kalau session ada isinya, berarti udah login
        if(isset($_SESSION['username'])) {
            ?>
                <a href="auth/logout.php" onclick="return confirm('Yakin mau udahan bang?')">Keluar</a>
            <?php
        } else {
            ?>
                <a href="auth/login.php">Masuk Dulu</a>
            <?php
        }
        ?>
    </div>
    
    <hr>