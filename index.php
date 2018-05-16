<?php
session_start();
if($_SESSION)
{
	header("Location: home.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>UKS SMPN 4 Kota Tangerang Selatan</title>

	<!-- Bootstrap -->
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<style>
		body
        {
            background-color:#5cb5f7;
		}

        .row
        {
			margin:100px auto;
			width:500px;
			text-align:center;
		}

        .login
        {
			background-color:#fff;
			padding:20px;
			margin-top:20px;
		}
	</style>
	<!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
</head>
<body>

	<div class="container">
		<div class="row">
			<h2>Sistem Informasi Rekam Medis UKS SMPN 4 Kota Tangerang Selatan</h2>
			<div class="login">

				<?php
				if(isset($_POST['login']))
                {
                    include("include/koneksi.php");

					$username	= $_POST['username'];
					$password	= $_POST['password'];
					$level		= $_POST['level'];

					$query = mysqli_query($koneksi, "SELECT * FROM login WHERE username='$username' AND password='$password'");

                    if(mysqli_num_rows($query) == 0)
                    {
						echo '<div class="alert alert-danger">Username, Password, atau Status Anda <strong>salah!</strong> Silahkan coba kembali!</div>';
					}

                    else

                    {
                        $row = mysqli_fetch_array($query);

                        if($row['level'] == 1 && $level == 1)
                        {
							$_SESSION['username']=$username;
							$_SESSION['level']='pembina';
							header("Location: home.php");
						}

                        else

                            if($row['level'] == 2 && $level == 2)
                            {
                                $_SESSION['username']=$username;
                                $_SESSION['level']='petugas';
                                header("Location: home1.php");
                            }

                        else
                        {
							echo '<div class="alert alert-danger">Username, Password, atau Status Anda <strong>salah!</strong> Silahkan coba kembali!</div>';
						}
					}
				}
				?>

				<form role="form" action="" method="post">
					<div class="form-group">
						<input type="text" name="username" class="form-control" placeholder="Username" required autofocus/>
					</div>
					<div class="form-group">
						<input type="password" name="password" class="form-control" placeholder="Password" required autofocus/>
					</div>
					<div class="form-group">
						<select name="level" class="form-control" required>
							<option value="">-- pilih akses --</option>
							<option value="1">Pembina UKS</option>
							<option value="2">Petugas UKS</option>
						</select>
					</div>
					<div class="form-group">
						<input type="submit" name="login" class="btn btn-primary btn-block" value="Log In" />
					</div>
				</form>
			</div>
        </div>
	</div>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
</body>
</html>
