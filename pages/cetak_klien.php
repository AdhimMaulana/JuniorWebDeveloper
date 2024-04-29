<?php
// Memanggil koneksi ke database
include "../koneksi.php";
?>
<link rel="stylesheet" type="text/css" href="../style.css">
<h3>Data Klien</h3>
<div id="content">
    <table border="1" id="tabel-tampil">
        <tr>
            <th id="label-tampil-no">No</th> 
            <th>ID Klien</th> 
            <th>Nama Klien</th>
            <th>Logo</th>
            <th>Nama Perusahaan</th>
        </tr>
        <?php
        $nomor = 1;
        $query = "SELECT * FROM tbklien ORDER BY idklien DESC";
        $q_tampil_klien = mysqli_query($db, $query);
        if(mysqli_num_rows($q_tampil_klien) > 0) {
            while($r_tampil_klien = mysqli_fetch_array($q_tampil_klien)) {
                if (empty($r_tampil_klien['logo']) or ($r_tampil_klien['logo'] == '-'))
                    $logo = "admin-no-photo.jpg";
                else
                    $logo = $r_tampil_klien['logo'];
                ?>
                <tr>
                    <td><?php echo $nomor; ?></td>
                    <td><?php echo $r_tampil_klien['idklien']; ?></td>
                    <td><?php echo $r_tampil_klien['nmklien']; ?></td>
                    <td><img src="../images/<?php echo $logo; ?>" width="70px" height="70px"></td> 
                    <td><?php echo $r_tampil_klien['nmperusahaan']; ?></td>
                </tr>
                <?php $nomor++; 
            } 
        }
        ?>
    </table>
    <script>
        window.print();
    </script>
</div>