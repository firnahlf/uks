<div class="jumbotron">
  <script src="js/jquery-1.10.2.js"></script>

  <h2>Rekam Medis</h2>

  <form method="get">
	<label for="name">Name</label>
	<input id="name" name="name" placeholder="Type the name" />
	<button class="btnSearch">Search</button>
</form>

<script>
$('.btnSearch').click(function(){
    // code goes here !
});

$('form').submit(function(e){
    // code goes here !
});

function makeAjaxRequest() {
    $.ajax({
        url: 'php/search.php',
        type: 'get',
        data: {name: $('input#name').val()},
        success: function(response) {
            $('table#resultTable tbody').html(response);
        }
    });
}

</script>
            <table id="resultTable">
            <table class="table table-hover">
                <tbody>
                    <td>ID Pasien</td>
                    <td>ID Kunjungan</td>
                    <td>ID Penjaringan </td>
                    <td>Nama Pasien </td>

                </tbody>

                <?php
                include "include/koneksi.php";
                $baca = mysqli_query($koneksi, "SELECT * FROM data_penjaringan");
                while( $tampil = mysqli_fetch_array($baca))
                {
                ?>

                <tbody>
                    <td><?php echo $tampil['id_pasien'] ; ?></td>
                    <td><?php echo $tampil['id_penjaringan']; ?></td>
                    <td><?php echo $tampil['nama_pasien']; ?></td>

                </tbody>
                <?php
                }
                ?>
            </table>

        </div>
    </div>
</div>
