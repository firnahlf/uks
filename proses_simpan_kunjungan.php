<?php
include "include/koneksi.php";


//tampung data

$id_pasien = $_POST ['id_pasien'];
$tgl_kunjungan = $_POST['tgl_kunjungan'];
$status_pasien = $_POST['status_pasien'];
$jk_pasien = $_POST['jk_pasien'];
$keluhan = $_POST['keluhan'];
$tindakan = $_POST['tindakan'];


//periksa jika inputan masih kosong tampilkan pesan lengkapi data

if($id_pasien =="" or $tgl_kunjungan ==""){
    ?>
        <script language="javascript">
        alert("Masih ada form yang kosong!");
        document.location.href="home.php?halaman=18";

        </script>
    <?php

}

else

{
    $query = mysqli_query($koneksi, "INSERT INTO data_kunjungan (id_kunjungan, id_pasien, tgl_kunjungan, status_pasien, jk_pasien, keluhan, tindakan)
    VALUES('id_kunjungan','$id_pasien','$tgl_kunjungan','$status_pasien','$jk_pasien','$keluhan', '$tindakan')");

    if($query)
    {
        if ($tindakan != 0){
          $kurangi_obat = mysqli_query($koneksi, "SELECT * FROM data_obat WHERE id_obat=$tindakan");
          while ($get = mysqli_fetch_array($kurangi_obat)) {
            $jumlah = $get['jml_obat'] - 1;
          }
          $simpan_jumlah = mysqli_query($koneksi, "UPDATE data_obat SET jml_obat = $jumlah WHERE id_obat = $tindakan");
        }
        ?>
            <script language="javascript">alert("Data pasien baru berhasil disimpan!"); document.location.href="home.php?halaman=18";
            </script>
        <?php
    }

    else

    {
        ?>
            <script language="javascript">alert("Data pasien baru gagal disimpan!");document.location.href="home.php?halaman=18";
            </script>
        <?php
    }
}
?>
