<?php
include "../koneksi.php";
$id_klien=$_GET['id'];
$q_tampil_klien=mysqli_query($db, "SELECT * FROM tbklien WHERE idklien='$id_klien'"); 
$r_tampil_klien=mysqli_fetch_array($q_tampil_klien);
if (empty($r_tampil_klien['logo']) or ($r_tampil_klien['logo']=='-'))
$logo = "admin-no-photo.jpg";
else
$logo = $r_tampil_klien['logo'];
?>
<link rel="stylesheet" type="text/css" href="../style.css">
<div id="label-page"><h3>Kartu Klien</h3></div> 
<div id="content">
<table id="tabel-input">
<tr>
<td class="label-formulir">LOGO</td>
<td class="isian-formulir">
<img src="../images/<?php echo $logo; ?>" width=70px height=75px> </td>
</tr>
<tr>
<td class="label-formulir">ID Klien</td>
<td class="isian-formulir"><?php echo $r_tampil_klien['idklien']; ?></td>
</tr>
<tr>
<td class="label-formulir">Nama Klien</td>
<td class="isian-formulir"><?php echo $r_tampil_klien['nmklien']; ?></td>
</tr>
<tr>
<td class="label-formulir">Nama Perusahaan</td>
<td class="isian-formulir"><?php echo $r_tampil_klien['nmperusahaan']; ?></td>
</tr>
</table>
</div>
<script>
    window.print();
</script>