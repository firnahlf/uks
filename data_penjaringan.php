<div class="jumbotron">
    <h2>Data Penjaringan</h2>

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
                    <form class="form-horizontal" action="proses_simpan_penjaringan.php" method="POST" enctype="multipart/form-data" name="form">

                          <div class="form-group">
                              <label for="id_pasien" class="col-sm-2 control-label">Nama Pasien</label>
                              <div class="col-sm-10">
                             <select name="id_pasien" id="id_pasien" onchange="changeValue(this.value)" >
                                <option value=0></option>
                                  <?php
                                  include "include/koneksi.php";
                                  $result = mysqli_query($koneksi, "SELECT * FROM data_pasien");

                                  while ($row = mysqli_fetch_array($result)) {
                                    echo '<option value="' . $row['id_pasien'] . '">' . $row['nama_pasien'] . '</option>';

                                    }
                                    ?>
                                  </select>
                                </div>
                              </div>

                            <div class="form-group">
                            <label for="berat_badan" class="col-sm-2 control-label">Berat Badan</label>
                            <div class="col-sm-10">
                                <input type="number" class="form-control" name="berat_badan" placeholder="Berat Badan">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="tinggi_badan" class="col-sm-2 control-label">Tinggi Badan</label>
                            <div class="col-sm-10">
                                <input type="number" class="form-control" name="tinggi_badan" placeholder="Tinggi Badan">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="td_sistole" class="col-sm-2 control-label">Tekanan Darah Sistole</label>
                            <div class="col-sm-10">
                                <input type="number" class="form-control" name="td_sistole" placeholder="Tekanan Darah Sistole">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="td_diastole" class="col-sm-2 control-label">Tekanan Darah Diastole</label>
                            <div class="col-sm-10">
                                <input type="number" class="form-control" name="td_diastole" placeholder="Tekanan Darah Diastole">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="gol_darah" class="col-sm-2 control-label">Golongan Darah</label>
                            <div class="col-sm-10">
                                <select class="form-control" name="gol_darah">
                                    <option value="">-- pilih golongan darah --</option>
                                    <option value="A">A</option>
                                    <option value="B">B</option>
                                    <option value="AB">AB</option>
                                    <option value="O">O</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="hb_darah" class="col-sm-2 control-label">Kadar Haemoglobin</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="hb_darah" placeholder="Kadar Haemoglobin">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="visus" class="col-sm-2 control-label">Visus</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="visus" placeholder="Visus">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="lila" class="col-sm-2 control-label">Lingkar Lengan Atas</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="lila" placeholder="Lingkar Lengan Atas">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="haid_pertama" class="col-sm-2 control-label">Haid Pertama</label>
                            <div class="col-sm-10">
                                <input type="date" class="form-control" name="haid_pertama" placeholder="Haid Pertama">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="kesehatan_gigi" class="col-sm-2 control-label">Kesehatan Gigi</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="kesehatan_gigi" placeholder="Kesehatan Gigi">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="status_gizi" class="col-sm-2 control-label">Status Gizi</label>
                            <div class="col-sm-10">
                                <select class="form-control" name="status_gizi">
                                    <option value="">-- pilih status gizi --</option>
                                    <option value="Kurus Sekali">Kurus Sekali</option>
                                    <option value="Kurus">Kurus</option>
                                    <option value="Normal">Normal</option>
                                    <option value="Gemuk">Gemuk</option>
                                    <option value="Obesitas">Obesitas</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="kesehatan_umum" class="col-sm-2 control-label">Kesehatan Umum</label>
                            <div class="col-sm-10">
                                <select class="form-control" name="kesehatan_umum">
                                    <option value="">-- pilih kesehatan umum --</option>
                                    <option value="Normal">Normal</option>
                                    <option value="Gangguan">Gangguan</option>
                                </select>
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
                    <td>ID Pasien</td>
                    <td>ID Penjaringan </td>
                    <td>Nama Pasien </td>
                    <td>BB</td>
                    <td>TB</td>
                    <td>Sistole</td>
                    <td>Diastole</td>
                    <td>Gol. Darah</td>
                    <td>Hb</td>
                    <td>Visus</td>
                    <td>LILA</td>
                    <td>Haid Pertama</td>
                    <td>Kesehatan Gigi</td>
                    <td>Status Gizi</td>
                    <td>Kesehatan Umum</td>

                </tbody>

                <?php
                include "include/koneksi.php";
                $baca = mysqli_query($koneksi, "SELECT data_penjaringan.*
                                                , data_pasien.*
                                                , data_pasien.nama_pasien AS penj_namapasien
                                                FROM data_penjaringan
                                                JOIN data_pasien ON data_pasien.id_pasien=data_penjaringan.id_pasien");
                while( $tampil = mysqli_fetch_array($baca))
                {
                ?>

                <tbody>
                    <td><?php echo $tampil['id_pasien'] ; ?></td>
                    <td><?php echo $tampil['id_penjaringan']; ?></td>
                    <td><?php echo $tampil['penj_namapasien']; ?></td>
                    <td><?php echo $tampil['berat_badan'] ;?></td>
                    <td><?php echo $tampil['tinggi_badan']; ?></td>
                    <td><?php echo $tampil['td_sistole']; ?></td>
                    <td><?php echo $tampil['td_diastole']; ?></td>
                    <td><?php echo $tampil['gol_darah']; ?></td>
                    <td><?php echo $tampil['hb_darah']; ?></td>
                    <td><?php echo $tampil['visus']; ?></td>
                    <td><?php echo $tampil['lila']; ?></td>
                    <td><?php echo $tampil['haid_pertama']; ?></td>
                    <td><?php echo $tampil['kesehatan_gigi']; ?></td>
                    <td><?php echo $tampil['kesehatan_umum']; ?></td>


                </tbody>
                <?php
                }
                ?>
            </table>

        </div>
    </div>
</div>
