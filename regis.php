<!DOCTYPE html>
<?php
include "config.php";

if(isset($_POST['register'])){

    // filter data yang diinputkan
	$username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_STRING);
	$fullname = filter_input(INPUT_POST, 'fullname', FILTER_SANITIZE_STRING);
	$email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
	$NIP = filter_input(INPUT_POST, 'nip', FILTER_SANITIZE_STRING);
    // enkripsi password
	$password = password_hash($_POST["password"], PASSWORD_DEFAULT);

    // menyiapkan query
    $sql = "INSERT INTO users (username, password, email, fullname, nip) 
            VALUES (:username, :password, :email, :fullname, :nip)";
    $stmt = $db->prepare($sql);

    // bind parameter ke query
    $params = array(
		":username" => $username,
		":password" => $password,
		":email" => $email,
		":fullname" => $fullname,
        ":nip" => $NIP
    );
    $saved = $stmt->execute($params);

    // jika query simpan berhasil, maka user sudah terdaftar
    // maka alihkan ke halaman login
	if($saved) header("Location: index.php");
	
}
?>
<html>

<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Buat RPP - RPPMaker.com</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700,300italic,400italic,700italic">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="assets/fonts/simple-line-icons.min.css">
  </head>

  <body id="page-top"><a class="menu-toggle rounded" href="#"><i class="fa fa-bars"></i></a>
    <nav class="navbar navbar-light navbar-expand" id="sidebar-wrapper">
        <div class="container"><button data-toggle="collapse" class="navbar-toggler d-none" data-target="#"></button>
            <div class="collapse navbar-collapse">
                <ul class="navbar-nav sidebar-nav" id="sidebar-nav">
                    <li class="nav-item sidebar-brand"><a class="nav-link active js-scroll-trigger" href="#page-top">Buat RPP</a></li>
                    <li class="nav-item sidebar-nav-item"><a class="nav-link js-scroll-trigger" href="index.php">Beranda</a></li>
                    <li class="nav-item sidebar-nav-item"><a class="nav-link js-scroll-trigger" href="manual.php">Buat RPP</a></li>
                    <li class="nav-item sidebar-nav-item"><a class="nav-link js-scroll-trigger" href="help.php">Pusat Bantuan</a></li>
                    <li class="nav-item sidebar-nav-item"><a class="nav-link js-scroll-trigger" href="AboutUs.php">Tentang Kami</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <header class="d-flex masthead" style="background-image:url('assets/img/bg-masthead.jpg');">
        <div class="container text-center my-auto">
            <h1 class="mb-1">BUAT RPP</h1>
            <h3 class="mb-5"><em><strong>Silahkan Daftar Untuk Melanjutkan</strong></em></h3><a class="btn btn-primary btn-xl js-scroll-trigger" role="button" href="#login">Login</a>
            <div class="overlay"></div>
        </div>
    </header>

	<section class="bg-light content-section" id="login">
	    <div id="main">
	    <div class="header">
	    <div class="hero">
		<div class="hero-title">
			<center><h1>Buat RPP Semudah Jentikkan Jari</h1>
		
		</div>
		<div class="input-form">
			<center><h3>Masukan Data</h3></center>
			<form action="" method="POST">
			<center>
				<fieldset>
	                <legend><b> </b></legend>
	                <table>
					<a class="regisword" href="regis.php">Belum Punya Akun? Yuk Daftar</a>
	                    <tr><td><input class="form-control" type="text" name="username" placeholder="Username"></td></tr>
	                    <tr><td><input class="form-control" type="text" name="password" placeholder="Password"></td></tr>
                        <tr><td><input class="form-control" type="text" name="email" placeholder="Email"></td></tr>
	                    <tr><td><input class="form-control" type="text" name="fullname" placeholder="Nama Lengkap"></td></tr>
                        <tr><td><input class="form-control" type="text" name="nip" placeholder="NIP"></td></tr>
					</table>
	            </fieldset>
	            <br/>
				<center><tr>
					<td colspan=3 ><input class="btn btn-primary btn-xl js-scroll-trigger" type="submit" name="register" value="Log In"/></td>
				</tr></center>
			</form>
			</center>
	    </div>
		</div>
	    </div>
	    </div>
	</section>
        <footer class="text-center footer">
        <div class="container">
            <ul class="list-inline mb-5">
                <li class="list-inline-item">&nbsp;<a class="text-white social-link rounded-circle" href="#"><i class="icon-social-facebook"></i></a></li>
                <li class="list-inline-item">&nbsp;<a class="text-white social-link rounded-circle" href="#"><i class="icon-social-twitter"></i></a></li>
                <li class="list-inline-item">&nbsp;</li>
            </ul>
            <p class="text-muted mb-0 small">Copyright &nbsp;© Kelompok 5 2021</p>
        </div><a class="js-scroll-trigger scroll-to-top rounded" href="#page-top"><i class="fa fa-angle-up"></i></a>
    </footer>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
    <script src="assets/js/stylish-portfolio.js"></script>
</body>