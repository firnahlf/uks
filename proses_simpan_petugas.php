<?php
include "include/koneksi.php";


//tampung data

$username = $_POST['username'];
$password = $_POST['password'];
$level = $_POST['level'];

if($username =="" or $password =="")
{
  ?>
  <script language="javascript">
      alert("Masih ada form yang kosong!");
      document.location.href="home.php?halaman=15";
  </script>
<?php

}

else {
  $query = mysqli_query($koneksi, "INSERT INTO login (id_user, username, password, level) VALUES ('id_user', '$username', '$password', '$level')");

  if($query)
  {
      ?>
          <script language="javascript">
            alert("Data petugas baru berhasil disimpan!");
            document.location.href="home.php?halaman=15";
          </script>
      <?php
  }

  else

  {
      ?>
          <script language="javascript">
            alert("Data petugas baru gagal disimpan!");
            document.location.href="home.php?halaman=15";
          </script>
      <?php
  }
}
?>
