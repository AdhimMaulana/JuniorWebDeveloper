<link rel="stylesheet" type="text/css" href="style.css"> <!-- Memuat file CSS eksternal -->

<div id="label-page"><h3>Tampil Data Klien</h3></div> <!-- Membuat kontainer untuk judul halaman -->

<div id="content"> <!-- Membuat kontainer untuk konten utama -->
    <p id="tombol-tambah-container"> <!-- Membuat kontainer untuk tombol tambah dan pencarian -->

        <a target="_blank" href="pages/cetak_klien.php"> <!-- Tombol untuk mencetak -->
            <img src="image/klien.png" height="50px" height="50px"> <!-- Gambar untuk mencetak -->
        </a>
        <FORM CLASS="form-inline" METHOD="POST"> <!-- Form untuk pencarian -->
            <div align="right">
                <form method=post>
                    <input type="text" name="pencarian"> <!-- Input untuk pencarian -->
                    <input type="submit" name="search" value=" search" class="tombol"> <!-- Tombol untuk memulai pencarian -->
                </form>
            </div>
        </FORM>
    </p>

    <table id="tabel-tampil"> <!-- Membuat tabel untuk menampilkan data klien -->
        <tr>
            <th id="label-tampil-no">No</th> <!-- Kolom untuk nomor urut -->
            <th>ID Klien</th> <!-- Kolom untuk ID Klien -->
            <th>Nama Klien</th> <!-- Kolom untuk Nama Klien -->
            <th>Nama Perusahaan</th> <!-- Kolom untuk Nama Perusahaan -->
            <th>Logo</th> <!-- Kolom untuk Logo -->
            <th id="label-opsi">Opsi</th> <!-- Kolom untuk Opsi -->
        </tr> 

        <?php
        include 'koneksi.php'; // Memasukkan file koneksi.php
        $batas = 10; // Batas jumlah data per halaman
        extract($_GET); // Mendapatkan variabel dari URL
        if (empty($hal)) { // Jika variabel hal kosong
            $posisi = 0;
            $hal = 1;
            $nomor = 1;
        } else { // Jika variabel hal tidak kosong
            $posisi = ($hal - 1) * $batas;
            $nomor = $posisi + 1;
        }

        if ($_SERVER['REQUEST_METHOD'] == "POST") { // Jika metode request adalah POST
            $pencarian = trim(mysqli_real_escape_string($db, $_POST['pencarian'])); // Mendapatkan kata kunci pencarian
            if ($pencarian != "") { // Jika kata kunci pencarian tidak kosong
                $sql = "SELECT * FROM tbklien WHERE nmklien LIKE '%$pencarian%' OR idklien LIKE '%$pencarian%' OR nmperusahaan LIKE '%$pencarian%'"; // Query pencarian data
                $query = $sql;
                $queryJml = $sql;
            } else { // Jika kata kunci pencarian kosong
                $query = "SELECT * FROM tbklien LIMIT $posisi, $batas"; // Query untuk menampilkan data
                $queryJml = "SELECT * FROM tbklien";
                $no = $posisi * 1;
            }
        } else { // Jika metode request bukan POST
            $query = "SELECT * FROM tbklien LIMIT $posisi, $batas"; // Query untuk menampilkan data
            $queryJml = "SELECT * FROM tbklien";
            $no = $posisi * 1;
        }

        $q_tampil_klien = mysqli_query($db, $query); // Eksekusi query untuk menampilkan data klien
        if (mysqli_num_rows($q_tampil_klien) > 0) { // Jika terdapat data klien
            while ($r_tampil_klien = mysqli_fetch_array($q_tampil_klien)) { // Looping untuk setiap data klien
                // Proses penampilan data (contoh: echo $r_tampil_klien['nmklien']);
        ?>

                <tr>
                    <td><?php echo $nomor; ?></td> <!-- Menampilkan nomor urut -->
                    <td><?php echo $r_tampil_klien['idklien']; ?></td> <!-- Menampilkan ID Klien -->
                    <td><?php echo $r_tampil_klien['nmklien']; ?></td> <!-- Menampilkan Nama Klien -->
                    <td><?php echo $r_tampil_klien['nmperusahaan']; ?></td> <!-- Menampilkan Nama Perusahaan -->
                    <td><img src="images/<?php echo $r_tampil_klien['logo']; ?>" width="70px" height="70px"></td> <!-- Menampilkan Logo -->
                    <td>
                        <div class="tombol-opsi-container"><a target="_blank" href="pages/cetak_detail_klien.php?id=<?php echo $r_tampil_klien['idklien']; ?>" class="tombol">Cetak Detail</a></div> <!-- Tombol untuk mencetak detail klien -->
                    </td>
                    </tr>
        <?php $nomor++;
            }
        } else { // Jika tidak terdapat data klien
            echo "<tr><td colspan=6>Data Tidak Ditemukan</td></tr>"; // Menampilkan pesan bahwa data tidak ditemukan
        } ?>
    </table>

    <?php
    if (isset($_POST['pencarian'])) {
        if ($_POST['pencarian'] != '') {
            echo "<div style=\"float:left;\">";
            $jml = mysqli_num_rows(mysqli_query($db, $queryJml)); // Menghitung jumlah data hasil pencarian
            echo "Data Hasil Pencarian: <b>$jml</b>"; // Menampilkan jumlah data hasil pencarian
            echo "</div>";
        }
    } else { ?>
        <div style="float: left;">
            <?php
            $jml = mysqli_num_rows(mysqli_query($db, $queryJml)); // Menghitung jumlah data
            echo "Jumlah Data: <b>$jml</b>"; // Menampilkan jumlah data
            ?>
        </div>
        <div class="pagination">
            <?php
            $jml_hal = ceil($jml / $batas); // Menghitung jumlah halaman
            for ($i = 1; $i <= $jml_hal; $i++) { // Looping untuk menampilkan link halaman
                if ($i != $hal) {
                    echo "<a href=\"?p=klien&hal=$i\">$i</a>"; // Link untuk halaman lain
                } else {
                    echo "<a class=\"active\">$i</a>"; // Link untuk halaman saat ini
                }
            }
            ?>
        </div>
    <?php
    }
    ?>
</div>