<!DOCTYPE HTML>
<html>

<head>
    <!-- Menetapkan judul halaman -->
    <title>Halaman Login</title>
    <!-- Menghubungkan stylesheet eksternal -->
    <link rel="stylesheet" href="style_sign.css">
</head>

<body>
    <!-- Membuat judul "ADMIN PERPUSTAKAAN" dengan properti tertentu -->
    <div style="color: white; position: absolute; left: 535px; top: 120px;
             font-size: 30px; background-color: black;">
        ADMIN CLUBMOTOR
    </div>
    <!-- Membuat kontainer untuk elemen-elemen form login -->
    <div class="container">
        <!-- Menampilkan judul "Login" -->
        <h1>Login</h1>
        <!-- Membuat form login dengan metode POST yang mengarahkan ke file "cek_login.php" saat disubmit -->
        <form method="post" action="cek_sign-in.php">
            <!-- Membuat label dan input untuk username -->
            <label>Username</label><br>
            <input type="text" name="user"><br>
            <!-- Membuat label dan input untuk password -->
            <label>Password</label><br>
            <input type="password" name="pass"><br>
            <br>
            <!-- Membuat tombol submit untuk mengirimkan form -->
            <button type="submit" name="submit">Log in</button>
        </form>
    </div>
</body>

</html>