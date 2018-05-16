<?php
include "include/koneksi.php";

$id_obat = $_GET['id_obat'];

$query = mysql_query("SELECT * FROM data_obat WHERE id_obat = '$id_obat'");

$tampilkan = mysql_fetch_array($query);

//tampung data ke dalam variabel

$nama_obat = $tampilkan['nama_obat'];
$jml_obat = $tampilkan['jml_obat'];
$satuan_obat = $tampilkan['satuan_obat'];
$detail_obat = $tampilkan['detail_obat'];


?>
<div class="panel panel-primary">
  <div class="panel-heading">Detail Obat <b><?php echo $nama_obat ; ?></b></div>

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
	  				<td>Nama Obat</td>
	  				<td width="30">:</td>
	  				<td><?php echo $nama_obat ; ?> </td>
	  			</tr>
	  			<tr>
	  				<td>Jumlah Obat</td>
	  				<td>:</td>
	  				<td><?php echo $jml_obat ; ?> </td>
	  			</tr>
	  			<tr>
	  				<td>Satuan</td>
	  				<td>:</td>
	  				<td><?php echo $satuan_obat ; ?> </td>
	  			</tr>
	  			<tr>
	  				<td>Detail Obat</td>
	  				<td>:</td>
	  				<td><?php echo $detail_obat ; ?> </td>
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