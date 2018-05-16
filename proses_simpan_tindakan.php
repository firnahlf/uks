<?php
include "include/koneksi.php";


//tampung data

$nama_tindakan = $_POST['nama_tindakan'];
$keterangan = $_POST['keterangan'];


//periksa jika inputan masih kosong tampilkan pesan lengkapi data

if($nama_tindakan =="" or $keterangan =="")
{
    ?>
        <script language="javascript">document.location.href="home.php?halaman=10";
            alert("Masih ada form yang kosong!");
        </script>
    <?php

}

else

{
    $query = mysqli_query($koneksi, "INSERT INTO data_tindakan (id_tindakan, nama_tindakan, keterangan)
    VALUES(id_tindakan,'$nama_tindakan','$keterangan')");

    if($query)
    {
        ?>
            <script language="javascript">document.location.href="home.php?halaman=10"; alert("Data tindakan baru berhasil disimpan!");
            </script>
        <?php
    }

    else

    {
        ?>
            <script language="javascript">document.location.href="home.php?halaman=10"; alert("Data tindakan baru gagal disimpan!");
            </script>
        <?php
    }
}
?>
