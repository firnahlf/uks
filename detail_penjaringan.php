<?php
include "include/koneksi.php";

$id_pasien = $_GET['id_pasien'];

$query = mysqli_query($koneksi, "SELECT * FROM data_penjaringan WHERE id_pasien = '$id_pasien'");

$tampilkan = mysqli_fetch_array($query);

//tampung data ke dalam variabel

$nama_pasien =  $tampilkan['nama_pasien'];
$berat_badan = $tampilkan['berat_badan'];
$tinggi_badan = $tampilkan['tinggi_badan'];
$td_sistole = $tampilkan['td_sistole'];
$td_diastole = $tampilkan['td_diastole'];
$gol_darah = $tampilkan['gol_darah'];
$hb_darah = $tampilkan['hb_darah'];
$visus = $tampilkan['visus'];
$lila = $tampilkan ['lila'];
$haid_pertama = $tampilkan ['haid_pertama'];
$kesehatan_gigi = $tampilkan['kesehatan_gigi'];
$status_gizi = $tampilkan['status_gizi'];
$kesehatan_umum = $tampilkan['kesehatan_umum'];

?>
<div class="panel panel-primary">
  <div class="panel-heading">Biodata <b><?php echo $nama_pasien ; ?></b></div>

    <div class="panel-body">

	<div class="row">
        <div class="col-md-4">
			<?php
                /*
                if(empty($tampil['foto']))
                {
                    echo "<img src='img/nopic.gif' width='300' height='600' class ='img-thumbnail'>";
                }

                else

                {
                    echo "<img src='img/$tampil[foto]' alt='$tampil[nm_pasien]' class='img-thumbnail' width ='300' height ='600'>";
                }
                */
            ?>
	  	</div>

	  	
