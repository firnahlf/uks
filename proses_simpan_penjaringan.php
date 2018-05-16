<?php
include "include/koneksi.php";


//tampung data
$id_pasien = $_POST ['id_pasien'];
$berat_badan = $_POST['berat_badan'];
$tinggi_badan = $_POST['tinggi_badan'];
$td_sistole = $_POST ['td_sistole'];
$td_diastole = $_POST['td_diastole'];
$gol_darah = $_POST['gol_darah'];
$hb_darah = $_POST['hb_darah'];
$visus = $_POST['visus'];
$lila = $_POST ['lila'];
$haid_pertama = $_POST ['haid_pertama'];
$kesehatan_gigi = $_POST['kesehatan_gigi'];
$status_gizi = $_POST['status_gizi'];
$kesehatan_umum = $_POST['kesehatan_umum'];
//periksa jika inputan masih kosong tampilkan pesan lengkapi data

if($gol_darah =="" or $berat_badan =="" or $tinggi_badan =="")
{
    ?>
        <script language="javascript">document.location.href="home.php?halaman=14";
            alert("Masih ada form yang kosong!");
        </script>
    <?php

}

else

{
    $query = mysqli_query($koneksi, "INSERT INTO data_penjaringan (id_pasien, id_penjaringan, berat_badan, tinggi_badan, td_sistole, td_diastole, gol_darah, hb_darah, visus, lila, haid_pertama, kesehatan_gigi, status_gizi, kesehatan_umum)
    VALUES ('$id_pasien', 'id_penjaringan', '$berat_badan', '$tinggi_badan', '$td_sistole', '$td_diastole', '$gol_darah', '$hb_darah', '$visus', '$lila', '$haid_pertama', '$kesehatan_gigi', '$status_gizi', '$kesehatan_umum')");


    if($query)
    {
        ?>
            <script language="javascript">document.location.href="home.php?halaman=14"; alert("Data Penjaringan berhasil disimpan!");
            </script>
        <?php
    }
}
?>
