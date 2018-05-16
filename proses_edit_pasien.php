<?php
include "include/koneksi.php";


//tampung data

$id_pasien = $_POST['id_pasien'];
$nama_pasien = $_POST['nama_pasien'];
$tempat_lahir_pasien = $_POST['tempat_lahir_pasien'];
$tgl_lahir_pasien = $_POST['tgl_lahir_pasien'];
$alamat_pasien = $_POST['alamat_pasien'];
$agama_pasien = $_POST['agama_pasien'];
$jk_pasien = $_POST['jk_pasien'];
$no_telp = $_POST['no_telp'];
$status_pasien = $_POST['status_pasien'];

$query = mysqli_query($koneksi, "UPDATE data_pasien SET
						nama_pasien = '$nama_pasien',
						tempat_lahir_pasien = '$tempat_lahir_pasien',
                        tgl_lahir_pasien = '$tgl_lahir_pasien',
                        alamat_pasien = '$alamat_pasien',
						agama_pasien = '$agama_pasien',
						jk_pasien = '$jk_pasien',
						no_telp = '$no_telp',
                        status_pasien = '$status_pasien'
						WHERE id_pasien = '$id_pasien'");

if($query)
   {
        ?>
            <script language="javascript">document.location.href="home.php?halaman=2"; alert("Data Pasien berhasil diperbarui!");
            </script>
        <?php
   }

   else

   {
        ?>
            <script language="javascript">document.location.href="home.php?halaman=2"; alert("Data Pasien gagal diperbarui!");
            </script>
        <?php
   }
?>
