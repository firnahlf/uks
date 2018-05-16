<?php
include 'include/koneksi.php';

$pasien = mysqli_query($koneksi, "SELECT * FROM data_tindakan");
$baris_pasien = mysqli_fetch_assoc($pasien);
?>

<div class="jumbotron">
    <h2>Data Tindakan</h2>

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
                    <form class="form-horizontal" action="proses_simpan_tindakan.php" method="POST" enctype="multipart/form-data" name="form">

                        <div class="form-group">
                            <label for="nama_tindakan" class="col-sm-2 control-label">Nama</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="nama_tindakan" placeholder="Nama Tindakan">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="keterangan" class="col-sm-2 control-label">Keterangan</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="keterangan" placeholder="Keterangan">
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
                    <td>ID Tindakan</td>
                    <td>Nama Tindakan</td>
                    <td>Keterangan</td>
                </tbody>

                <?php
                include "include/koneksi.php";
                $baca = mysqli_query($koneksi, "SELECT * FROM data_tindakan");
                while( $tampil = mysqli_fetch_array($baca))
                {
                ?>

                <tbody>
                    <td><?php echo $tampil['id_tindakan'] ; ?></td>
                    <td><?php echo $tampil['nama_tindakan']; ?></td>
                    <td><?php echo $tampil['keterangan'] ;?></td>

                    <td>
                        <a href="home.php?halaman=11&&id_tindakan=<?php echo $tampil['id_tindakan']; ?>">
                            <span class="glyphicon glyphicon-pencil"></span>
                        </a>

                        |

                        <a href="home.php?halaman=12&&id_tindakan=<?php echo $tampil['id_tindakan']; ?>" onclick="return confirm('Apakah Anda yakin ?')">
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
    </div>
</div>
