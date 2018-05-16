<?php
include 'include/koneksi.php';

$id_obat = $_GET['id_obat'];
$query = mysql_query("SELECT * FROM data_obat WHERE id_obat ='$id_obat'");
$tampil = mysql_fetch_array($query);
?>


<!-- menampilkan form edit -->

<div class="panel panel-primary">
    <div class="panel-heading">Edit Data</div>
    <div class="panel-body">
        <form class="form-horizontal" action="proses_edit_obat.php" method="POST" enctype="multipart/form-data" name="form">
            
            <div class="form-group">
                <label for="id_obat" class="col-sm-2 control-label">ID Obat</label>
                <div class="col-sm-10">
                    <input class="form-control" name="id_obat" type="text" value="<?php echo $tampil['id_obat'] ;?>" disabled>
                    <input class="form-control" name="id_obat" type="hidden" value="<?php echo $tampil['id_obat'] ;?>">
                </div>
            </div>
            
            <div class="form-group">
                <label for="nama_obat" class="col-sm-2 control-label">Nama Obat</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="nama_obat" value="<?php echo $tampil['nama_obat'] ;?>">
                </div>
            </div>

            <div class="form-group">
                <label for="jml_obat" class="col-sm-2 control-label">Jumlah Obat</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="jml_obat" value="<?php echo $tampil['jml_obat'];?>">
                </div>
            </div>

            <div class="form-group">
                <label for="satuan_obat" class="col-sm-2 control-label">Satuan Obat</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="satuan_obat" value="<?php echo $tampil['satuan_obat'] ;?>">
                </div>
            </div>

            <div class="form-group">
                <label for="detail_obat" class="col-sm-2 control-label">Detail Obat</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="detail_obat" value="<?php echo $tampil['detail_obat'] ;?>">
                </div>
            </div>                        
            </div>
    </div>
</div>

<div class="modal-footer">
    <button type="submit" class="btn btn-primary">Simpan</button>
    <?php echo "<input type=button class='btn btn-default' value=Tutup onclick=self.history.back()>"; ?>
</div>
</form>
</div>