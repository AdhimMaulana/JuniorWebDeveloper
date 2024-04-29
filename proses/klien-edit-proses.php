<?php
include '../koneksi.php';
$id_klien=$_POST['idklien'];
$nmklien=$_POST['nmklien'];
$nmperusahaan=$_POST['nmperusahaan'];
If(isset($_POST['simpan'])){
    extract($_POST);
    $nama_file = $_FILES['logo']['name']; 
    if(!empty($nama_file)){
    // Baca lokasi File sementar dan nama file dari form (logo) 
    $lokasi_file = $_FILES['logo']['tmp_name'];
    $tipe_file = pathinfo($nama_file, PATHINFO_EXTENSION);
    $file_logo = $id_klien.".".$tipe_file;
     
    // Tentukan folder untuk menyimpan file 
    $folder="images/$file_logo";
    @unlink ("$folder");
    // Apabila file berhasil di upload 
    move_uploaded_file($lokasi_file, "$folder");
    } 
    else
    $file_logo=$logo_awal;
    mysqli_query($db,"UPDATE tbklien SET nmklien='$nmklien', nmperusahaan='$nmperusahaan', logo='$file_logo' WHERE idklien='$id_klien'");
    header("location:../indexadmin.php?p=klien");
}
?>