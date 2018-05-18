<?php session_start();
if(isset($_SESSION['username'])){

    //koneksi terpusat
    include "include/koneksi.php";
    $username=$_SESSION['username'];
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">
        <link rel="icon" href="../../favicon.ico">
        <title>Sistem Informasi Rekam Medis UKS SMPN 4 Kota Tangerang Selatan</title>

        <!-- Bootstrap core CSS -->
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/style.css" rel="stylesheet">

        <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
        <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->

        <!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js">
</script>

<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>

<![endif]-->

    </head>
    <body>
        <!-- Fixed navbar -->
        <nav class="navbar navbar-default navbar-static-top">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <a class="navbar-brand" href="home.php">UKS 4 Tangsel</a>
                </div>

                <div id="navbar" class="navbar-collapse collapse">
                    <ul class="nav navbar-nav">
                        <li><a href="home.php">Home</a></li>
                        <li><a href="home.php?halaman=1">About</a></li>
                        <li><a href="home.php?halaman=2">Pasien</a></li>
                        <li><a href="home.php?halaman=18">Kunjungan</a></li>
                        <li><a href="home.php?halaman=6">Obat</a></li>
                        <li><a href="home.php?halaman=10">Tindakan</a></li>
                        <li><a href="home.php?halaman=14">Penjaringan</a></li>
                        <li><a href="home.php?halaman=15">Petugas</a></li>
                        <li><a href="home.php?halaman=23">Rekam Medis</a></li>
                    </ul>

                    <ul class="nav navbar-nav navbar-right">
                        <li class="active"><a href="./"><?php echo $username ;?><span class="sr-only">(current)</span></a></li>
                        <li><a href="logout.php">Logout</a></li>
                    </ul>
                </div>
                <!--/.nav-collapse -->
            </div>
        </nav>
        <div class="container">

            <!-- hlaman unutk menampilkan data utama seperti pasien dokter pengunjung dan lain lain -->

<?php
    if (isset($_GET['halaman']))
    {
        $isi =$_GET['halaman'];
    }

    else
    {
        $isi =0;
    }

    switch($isi)

    {
        case '0':
            require ("welcome.php");
            break;

        case '1':
            require ("about.php");
            break;

        case '2':
            require ("data_pasien.php");
            break;

        case '3':
            require ("edit_data_pasien.php");
            break;

        case '4':
            require ("proses_hapus_pasien.php");
            break;

        case '5':
            require ("detail_pasien.php");
            break;

        case '6':
            require ("data_obat.php");
            break;

        case '7':
            require ("edit_data_obat.php");
            break;

        case '8':
            require ("proses_hapus_obat.php");
            break;

        case '9':
            require ("detail_obat.php");
            break;

        case '10':
            require ("data_tindakan.php");
            break;

        case '11':
            require ("edit_data_tindakan.php");
            break;

        case '12':
            require ("proses_hapus_tindakan.php");
            break;

        case '13':
            require ("proses_edit_tindakan.php");
            break;

        case '14':
            require ("data_penjaringan.php");
            break;

        case '15':
            require ("data_petugas.php");
            break;

        case '16':
            require ("edit_data_petugas.php");
            break;

        case '17':
            require ("proses_hapus_petugas.php");
            break;

        case '18':
            require ("data_kunjungan.php");
            break;

        case '19':
            require ("detail_kunjungan.php");
            break;

        case '23':
            require ("data_rm.php");
            break;

    }
?>


<!-- /container -->
<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->

<script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
            </body>
        </html>
    <?php
}
else

{
    session_destroy();
    ?>
    <script language="javascript">
        alert("Username atau Password Anda salah!");
        document.location.href="index.php";
    </script>
<?php
}
?>
