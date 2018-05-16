<?php
include "include/koneksi.php";


//tampung data

$nama_pasien = $_POST['nama_pasien'];
$tempat_lahir_pasien = $_POST['tempat_lahir_pasien'];
$tgl_lahir_pasien = $_POST['tgl_lahir_pasien'];
$alamat_pasien = $_POST['alamat_pasien'];
$agama_pasien = $_POST['agama_pasien'];
$jk_pasien = $_POST['jk_pasien'];
$no_telp = $_POST['no_telp'];
$status_pasien = $_POST['status_pasien'];
$foto_pasien = $_FILES ['foto_pasien']['name'];
$tmp = $_FILES ['foto_pasien']['tmp_name'];

    $fotobaru = date('dmYHis').$foto_pasien;
    $path = "images/".$fotobaru;
    if(move_uploaded_file($tmp, $path)){

    $query = mysqli_query($koneksi, "INSERT INTO data_pasien (id_pasien, nama_pasien, tempat_lahir_pasien, tgl_lahir_pasien, alamat_pasien, agama_pasien, jk_pasien, no_telp, status_pasien, foto_pasien)
    VALUES('id_pasien','$nama_pasien','$tempat_lahir_pasien','$tgl_lahir_pasien','$alamat_pasien','$agama_pasien','$jk_pasien','$no_telp','$status_pasien', '$foto_pasien')");

    if($query)
    {
        ?>
            <script language="javascript">document.location.href="home.php?halaman=2"; alert("Data pasien baru berhasil disimpan!");
            </script>
        <?php
    }

    else

    {
        ?>
            <script language="javascript">document.location.href="home.php?halaman=2"; alert("Data pasien baru gagal disimpan!");
            </script>
        <?php
    }
}
?>
