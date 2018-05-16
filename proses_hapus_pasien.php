<?php
include "include/koneksi.php";
$id_pasien =$_GET['id_pasien'];

$query ="SELECT * FROM data_pasien where id_pasien ='$id_pasien'";
$hasil =mysql_query($query);

if (mysql_num_rows($hasil) > 0 )
{
    $data =mysql_fetch_array($hasil);
    
    //delete data di database
    $query = mysql_query("DELETE FROM data_pasien where id_pasien='$id_pasien'");
    
    if ($query)
    {
        ?>
            <script language="javascript">
                alert("Data Pasien berhasil dihapus!");
                document.location.href="home.php?halaman=2";
            </script>
        <?php
    }
    
    else
        
    {
        ?>
            <script language="javascript">
                alert("Data Pasien gagal dihapus!");
                document.location.href="home.php?halaman=2";
            </script>
        <?php
    }
} 
?>