<?php
include 'koneksi.php';
$id_klien=$_GET['id'];
$q_tampil_klien=mysqli_query($db, "SELECT * FROM tbklien WHERE idklien='$id_klien'"); 
$r_tampil_klien=mysqli_fetch_array($q_tampil_klien);
if (empty($r_tampil_klien['logo']) or ($r_tampil_klien['logo']=='-')) 
$logo = "admin-no-photo.jpg";
else
$logo = $r_tampil_klien['logo'];
?>
<link rel="stylesheet" type="text/css" href="style.css">
<div id="label-page"><h3>Edit Data Klien</h3></div> 
<div id="content">
<form action="proses/klien-edit-proses.php" method="post" enctype="multipart/form-data"> 
    <table id="tabel-input">
<tr>
<td class="label-formulir">Logo</td>
<td class="isian-formulir">
<img src="images/<?php echo $logo; ?>" width=70px height=75px>
<input type="file" name="logo" class="isian-formulir isian-formulir-border">
<input type="hidden" name="logo_awal" value="<?php echo $r_tampil_klien['logo']; ?>"> 
</td>
</tr> 
<tr>
    <td class="label-formulir">ID Klien</td>
    <td class="isian-formulir">
        <input type="text" name="idklien" value="<?php echo $r_tampil_klien['idklien']; ?>" readonly="readonly" class="isian-formulir isian-formulir-border warna-Formulir-disabled">
    </td>
</tr>
<tr>
<td class="label-formulir">Nama Klien</td>
<td class="isian-formulir"><input type="text" name="nmklien" value="<?php echo $r_tampil_klien['nmklien']; ?>" class="isian-formulir isian-formulir-border"></td>
</tr>
<tr>
<td class="label-formulir">Nama Perusahaan</td>
<td class="isian-formulir"><input type="text" name="nmperusahaan" value="<?php echo $r_tampil_klien['nmperusahaan']; ?>" class="isian-formulir isian-formulir-border"></td>
</tr>
<tr>
<td class="label-formulir"></td>
<td class="isian-formulir"><input type="submit" name="simpan" onclick="return confirm('Yakin Data Disimpan?')" value="Simpan" id="tombol-simpan"></td>
</tr>
</table>
</form>
</div>