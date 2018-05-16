<div class="jumbotron">
    <h2>Data Kunjungan</h2>

    <!-- Button trigger modal -->
    <button type="button" class="btn btn-success btn-lg" data-toggle="modal" data-target="#myModal"> Input Data Baru</button>

    <!-- Modal -->
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel" >Data Baru</h4>
                </div>

                <div class="modal-body">

                    <!-- menampilkan form input -->
                    <form class="form-horizontal" action="proses_simpan_kunjungan.php" method="POST" enctype="multipart/form-data" name="form">

                      <div class="form-group">
                          <label for="id_pasien" class="col-sm-2 control-label">Id Pasien</label>
                          <div class="col-sm-10">
                         <select name="id_pasien" id="id_pasien" onchange="changeValue(this.value)" >
                            <option value=0>-Pilih-</option>
                              <?php
                              $result = mysqli_query($koneksi, "SELECT * FROM data_pasien");
                              while ($row = mysqli_fetch_array($result)) {
                                echo '<option value="' . $row['id_pasien'] . '">' . $row['id_pasien'] . '</option>';

                              }
                                ?>
                              </select>
                            </div>
                          </div>

                        <div class="form-group">
                            <label for="nama_pasien" class="col-sm-2 control-label">Nama Pasien</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="nama_pasien" placeholder="Nama Pasien">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="tgl_kunjungan" class="col-sm-2 control-label">Tanggal Kunjungan</label>
                            <div class="col-sm-10">
                                <input type="date" class="form-control" name="tgl_kunjungan" placeholder="Tanggal Kunjungan">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="status_pasien" class="col-sm-2 control-label">Status</label>
                            <div class="col-sm-10">
                                <select class="form-control" name="Status Pasien">
                                    <option value="">-- pilih status --</option>
                                    <option value="Peserta Didik">Peserta Didik</option>
                                    <option value="Guru">Guru</option>
                                    <option value="Karyawan">Karyawan</option>
                                </select>
                            </div>
                        </div>


                        <div class="form-group">
                            <label for="jk_pasien" class="col-sm-2 control-label">Jenis Kelamin</label>
                            <div class="col-sm-10">
                                <select class="form-control" name="Jenis Kelamin">
                                    <option value="">-- pilih jenis kelamin --</option>
                                    <option value="Pria">Pria</option>
                                    <option value="Wanita">Wanita</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                              <label for="keluhan" class="col-sm-2 control-label">Keluhan</label>
                              <div class="col-sm-10">
                                  <input type="text" class="form-control" name="Keluhan Pasien" placeholder="Keluhan pasien">
                          </div>
                      </div>

                      <div class="form-group">
                            <label for="tindakan" class="col-sm-2 control-label">Tindakan</label>
                            <div class="col-sm-10">
                              <select name="nama_tindakan" id="id_tindakan" onchange="changeValue(this.value)" >
                                 <option value=0>-Pilih-</option>
                                   <?php
                                   $result = mysqli_query($koneksi, "SELECT * FROM data_tindakan");
                                   while ($row = mysqli_fetch_array($result)) {
                                     echo '<option value="' . $row['nama_tindakan'] . '">' . $row['nama_tindakan'] . '</option>';

                                   }
                                     ?>
                                     </select>

                                      <button class="add_field_button">Pilih Tindakan Lain</button>

                                      

                              </div>
                        </div>
                    </div>


                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary">Simpan</button>
                        <button type="submit" class="btn btn-default" data-dismiss="modal">Tutup</button>
                    </div>
                    </form>
            </div>
        </div>
    </div>
</div>
<!-- end of div jumbotron -->

<div role="tabpanel">

    <!-- Nav tabs -->
    <ul class="nav nav-tabs" role="tablist">
        <li role="presentation"><a href="#data" aria-controls="data" role="tab" data-toggle="tab">Lihat Data</a></li>
    </ul>

    <!-- Tab panes -->
    <div class="tab-content">

        <!-- tab menampilkan isi tabel -->
        <div role="tabpanel" class="tab-pane" id="data">

            <!-- data -->
            <table class="table table-hover">
                <tbody>
                    <td>ID Kunjungan</td>
                    <td>ID Pasien</td>
                    <td>ID Rekam Medis</td>
                    <td>Nama Pasien</td>
                    <td>Tanggal Kunjungan</td>
                    <td>Status</td>
                    <td>Jenis Kelamin</td>
                    <td>Keluhan</td>
                    <td>Tindakan</td>
                </tbody>

                <?php
                include "include/koneksi.php";
                $baca = mysqli_query($koneksi, "SELECT * FROM data_kunjungan");
                while( $tampil = mysqli_fetch_array($baca))
                {
                ?>

                <tbody>
                    <td><?php echo $tampil['id_kunjungan'] ; ?></td>
                    <td><?php echo $tampil['id_pasien'] ; ?></td>
                    <td><?php echo $tampil['id_rm'] ; ?></td>
                    <td><?php echo $tampil['nama_pasien']; ?></td>
                    <td><?php echo $tampil['tgl_kunjungan'] ;?></td>
                    <td><?php echo $tampil['status_pasien'] ;?></td>
                    <td><?php echo $tampil['jk_pasien'] ;?></td>
                    <td><?php echo $tampil['keluhan_pasien'] ;?></td>
                    <td><?php echo $tampil['tindakan'] ;?></td>


                    </td>
                </tbody>
                <?php
                }
                ?>
            </table>
            <!-- end -->
        </div>
    </div>
</div>
