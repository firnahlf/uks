<?php
include "include/koneksi.php";

$id_pasien = $_GET['id_pasien'];

$query = mysqli_query($koneksi, "SELECT * FROM data_kunjungan WHERE id_pasien = '$id_pasien'");

$tampilkan = mysqli_fetch_array($query);

//tampung data ke dalam variabel

$id_kunjungan = $tampilkan['id_kunjungan']
$id_pasien = $tampilkan['id_pasien']
$tgl_kunjungan = $tampilkan['tgl_kunjungan'];
$status_pasien = $tampilkan['status_pasien'];
$jk_pasien = $tampilkan['jk_pasien'];
$keluhan = $tampilkan['keluhan'];
$tindakan = $tampilkan['tindakan'];

?>
<div class="panel panel-primary">
  <div class="panel-heading">Data Kunjungan <b><?php echo $nama_pasien ; ?></b></div>

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

	  	<div class="col-md-4">
	  		<table border="0" height ="400">
	  			<tr>
	  				<td>Nama Lengkap</td>
	  				<td width="30">:</td>
	  				<td><?php echo $nama_pasien ; ?> </td>
	  			</tr>
	  			<tr>
	  				<td>Tanggal Kunjungan</td>
	  				<td>:</td>
	  				<td><?php echo $tgl_kunjungan ; ?> </td>
	  			</tr>


	  			<tr>
	  				<td>Status Pasien</td>
	  				<td>:</td>
	  				<td><?php echo $status_pasien ; ?> </td>
	  			</tr>
	  			<tr>
	  				<td>Jenis Kelamin</td>
	  				<td>:</td>
	  				<td><?php echo $jk_pasien ; ?> </td>
	  			</tr>
	  			<tr>
	  				<td>Keluhan Pasien</td>
	  				<td>:</td>
	  				<td><?php echo $keluhan_pasien ; ?> </td>
	  			</tr>

	  		</table>
	  	</div>

	</div>

  </div>
</div>
<div class="modal-footer">
    <button type="submit" class="btn btn-primary">Cetak</button>
    <?php echo "<input type=button class='btn btn-default' value=Kembali onclick=self.history.back()>"; ?>
</div>
