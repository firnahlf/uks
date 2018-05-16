<?php
include 'include/koneksi.php';

$id_pasien = $_GET['id_pasien'];
$query = mysqli_query($koneksi, "SELECT * FROM data_pasien WHERE id_pasien ='$id_pasien'");
$tampil = mysqli_fetch_array($query);
?>


<!-- menampilkan form edit -->

<div class="panel panel-primary">
    <div class="panel-heading">Edit Data</div>
    <div class="panel-body">
        <form class="form-horizontal" action="proses_edit_pasien.php" method="POST" enctype="multipart/form-data" name="form">

            <div class="form-group">
                <label for="id_pasien" class="col-sm-2 control-label">ID Pasien</label>
                <div class="col-sm-10">
                    <input class="form-control" name="id_pasien" type="text" value="<?php echo $tampil['id_pasien'] ;?>" disabled>
                    <input class="form-control" name="id_pasien" type="hidden" value="<?php echo $tampil['id_pasien'] ;?>">
                </div>
            </div>

            <div class="form-group">
                <label for="nama_pasien" class="col-sm-2 control-label">Nama</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="nama_pasien" value="<?php echo $tampil['nama_pasien'] ;?>">
                </div>
            </div>

            <div class="form-group">
                <label for="tempat_lahir_pasien" class="col-sm-2 control-label">Tempat Lahir</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="tempat_lahir_pasien" value="<?php echo $tampil['tempat_lahir_pasien'] ;?>">
                </div>
            </div>

            <div class="form-group">
                <label for="tgl_lahir_pasien" class="col-sm-2 control-label">Tanggal Lahir</label>
                <div class="col-sm-10">
                    <input type="date" class="form-control" name="tgl_lahir_pasien" value="<?php echo $tampil['tgl_lahir_pasien']; ?>">
                </div>
            </div>

            <div class="form-group">
                <label for="alamat_pasien_pasien" class="col-sm-2 control-label">Alamat</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="alamat_pasien" value="<?php echo $tampil['alamat_pasien'];?>">
                </div>
            </div>

            <div class="form-group">
                <label for="agama_pasien_pasien" class="col-sm-2 control-label">Agama</label>
                <div class="col-sm-10">
                    <select class="form-control" name="agama_pasien">
                        <option value="Islam" <?php if($tampil['agama_pasien'] == 'Islam'){ echo "selected";} ?>>Islam</option>
                        <option value="Budha" <?php if($tampil['agama_pasien'] == 'Budha'){ echo "selected";} ?>>Budha</option>
                        <option value="Hindu" <?php if($tampil['agama_pasien'] == 'Hindu'){ echo "selected";} ?>>Hindu</option>
                        <option value="Kristen" <?php if($tampil['agama_pasien'] == 'Kristen'){echo "selected";} ?>>Kristen</option>
                    </select>
                </div>
            </div>

            <div class="form-group">
                <label for="jk_pasien" class="col-sm-2 control-label">Jenis Kelamin</label>
                <div class="col-sm-10">
                    <select class="form-control" name="jk_pasien">
                        <option value="Pria" <?php if($tampil['jk_pasien']=='Pria'){echo"selected";} ?>>Pria</option>
                        <option value='Wanita' <?php if($tampil['jk_pasien']=='Wanita'){echo"selected";} ?>>Wanita</option>
                    </select>
                </div>
            </div>

            <div class="form-group">
                <label for="no_telp" class="col-sm-2 control-label">No Telp</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="no_telp" value="<?php echo $tampil['no_telp'];?>">
                </div>
            </div>

            <div class="form-group">
                <label for="status_pasien" class="col-sm-2 control-label">Status</label>
                <div class="col-sm-10">
                    <select class="form-control" name="status_pasien">
                        <option value="Peserta Didik" <?php if($tampil['status_pasien']=='Peserta Didik'){echo"selected";} ?>>Peserta Didik</option>
                        <option value='Guru' <?php if($tampil['status_pasien']=='Guru'){echo"selected";} ?>>Guru</option>
                        <option value='Karyawan' <?php if($tampil['status_pasien']=='Karyawan'){echo"selected";} ?>>Karyawan</option>
                    </select>
                </div>
            </div>

            <div class="form-group">
                <label for="foto_pasien" class="col-sm-2 control-label">Pas Foto</label>
                <div class="col-sm-10">
                    <input type="file" id="exampleInputFile" name="foto_pasien">
                    <p class="help-block">Kosongkan tidak ada perubahan</p>

                    <?php

                    if(empty($tampil['foto_pasien']))
                    {
                        echo "<img src='img/nopic.gif' width='200' height='200' class ='img-thumbnail'>";
                    }

                    else
                    {
                        echo "<img src='img/$tampil[foto_pasien]' alt='$tampil[nama_pasien]' class='img-thumbnail' width ='200' height ='400'>";
                    }

                    ?>
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
