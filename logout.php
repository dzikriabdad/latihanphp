<?php
// 1. Mulai sesi (wajib ada supaya kita bisa akses sesinya dulu)
session_start();

// 2. Hancurkan sesi (ini yang bikin user 'keluar')
session_destroy();

// 3. Kembalikan user ke halaman login
header("Location: index.php");
exit;
?>