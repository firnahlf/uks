<div class="jumbotron">
    <h2>Data Pasien</h2>

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
                    <form class="form-horizontal" action="proses_simpan_pasien.php" method="POST" enctype="multipart/form-data" name="form">
                        <div class="form-group">
                            <label for="nama_pasien" class="col-sm-2 control-label">Nama</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="nama_pasien" placeholder="Nama Pasien">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="tempat_lahir_pasien" class="col-sm-2 control-label">Tempat Lahir</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="tempat_lahir_pasien" placeholder="Tempat Lahir">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="tgl_lahir_pasien" class="col-sm-2 control-label">Tanggal Lahir</label>
                            <div class="col-sm-10">
                                <input type="date" class="form-control" name="tgl_lahir_pasien" required="required">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="alamat_pasien" class="col-sm-2 control-label">Alamat</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="alamat_pasien" placeholder="Alamat">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="agama_pasien" class="col-sm-2 control-label">Agama</label>
                            <div class="col-sm-10">
                                <select class="form-control" name="agama_pasien">
                                    <option value="">-- pilih agama --</option>
                                    <option value="Islam">Islam</option>
                                    <option value="Budha">Budha</option>
                                    <option value="Hindu">Hindu</option>
                                    <option value="Protestan">Protestan</option>
                                    <option value="Katolik">Katolik</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="jk_pasien" class="col-sm-2 control-label">Jenis Kelamin</label>
                            <div class="col-sm-10">
                                <select class="form-control" name="jk_pasien">
                                    <option value="">-- pilih jenis kelamin --</option>
                                    <option value="Pria">Pria</option>
                                    <option value="Wanita">Wanita</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="no_telp" class="col-sm-2 control-label">No Telp</label>
                            <div class="col-sm-10">
                                <input type="number" class="form-control" name="no_telp" placeholder="Nomor Telp">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="status_pasien" class="col-sm-2 control-label">Status</label>
                            <div class="col-sm-10">
                                <select class="form-control" name="status_pasien">
                                    <option value="">-- pilih status --</option>
                                    <option value="Peserta Didik">Peserta Didik</option>
                                    <option value="Guru">Guru</option>
                                    <option value="Karyawan">Karyawan</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="foto_pasien" class="col-sm-2 control-label">Pas Foto</label>
                            <div class="col-sm-10">
                                <input type="file" id="exampleInputFile" name="foto_pasien">
                                <p class="help-block">Unggah Foto Pasien</p>
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
                    <td>Nama Pasien</td>
                    <td>Jenis Kelamin</td>
                    <td>Alamat</td>
                    <td>No. Telepon</td>
                    <td>Status</td>
                    <td>Foto</td>
                </tbody>

                <?php
                include "include/koneksi.php";
                $baca = mysqli_query($koneksi, "SELECT * FROM data_pasien");
                while( $tampil = mysqli_fetch_array($baca))
                {
                ?>

                <tbody>
                    <td><?php echo $tampil['id_pasien'] ; ?></td>
                    <td><?php echo $tampil['nama_pasien']; ?></td>
                    <td><?php echo $tampil['jk_pasien'] ;?></td>
                    <td><?php echo $tampil['alamat_pasien'] ;?></td>
                    <td><?php echo $tampil['no_telp'] ;?></td>
                    <td><?php echo $tampil['status_pasien'] ;?></td>
                    <td><img src = "images/"<?php echo $tampil['foto_pasien'];?></td>

                    <td>
                        <a href="home.php?halaman=3&&id_pasien=<?php echo $tampil['id_pasien']; ?>">
                            <span class="glyphicon glyphicon-pencil"></span>
                        </a>

                        |

                        <a href="home.php?halaman=4&&id_pasien=<?php echo $tampil['id_pasien']; ?>" onclick="return confirm('Apakah Anda yakin ?')">
                            <span class="glyphicon glyphicon-remove"></span>
                        </a>

                        |

                        <a href="home.php?halaman=5&&id_pasien=<?php echo $tampil['id_pasien']; ?>">
                            <span class="glyphicon glyphicon-file"></span>
                        </a>
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
