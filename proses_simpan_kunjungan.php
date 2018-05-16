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
        <script language="javascript">document.location.href="home.php?halaman=18";
            alert("Masih ada form yang kosong!");
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
            <script language="javascript">document.location.href="home.php?halaman=18"; alert("Data pasien baru berhasil disimpan!");
            </script>
        <?php
    }

    else

    {
        ?>
            <script language="javascript">document.location.href="home.php?halaman=18"; alert("Data pasien baru gagal disimpan!");
            </script>
        <?php
    }
}
?>
