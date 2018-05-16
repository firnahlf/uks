<div class="jumbotron">
    <h2>Data Petugas</h2>

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
                    <form class="form-horizontal" action="proses_simpan_petugas.php" method="POST" enctype="multipart/form-data" name="form">
                        <div class="form-group">
                            <label for="username" class="col-sm-2 control-label">Nama Pengguna</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="username" placeholder="Nama Pengguna">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="password" class="col-sm-2 control-label">Kata Sandi</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="password" placeholder="Kata Sandi">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="level" class="col-sm-2 control-label">Tingkatan Pengguna</label>
                            <div class="col-sm-10">
                                <select class="form-control" name="level">
                                <option value="">-- pilih tingkatan --</option>
                                <option value="1">1 - Pembina UKS</option>
                                <option value="2">2 - Petugas UKS</option>
                                </select>
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
                    <td>ID User</td>
                    <td>Nama Pengguna</td>
                    <td>Level</td>
                </tbody>

                <?php
                include "include/koneksi.php";
                $baca = mysqli_query($koneksi, "SELECT * FROM login");
                while( $tampil = mysqli_fetch_array($baca))
                {
                ?>

                <tbody>
                    <td><?php echo $tampil['id_user'] ; ?></td>
                    <td><?php echo $tampil['username']; ?></td>
                    <td><?php echo $tampil['level'] ;?></td>

                    <td>
                        <a href="home.php?halaman=16&&id_obat=<?php echo $tampil['id_user']; ?>">
                            <span class="glyphicon glyphicon-pencil"></span>
                        </a>

                        |

                        <a href="home.php?halaman=17&&id_obat=<?php echo $tampil['id_user']; ?>" onclick="return confirm('Apakah Anda yakin ?')">
                            <span class="glyphicon glyphicon-remove"></span>
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
