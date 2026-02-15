<?php
// middleware/auth.php

function cek_sudah_login() {
    if (session_status() == PHP_SESSION_NONE) {
        session_start();
    }

    // Kalau belum login, usir ke Login.php (yang ada di luar)
    if (!isset($_SESSION['username'])) {
        echo "<script>
                alert('Eits, Login dulu bos!');
                // PERBAIKAN: Arahkan ke /Login.php (Huruf L Besar sesuai file kamu)
                window.location.href = '/Login.php'; 
              </script>";
        exit;
    }
}

function cek_sudah_logout() {
    if (session_status() == PHP_SESSION_NONE) {
        session_start();
    }

    // Kalau sudah login, tendang balik ke index
    if (isset($_SESSION['username'])) {
        echo "<script>
                alert('Anda sudah login!');
                window.location.href = '/index.php';
              </script>";
        exit;
    }
}
?>