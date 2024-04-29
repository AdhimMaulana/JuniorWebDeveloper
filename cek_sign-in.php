<?php
// Memulai sesi PHP
session_start();
// Mengatur variabel sesi ke NULL
$_SESSION['sesi'] = NULL;

// Memasukkan file koneksi.php
include "koneksi.php";

// Memeriksa apakah tombol submit pada form login telah ditekan
if(isset($_POST['submit'])) {
    // Mengambil nilai yang dimasukkan oleh pengguna dari form login
    $user = isset($_POST['user']) ? $_POST['user']: ""; // Memeriksa apakah variabel $_POST['user'] telah diatur, jika tidak, maka nilainya kosong
    $pass = isset($_POST['pass']) ? $_POST['pass']: ""; // Memeriksa apakah variabel $_POST['pass'] telah diatur, jika tidak, maka nilainya kosong

    // Melakukan query ke database untuk mencocokkan username dan password yang dimasukkan oleh pengguna
    $qry  = mysqli_query($db, "SELECT * FROM admin WHERE username = '$user' AND password = '$pass'");
    // Menghitung jumlah baris hasil query
    $sesi = mysqli_num_rows($qry);

    // Jika data pengguna ditemukan (hanya satu baris), maka sesi login dibuat dan pengguna diarahkan ke halaman utama
    if ($sesi == 1) {
        // Mengambil data admin dari hasil query
        $data_admin = mysqli_fetch_array($qry);
        // Menyimpan ID admin dan nama admin ke dalam sesi
        $_SESSION['id_admin'] = $data_admin['id_admin'];
        $_SESSION['sesi'] = $data_admin['nm_admin'];

        // Menampilkan pesan sukses login menggunakan JavaScript
        echo "<script>alert('Anda berhasil Log In'); </script>";
        // Mengarahkan pengguna ke halaman utama
        echo "<meta http-equiv= 'refresh' content='0; url=indexadmin.php?user=$sesi'>";
    } else {
        // Jika tidak ditemukan data pengguna yang cocok, pengguna diarahkan kembali ke halaman login
        echo "<meta http-equiv ='refresh' content='0; url=login.php'>";
        // Menampilkan pesan gagal login menggunakan JavaScript
        echo "<script>alert('Anda Gagal  Log In');</script>";
    }

} else {
    // Jika tombol submit belum ditekan (pengguna belum melakukan submit form), maka tampilkan halaman login
    include "login.php";
}
?>