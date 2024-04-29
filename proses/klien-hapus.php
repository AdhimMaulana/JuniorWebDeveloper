<?php
include'../koneksi.php'; 
$id_klien=$_GET['id'];
mysqli_query($db,"DELETE FROM tbklien WHERE idklien='$id_klien'"
);

header("location: ../indexadmin.php?p=klien");
?>