<?php
include "include/koneksi.php";


//tampung data

$nama_obat = $_POST['nama_obat'];
$jml_obat = $_POST['jml_obat'];
$satuan_obat = $_POST['satuan_obat'];

$query = mysql_query("UPDATE data_obat SET 
						nama_obat = '$nama_obat',
						jml_obat = '$jml_obat',
                        satuan_obat = '$satuan_obat'");
	
if($query)
   {
        ?>
            <script language="javascript">document.location.href="home.php?halaman=6"; alert("Data Obat berhasil diperbarui!");
            </script>
        <?php
   }
   
   else
   
   {
        ?>
            <script language="javascript">document.location.href="home.php?halaman=6"; alert("Data Obat gagal diperbarui!");
            </script>
        <?php
   }
?>