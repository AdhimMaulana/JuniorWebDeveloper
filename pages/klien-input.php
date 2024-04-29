<link rel="stylesheet" type="text/css" href="style.css">
<div id="label-page"><h3>Input Data Klien</h3></div>
<div id="content">

<form action="proses/klien-input-proses.php" method="post" enctype="multipart/form-data">
<table id="tabel-input">                             
<tr>                                                                     
<td class="label-formulir">Logo</td>                                                                            
<td class="isian-formulir"><input type="file" name="logo" class="isian-formulir isian-formulir-border"></td>                                                                            
</tr>                                            
<tr>                                                  
<td class="label-formulir">ID Klien</td>                                                                            
<td class="isian-formulir"><input type="text" name="idklien" class="isian-formulir isian-formulir-border">                                                                            
</td>                                                                             
</tr>                                                                              
<tr>                                                                            
<td class="label-formulir">Nama Klien</td>                                                                            
<td class="isian-formulir"><input type="text" name="nmklien" class="isian-formulir isian-formulir-border"></td>                                                                             
</tr>                                                                             
<tr>                                                                            
<td class="label-formulir">Nama Perusahaan</td>                                                                            
<td class="isian-formulir"><input type="text" name="nmperusahaan" class="isian-formulir isian-formulir-border"></td>                                                                             
</tr>                                                                                                                                                                                                                           
<tr>                                                                            
<td class="label-formulir"></td>
<td class="isian-formulir"><input type="submit" name="simpan" value="Simpan" onclick="return confirm('Yakin Data Disimpan?')" class="tombol"></td>                                                                                                                                                    
</tr>                                                                         
</table>
</form>
</div>