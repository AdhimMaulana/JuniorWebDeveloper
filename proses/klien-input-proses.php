<?php
include '../koneksi.php';

$id_klien = $_POST['idklien'];
$nmklien = $_POST['nmklien'];
$nmperusahaan = $_POST['nmperusahaan'];

if (isset($_POST['simpan'])) {
    extract($_POST);

    $nama_file = $_FILES['logo']['name'];
    if (!empty($nama_file)) {
        // Baca lokasi file sementara dan nama file dari formulir (logo)
        $lokasi_file = $_FILES['logo']['tmp_name'];
        
        // Dapatkan ekstensi file
        $tipe_file = pathinfo($nama_file, PATHINFO_EXTENSION);
        
        // Hasilkan nama file unik berdasarkan id klien dan ekstensi file
        $file_logo = $id_klien. "." .$tipe_file;
        
        // Tentukan folder untuk menyimpan file
        $folder = "../images/$file_logo";
        
        // Unggah file ke folder yang ditentukan
        move_uploaded_file($lokasi_file, "$folder");
    } 
    else 
        $file_logo = "-";
    

    $sql = 
    "INSERT INTO tbklien 
    VALUES('$id_klien', '$nmklien', '$nmperusahaan', '$file_logo')";
    $query = mysqli_query($db, $sql);

    header("location: ../indexadmin.php?p=klien");
}
?>