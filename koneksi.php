<?php

// Deklarasi variabel untuk menyimpan informasi koneksi database
$server = "localhost";
$user = "root";
$password = "";
$nama_database = "dbmotor";

// Membuka koneksi database dengan fungsi mysqli_connect()
$db = mysqli_connect($server, $user, $password, $nama_database);

// Memeriksa koneksi database
if(!$db) {
  // Jika koneksi gagal, tampilkan pesan error dan matikan skrip
  die("Gagal terhubung dengan database: " . mysqli_connect_error());
}

// Jika koneksi berhasil, tampilkan pesan sukses


?>