<?php
include "include/koneksi.php";

$id_pasien = $_GET['id_pasien'];

$query = mysqli_query($koneksi, "SELECT * FROM data_pasien WHERE id_pasien = '$id_pasien'");

$tampilkan = mysqli_fetch_array($query);

//tampung data ke dalam variabel

$nama_pasien = $tampilkan['nama_pasien'];
$tempat_lahir_pasien = $tampilkan['tempat_lahir_pasien'];
$tgl_lahir_pasien = $tampilkan['tgl_lahir_pasien'];
$alamat_pasien = $tampilkan['alamat_pasien'];
$agama_pasien = $tampilkan['agama_pasien'];
$jk_pasien = $tampilkan['jk_pasien'];
$no_telp = $tampilkan['no_telp'];
$status_pasien = $tampilkan['status_pasien'];

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

	  	<div class="col-md-4">
	  		<table border="0" height ="400">
	  			<tr>
	  				<td>Nama Lengkap</td>
	  				<td width="30">:</td>
	  				<td><?php echo $nama_pasien ; ?> </td>
	  			</tr>
	  			<tr>
	  				<td>Jenis Kelamin</td>
	  				<td>:</td>
	  				<td><?php echo $jk_pasien ; ?> </td>
	  			</tr>
	  			<tr>
	  				<td>Agama</td>
	  				<td>:</td>
	  				<td><?php echo $agama_pasien ; ?> </td>
	  			</tr>
	  			<tr>
	  				<td>Alamat</td>
	  				<td>:</td>
	  				<td><?php echo $alamat_pasien ; ?> </td>
	  			</tr>
	  			<tr>
	  				<td>Tempat Lahir</td>
	  				<td>:</td>
	  				<td><?php echo $tempat_lahir_pasien ; ?> </td>
	  			</tr>
                <tr>
	  				<td>Tanggal Lahir</td>
	  				<td>:</td>
	  				<td><?php echo $tgl_lahir_pasien ; ?> </td>
	  			</tr>
	  			<tr>
	  				<td>No. Telepon</td>
	  				<td>:</td>
	  				<td><?php echo $no_telp ; ?> </td>
	  			</tr>
                <tr>
	  				<td>Status</td>
	  				<td>:</td>
	  				<td><?php echo $status_pasien ; ?> </td>
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
