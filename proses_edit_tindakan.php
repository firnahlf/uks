<?php
include "include/koneksi.php";


//tampung data

$nama_tindakan = $_POST['nama_tindakan'];
$keterangan = $_POST['keterangan'];

$query = mysql_query("UPDATE data_tindakan SET 
						nama_tindakan = '$nama_tindakan',
						keterangan = '$keterangan'");
	
if($query)
   {
        ?>
            <script language="javascript">document.location.href="home.php?halaman=10"; alert("Data tindakan berhasil diperbarui!");
            </script>
        <?php
   }
   
   else
   
   {
        ?>
            <script language="javascript">document.location.href="home.php?halaman=10"; alert("Data tindakan gagal diperbarui!");
            </script>
        <?php
   }
?>