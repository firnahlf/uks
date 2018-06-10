<div class="jumbotron">
<h1>Welcome</h1>
<p>Selamat Datang di Sistem Informasi Rekam Medis UKS SMPN 4 Tangerang Selatan</p>
</div>
<h3 style="text-align:center">Statistik Pemakaian Obat Tahun 2018</h3>
<br>
<canvas id="myChart" width="1000" height="350"></canvas>
<script type="text/javascript">
<?php
  // function pemakaianObat(){
    include "include/koneksi.php";
    $paracetamol = array(0,0,0,0,0,0,0,0,0,0,0,0);
    $q_paracetamol = mysqli_query($koneksi, "SELECT MONTH(tgl_kunjungan) MONTH,
                                              COUNT(*) COUNT
                                              FROM data_kunjungan
                                              WHERE YEAR(tgl_kunjungan)=2018 && tindakan = 1
                                              GROUP BY MONTH(tgl_kunjungan)");
    while ($hasil = mysqli_fetch_array($q_paracetamol)) {
        $bulan=$hasil['MONTH'];
        $jumlah=$hasil['COUNT'];
        $paracetamol[$bulan-1] = $jumlah;
    }
    $j=json_encode($paracetamol);
    echo "var paracetamol = ". $j .";";

    $vitamin_c = array(0,0,0,0,0,0,0,0,0,0,0,0);
    $q_vitamin_c = mysqli_query($koneksi, "SELECT MONTH(tgl_kunjungan) MONTH,
                                              COUNT(*) COUNT
                                              FROM data_kunjungan
                                              WHERE YEAR(tgl_kunjungan)=2018 && tindakan = 2
                                              GROUP BY MONTH(tgl_kunjungan)");
    while ($hasil = mysqli_fetch_array($q_vitamin_c)) {
        $bulan=$hasil['MONTH'];
        $jumlah=$hasil['COUNT'];
        $vitamin_c[$bulan-1] = $jumlah;
    }
    $j=json_encode($vitamin_c);
    echo "var vitamin_c = ". $j .";";
?>
var bulan = ['Jan','Feb','Mar','Apr','Mei','Jun','Jul','Agu','Sep','Okt','Nov','Des'];

var ctx = document.getElementById("myChart");
var myChart = new Chart(ctx, {
  type: 'line',
  data: {
    labels: bulan,
    datasets: [
      {
        data: paracetamol,
        label: "Paracetamol",
        borderColor: "#3ecd4c",
        fill: true
      },
      {
        data: vitamin_c,
        label: "Vitamin C",
        borderColor: "#b13ecd",
        fill: true
      }
    ]
  }
});
</script>
