<?php
// Memanggil koneksi ke database
include "koneksi.php";

// Memeriksa apakah form telah disubmit
if(isset($_POST['submit'])) {
    // Menangkap data yang dikirimkan dari form
    $nm_admin = $_POST['nm_admin'];
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Query untuk memasukkan data ke dalam tabel admin
    $query = "INSERT INTO admin (nm_admin, username, password) VALUES ('$nm_admin', '$username', '$password')";

    // Melakukan eksekusi query
    $result = mysqli_query($db, $query);

    // Memeriksa apakah data berhasil ditambahkan atau tidak
    if($result) {
        // Jika berhasil, arahkan kembali ke halaman sign up dengan pesan sukses
        header("Location: sign-in.php");
    } else {
        // Jika gagal, arahkan kembali ke halaman sign up dengan pesan error
        header("Location: sign-up.php?status=error");
    }
} else {
    // Jika form tidak disubmit, arahkan kembali ke halaman sign up
    header("Location: sign-up.php");
}
?>