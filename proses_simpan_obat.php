<?php
include "include/koneksi.php";


//tampung data

$nama_obat = $_POST['nama_obat'];
$jml_obat = $_POST['jml_obat'];
$satuan_obat = $_POST['satuan_obat'];


//periksa jika inputan masih kosong tampilkan pesan lengkapi data

if($nama_obat =="" or $jml_obat =="" or $satuan_obat =="")
{
    ?>
        <script language="javascript">document.location.href="home.php?halaman=6";
            alert("Masih ada form yang kosong!");
        </script>
    <?php

}

else

{
    $query = mysqli_query($koneksi, "INSERT INTO data_obat (id_obat, nama_obat, jml_obat, satuan_obat)

    VALUES(id_obat,'$nama_obat','$jml_obat','$satuan_obat')");

    if($query)
    {
        ?>
            <script language="javascript">
            alert("Data obat baru berhasil disimpan!");
            document.location.href="home.php?halaman=6";
            </script>
        <?php
    }

    else

    {
        ?>
            <script language="javascript">
            alert("Data obat baru gagal disimpan!");
            document.location.href="home.php?halaman=6";
            </script>
        <?php
    }
}
?>
