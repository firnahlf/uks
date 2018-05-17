<?php
include "include/koneksi.php";
$id_tindakan =$_GET['id_tindakan'];

$query ="SELECT * FROM data_tindakan where id_tindakan ='$id_tindakan'";
$hasil =mysqli_query($koneksi, $query);

if (mysqli_num_rows($hasil) > 0 )
{
    $data =mysqli_fetch_array($hasil);

    //delete data di database
    $query = mysqli_query($koneksi, "DELETE FROM data_tindakan where id_tindakan='$id_tindakan'");

    if ($query)
    {
        ?>
            <script language="javascript">
                alert("Data tindakan berhasil dihapus!");
                document.location.href="home.php?halaman=10";
            </script>
        <?php
    }

    else

    {
        ?>
            <script language="javascript">
                alert("Data tindakan gagal dihapus!");
                document.location.href="home.php?halaman=10";
            </script>
        <?php
    }
}
?>
