<?php
include "include/koneksi.php";


//tampung data
$id_pasien = $_POST ['id_pasien'];
$id_rm = $_POST ['id_rm'];
$tgl_kunjungan = $_POST['tgl_kunjungan'];
$nama_pasien = $_POST['nama_pasien'];
$status_pasien = $_POST['status_pasien'];
$jk_pasien = $_POST['jk_pasien'];
$keluhan = $_POST['keluhan'];
$tindakan = $_POST['tindakan'];


//periksa jika inputan masih kosong tampilkan pesan lengkapi data

if($nama_pasien =="" or $tgl_kunjungan ==""){
    ?>
        <script language="javascript">
            alert("Masih ada form yang kosong!");
            document.location.href="home.php?halaman=18";
        </script>
    <?php

}

else

{
    $query = mysqli_query($koneksi, "INSERT INTO data_kunjungan (id_kunjungan, id_pasien, id_rm, tgl_kunjungan, nama_pasien, status_pasien, jk_pasien, keluhan, tindakan)
    VALUES('id_kunjungan','id_pasien','$id_rm','$tgl_kunjungan','$nama_pasien','$status_pasien','$jk_pasien','$keluhan', 'tindakan')");

    if($query)
    {
        ?>
            <script language="javascript">
              alert("Data pasien baru berhasil disimpan!");
              document.location.href="home.php?halaman=18";
            </script>
        <?php
    }

    else

    {
        ?>
            <script language="javascript">
              alert("Data pasien baru gagal disimpan!");
              document.location.href="home.php?halaman=18";
            </script>
        <?php
    }
}
?>
