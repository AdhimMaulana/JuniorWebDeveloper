<!DOCTYPE HTML>
<html>

<head>
    <!-- Menetapkan judul halaman -->
    <title>Halaman Sign Up</title>
    <!-- Menghubungkan stylesheet eksternal -->
    <link rel="stylesheet" href="style_sign.css">
</head>

<body>
    <!-- Membuat judul "ADMIN PERPUSTAKAAN" dengan properti tertentu -->
    
    <!-- Membuat kontainer untuk elemen-elemen form sign up -->
    <div class="container">
        <!-- Menampilkan judul "Sign Up" -->
        <h1>Sign Up</h1>
        <!-- Membuat form sign up dengan metode POST yang mengarahkan ke file "cek_sign-up.php" saat disubmit -->
        <form method="post" action="cek_sign-up.php">
            <!-- Membuat label dan input untuk nama admin -->
            <label>Nama Admin</label><br>
            <input type="text" name="nm_admin"><br>
            <!-- Membuat label dan input untuk username -->
            <label>Username</label><br>
            <input type="text" name="username"><br>
            <!-- Membuat label dan input untuk password -->
            <label>Password</label><br>
            <input type="password" name="password"><br>
            <br>
            <!-- Membuat tombol submit untuk mengirimkan form -->
            <button type="submit" name="submit">Sign Up</button>
        </form>
    </div>
</body>

</html>