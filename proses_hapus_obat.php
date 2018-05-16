<?php
include "include/koneksi.php";
$id_obat =$_GET['id_obat'];

$query ="SELECT * FROM data_obat where id_obat ='$id_obat'";
$hasil =mysql_query($query);

if (mysql_num_rows($hasil) > 0 )
{
    $data =mysql_fetch_array($hasil);
    
    //delete data di database
    $query = mysql_query("DELETE FROM data_obat where id_obat='$id_obat'");
    
    if ($query)
    {
        ?>
            <script language="javascript">
                alert("Data Obat berhasil dihapus!");
                document.location.href="home.php?halaman=6";
            </script>
        <?php
    }
    
    else
        
    {
        ?>
            <script language="javascript">
                alert("Data Obat gagal dihapus!");
                document.location.href="home.php?halaman=6";
            </script>
        <?php
    }
} 
?>