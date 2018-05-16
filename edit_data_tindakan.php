<?php
include 'include/koneksi.php';

$id_tindakan = $_GET['id_tindakan'];
$query = mysql_query("SELECT * FROM data_tindakan WHERE id_tindakan ='$id_tindakan'");
$tampil = mysql_fetch_array($query);
?>


<!-- menampilkan form edit -->

<div class="panel panel-primary">
    <div class="panel-heading">Edit Data</div>
    <div class="panel-body">
        <form class="form-horizontal" action="proses_edit_tindakan.php" method="POST" enctype="multipart/form-data" name="form">
            
            <div class="form-group">
                <label for="id_tindakan" class="col-sm-2 control-label">ID Tindakan</label>
                <div class="col-sm-10">
                    <input class="form-control" name="id_tindakan" type="text" value="<?php echo $tampil['id_tindakan'] ;?>" disabled>
                    <input class="form-control" name="id_tindakan" type="hidden" value="<?php echo $tampil['id_tindakan'] ;?>">
                </div>
            </div>
            
            <div class="form-group">
                <label for="nama_tindakan" class="col-sm-2 control-label">Nama Tindakan</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="nama_tindakan" value="<?php echo $tampil['nama_tindakan'] ;?>">
                </div>
            </div>

            <div class="form-group">
                <label for="keterangan" class="col-sm-2 control-label">Keterangan</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="keterangan" value="<?php echo $tampil['keterangan'];?>">
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