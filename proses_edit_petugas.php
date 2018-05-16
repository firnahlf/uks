<?php
include "include/koneksi.php";


//tampung data

$username = $_POST['username'];
$password = $_POST['password'];
$level = $_POST['level'];

$query = mysqli_query($koneksi, "UPDATE login SET
						username = '$username',
						password = '$password',
                        level = '$level'");

if($query)
   {
        ?>
            <script language="javascript">document.location.href="home.php?halaman=15"; alert("Data Petugas berhasil diperbarui!");
            </script>
        <?php
   }

   else

   {
        ?>
            <script language="javascript">document.location.href="home.php?halaman=16"; alert("Data Petugas gagal diperbarui!");
            </script>
        <?php
   }
?>
