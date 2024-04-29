<?php
// Memulai sesi PHP
session_start();
// Menghapus variabel sesi 'sesi'
unset($_SESSION['sesi']);
// Menghapus variabel sesi 'id_admin'
unset($_SESSION['id_admin']);
// Menghancurkan sesi
session_destroy();
// Mengarahkan pengguna kembali ke halaman login setelah logout
header("Location:sign-in.php"); 
?>