<?php
include "include/koneksi.php";


//tampung data

$username = $_POST['username'];
$password = $_POST['password'];
$level = $_POST['level'];

if($username =="" or $password =="")
{
  ?>
  <script language="javascript">document.location.href="home.php?halaman=15";
      alert("Masih ada form yang kosong!");
  </script>
<?php

}

else {
  $query = mysqli_query($koneksi, "INSERT INTO login (username, password, level) VALUES ('id_user', '$username','$password','$level')");

  if($query)
  {
      ?>
          <script language="javascript">document.location.href="home.php?halaman=15"; alert("Data petugas baru berhasil disimpan!");
          </script>
      <?php
  }

  else

  {
      ?>
          <script language="javascript">document.location.href="home.php?halaman=15"; alert("Data petugas baru gagal disimpan!");
          </script>
      <?php
  }
}
?>
