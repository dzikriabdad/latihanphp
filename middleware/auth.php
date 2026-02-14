<?php
// middleware/auth.php

function cek_sudah_login() {
    // PENGAMAN: Cek dulu, kalau session BELUM aktif, baru nyalakan
    if (session_status() == PHP_SESSION_NONE) {
        session_start();
    }

    // Kalau tidak ada username di session, usir ke login
    if (!isset($_SESSION['username'])) {
        echo "<script>
                alert('Eits, Login dulu bos!');
                window.location.href = 'login.php';
              </script>";
        exit;
    }
}

function cek_sudah_logout() {
    // PENGAMAN: Cek dulu juga disini
    if (session_status() == PHP_SESSION_NONE) {
        session_start();
    }

    // Kalau sudah login, tendang ke index
    if (isset($_SESSION['username'])) {
        echo "<script>
                alert('Anda sudah login!');
                window.location.href = '/index.php';
              </script>";
        exit;
    }
}
?>