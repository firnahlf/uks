<?
include "include/koneksi.php";
$username =$_POST['username'];
$password =$_POST['password'];
$baca =mysqli_query($koneksi, "SELECT * FROM login WHERE username ='$username' AND password='$password'");

$periksa =mysqli_fetch_array($baca);
$username =$periksa['username'];

//periksa
if ($periksa > 0) //jika ditemukan
{
    session_start();
    $_SESSION['username']=$username;
?>

<script language="javascript">
    alert("Selamat Datang di Sistem Informasi Rekam Medis UKS SMPN 4 Tangerang Selatan!");
    document.location.href="home.php";
</script>

<?php
}

else

{
?>
<script language="javascript">
    alert("Username atau Password Anda salah!");
    document.location.href="index.php";
</script>
<?php
}
?>
