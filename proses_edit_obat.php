<?php
include "include/koneksi.php";


//tampung data

$nama_obat = $_POST['nama_obat'];
$jml_obat = $_POST['jml_obat'];
$satuan_obat = $_POST['satuan_obat'];

$query = mysqli_query($koneksi, "UPDATE data_obat SET
						nama_obat = '$nama_obat',
						jml_obat = '$jml_obat',
                        satuan_obat = '$satuan_obat'");

if($query)
   {
        ?>
            <script language="javascript">alert("Data Obat berhasil diperbarui!");
            document.location.href="home.php?halaman=6"; </script>
        <?php
   }

   else

   {
        ?>
            <script language="javascript">alert("Data Obat gagal diperbarui!");document.location.href="home.php?halaman=6"; 
            </script>
        <?php
   }
?>
