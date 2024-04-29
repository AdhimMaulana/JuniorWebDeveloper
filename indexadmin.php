<?php
// Mulai blok PHP

include 'koneksi.php';
// Mengimpor file 'koneksi.php' untuk menghubungkan ke database.

$tgl=date('Y-m-d');
// Mendapatkan tanggal hari ini dalam format 'tahun-bulan-tanggal'.

session_start();
// Memulai sesi PHP untuk mengelola data sesi pengguna.

if(isset($_SESSION['sesi'])){
// Memeriksa apakah sesi 'sesi' telah diatur, menandakan bahwa pengguna telah masuk.
?>

<!DOCTYPE html>
<html>
<head>
    <title>ClubMotor</title>
    <!-- Judul halaman web -->
    <link rel="stylesheet" type="text/css" href="style.css">
    <!-- Mengimpor file eksternal 'style.css' untuk mengatur tata letak dan gaya halaman -->
</head>
<body>
    <div id="container">
        <!-- Kontainer utama halaman -->
        <div id="header">
            <!-- Bagian header -->
            <div id="logo-clubmotor-container">
                <!-- Kontainer logo perpustakaan -->
                <image id="logo-clubmotor" src="image/motoclub.png" border=0 style="border:0; text-decoration:none; outline:none">
                <!-- Menampilkan logo perpustakaan -->
            </div>
            <div id="nama-alamat-clubmotor-container">
                <!-- Kontainer nama dan alamat perpustakaan -->
                <div class="nama-alamat-clubmotor">
                    <h1>CLUB MOTOR</h1>
                    <!-- Menampilkan nama perpustakaan -->
                </div>
                
            </div>
        </div>
        
        <table id="navbar"> <!-- Membuat tabel untuk menampilkan data anggota -->
        <tr>
            <th id="navbar-home"> <a href="indexadmin.php?p=beranda">Home</a></td> <!-- Kolom untuk nomor urut -->
            <th><a href ="indexadmin.php?p=profile">Profile</a></th> <!-- Kolom untuk ID Anggota -->
            <th><a href = "indexadmin.php?p=visi">Visi dan Misi</a></th> <!-- Kolom untuk Nama -->
            <th><a href = "indexadmin.php?p=produk">Produk Kami</a></th> <!-- Kolom untuk Foto -->
            <th><a href = "indexadmin.php?p=kontak">Kontak Kami</a></th> <!-- Kolom untuk Jenis Kelamin -->
            <th><a href = "indexadmin.php?p=about">About Us</a></th> <!-- Kolom untuk Alamat -->
            
        </tr> 
        </div>
        </table>
        <div id="sidebar">
            <!-- Sisi bar dengan navigasi -->
            
            <!-- Tautan untuk kembali ke halaman beranda -->
            <p class="label-navigasi" style="color: white;"><a href="indexadmin.php?p=beranda" style="color:white;">Home</a></p>
            <ul>
                <li><a href="indexadmin.php?p=artikel">Artikel</a></li>
                <!-- Tautan untuk menambahkan anggota -->
                <li><a href="indexadmin.php?p=event">Event</a></li>
                <li><a href="indexadmin.php?p=galery">Galery Foto</a></li>
                <li><a href="indexadmin.php?p=klien">Klien kami</a></li>
                <!-- Tautan untuk menambahkan buku -->
            </ul>
            <p class="label-navigasi" style="color: white;"><a href="sign-out.php" style="color:white;">Sign Out</a></p>
            
            
            <!-- Tautan untuk melihat laporan transaksi -->
            
            <!-- Tautan untuk keluar dari sesi -->
        </div>
        <div id="content-container">
            <!-- Kontainer untuk konten utama -->
            <div class="container">
                <div  class="row"><br/><br/><br/>
                    <div class="col-md-10 col-md-offset-1" style="background-image:url('../motoclub.png')">
                        <!-- Menampilkan latar belakang -->
                        <div class="col-md-4 col-md-offset-4">
                            <!-- Kolom untuk panel login -->
                            <div class="panel panel-warning login-panel" style="background-color:rgba(255, 255, 255, 0.6);position:relative;">
                                <!-- Panel untuk form login -->
                                <div class="panel-footer">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <?php
        // Memeriksa apakah parameter p tidak kosong
        $pages_dir='pages';
        // Menentukan direktori halaman
        if(!empty($_GET['p'])){
            // Jika parameter p tidak kosong
            $pages=scandir($pages_dir,0);
            // Membaca semua file di dalam direktori
            unset($pages[0],$pages[1]);
            // Menghapus dua entri pertama dari array
            $p=$_GET['p'];
            // Menentukan halaman yang diminta
            if(in_array($p.'.php',$pages)){
                // Jika halaman yang diminta ada
                include($pages_dir.'/'.$p.'.php');
                // Menampilkan halaman yang diminta
            }else{
                // Jika halaman yang diminta tidak ada
                echo 'Halaman Tidak Ditemukan';
                // Menampilkan pesan bahwa halaman tidak ditemukan
            }
        }else{
            // Jika parameter p kosong
            include($pages_dir.'/beranda.php');
            // Menampilkan halaman beranda
        }
        ?>
    </div>
    <!-- Kontainer untuk footer -->
    <div id="footer"><h3>Copyright&copy;AdhimMaulana</h3></div>
</div>
</body>
</html>
<?php
// Tag penutup blok if
}else {
    // Jika sesi 'sesi' tidak diatur
    echo "<script>
       alert('Anda Harus Login Dahulu!');
    </script>";
    // Menampilkan pesan peringatan bahwa pengguna harus login
    header('location:sign-in.php');
    // Mengarahkan pengguna ke halaman
}
?>