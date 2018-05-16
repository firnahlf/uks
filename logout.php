<?php
session_start();
session_destroy();
echo "<script>alert('Terimakasih telah menggunakan Sistem Informasi Rekam Medis UKS ini!'); window.location = 'index.php'</script>";
?>