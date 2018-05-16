<div class="jumbotron">
    <h2>Data Obat</h2>

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
                    <form class="form-horizontal" action="proses_simpan_obat.php" method="POST" enctype="multipart/form-data" name="form">
                        <div class="form-group">
                            <label for="nama_obat" class="col-sm-2 control-label">Nama</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="nama_obat" placeholder="Nama Obat">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="jml_obat" class="col-sm-2 control-label">Jumlah Obat</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="jml_obat" placeholder="Jumlah Obat">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="satuan_obat" class="col-sm-2 control-label">Satuan Obat</label>
                            <div class="col-sm-10">
                                <select class="form-control" name="satuan_obat">
                                <option value="">-- pilih satuan --</option>
                                <option value="Botol">Botol</option>
                                <option value="Box">Box</option>
                                <option value="Strip">Strip</option>
                                <option value="Butir">Butir</option>
                                <option value="Sachet">Sachet</option>
                                <option value="Pcs">Pcs</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="detail_obat" class="col-sm-2 control-label">Detail Obat</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="detail_obat" placeholder="Detail Obat">
                            </div>
                        </div>
                        </div>

                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary">Simpan</button>
                        <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
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
                    <td>ID Obat</td>
                    <td>Nama Obat</td>
                    <td>Jumlah Obat</td>
                    <td>Satuan Obat</td>
                </tbody>

                <?php
                include "include/koneksi.php";
                $baca = mysqli_query($koneksi, "SELECT * FROM data_obat");
                while( $tampil = mysqli_fetch_array($baca))
                {
                ?>

                <tbody>
                    <td><?php echo $tampil['id_obat'] ; ?></td>
                    <td><?php echo $tampil['nama_obat']; ?></td>
                    <td><?php echo $tampil['jml_obat'] ;?></td>
                    <td><?php echo $tampil['satuan_obat'] ;?></td>

                    <td>
                        <a href="home.php?halaman=7&&id_obat=<?php echo $tampil['id_obat']; ?>">
                            <span class="glyphicon glyphicon-pencil"></span>
                        </a>

                        |

                        <a href="home.php?halaman=8&&id_obat=<?php echo $tampil['id_obat']; ?>" onclick="return confirm('Apakah Anda yakin ?')">
                            <span class="glyphicon glyphicon-remove"></span>
                        </a>

                        |

                        <a href="home.php?halaman=9&&id_obat=<?php echo $tampil['id_obat']; ?>">
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

        <div role="tabpanel" class="tab-pane" id="keterangan">Keterangan</div>
    </div>
</div>
