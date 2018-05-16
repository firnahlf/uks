<?php
include 'include/koneksi.php';

$id_user = $_GET['id_user'];
$query = mysqli_query($koneksi, "SELECT * FROM login WHERE id_user ='$id_user'");
$tampil = mysqli_fetch_array($query);
?>


<!-- menampilkan form edit -->

<div class="panel panel-primary">
    <div class="panel-heading">Edit Data</div>
    <div class="panel-body">
        <form class="form-horizontal" action="proses_edit_petugas.php" method="POST" enctype="multipart/form-data" name="form">

            <div class="form-group">
                <label for="id_user" class="col-sm-2 control-label">ID Pengguna</label>
                <div class="col-sm-10">
                    <input class="form-control" name="id_user" type="text" value="<?php echo $tampil['id_user'] ;?>" disabled>
                    <input class="form-control" name="id_user" type="hidden" value="<?php echo $tampil['id_user'] ;?>">
                </div>
            </div>

            <div class="form-group">
                <label for="username" class="col-sm-2 control-label">Nama Pengguna</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="username" value="<?php echo $tampil['username'] ;?>">
                </div>
            </div>

            <div class="form-group">
                <label for="level" class="col-sm-2 control-label">Tingkatan Pengguna</label>
                <div class="col-sm-10">
                    <select class="form-control" name="username">
                        <option value="1" <?php if($tampil['level'] == '1 - Administrator'){ echo "selected";} ?>>1 - Administrator</option>
                        <option value="2" <?php if($tampil['level'] == '2 - Petugas'){ echo "selected";} ?>>2 - Petugas</option>
                    </select>
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
