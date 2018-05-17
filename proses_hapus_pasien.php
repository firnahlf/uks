<?php
include "include/koneksi.php";
$id_pasien =$_GET['id_pasien'];

$query ="SELECT * FROM data_pasien where id_pasien ='$id_pasien'";
$hasil =mysqli_query($koneksi, $query);

if (mysqli_num_rows($hasil) > 0 )
{
    $data =mysqli_fetch_array($hasil);

    //delete data di database
    $query = mysqli_query($koneksi, "DELETE FROM data_pasien where id_pasien='$id_pasien'");

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
