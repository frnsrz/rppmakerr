<!DOCTYPE html>
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
            <h3 class="mb-5"><em><strong>Silahkan isi form pembuatan Rencana Pelaksanaan Pembelajaran (RPP) dengan teliti dibawah ini</strong></em></h3><a class="btn btn-primary btn-xl js-scroll-trigger" role="button" href="#buat">BUAT RPP</a>
            <div class="overlay"></div>
        </div>
    </header>

	<section class="bg-light content-section" id="buat">
	    <div id="main">
	    <div class="header">
	    <div class="hero">
		<div class="hero-title">
			<center><h1>BUAT Rencana Pelaksanaan Pembelajaran (RPP)</h1>
		
		</div>
		<div class="input-form">
			<center><h3>Masukan Data</h3></center>
			<form action="laporanmanual1.php" method="POST">
			<center>
				<fieldset>
	                <legend><b>IDENTITAS NAMA</b></legend>
	                <table>
	                    <tr><td><input class="form-control" type="text" name="namasekolah" placeholder="Nama Sekolah"></td></tr>
	                    <tr><td><input class="form-control" type="text" name="mp" placeholder="Mata Pelajaran"></td></tr>
						<tr><td><input class="form-control" type="text" name="kelas" placeholder="Kelas / Semester"></td></tr>
						<tr><td><input class="form-control" type="text" name="waktu" placeholder="Alokasi Waktu (menit)"></td></tr>
						<tr><td><input class="form-control" type="text" name="pertemuan" placeholder="Pertemuan ke-"></td></tr>
						<tr><td><input class="form-control" type="text" name="tahun" placeholder="Tahun Pelajaran"></td></tr>
						<tr><td><textarea class="form-control" name="materipokok" placeholder="Materi Pokok / Sub Materi"></textarea></td></tr>
	                </table>
	            </fieldset>
	            <br/>
				<fieldset>
					<legend><b>KOMPETENSI DAN INDIKATOR</b></legend>
					<table>
						<tr><td><textarea class="form-control" name="ki" placeholder="Kompetensi Inti"></textarea></td></tr>
						<tr><td><textarea class="form-control" name="kd" placeholder="Kompetensi Dasar"></textarea></td></tr>
						<tr><td><textarea class="form-control" name="ipk" placeholder="Indikator Pencapaian Kompetensi"></textarea></td></tr>
					</table>
				</fieldset>
				<br/>
				<fieldset>
					<legend><b>TUJUAN PEMBELAJARAN</b></legend>
					<table>
						<tr><td><textarea class="form-control" name="tujuan" placeholder="Tujuan Pembelajaran"></textarea></td></tr>
					</table>
				</fieldset>
				<br/>
				<fieldset>
					<legend><b>MATERI PEMBELAJARAN</b></legend>
					<table>
						<tr><td><textarea class="form-control" name="matpem" placeholder="Materi Pembelajaran"></textarea></td></tr>
					</table>
				</fieldset>
				<br/>
				<fieldset>
					<legend><b>ALAT, MEDIA, DAN SUMBER BELAJAR</b></legend>
					<table>
						<tr><td><input class="form-control" type="text" name="alat" placeholder="Alat dan Bahan"></td></tr>
						<tr><td><input class="form-control" type="text" name="media" placeholder="Media"></td></tr>
						<tr><td><textarea class="form-control" name="sumber" placeholder="Sumber Pembelajaran"></textarea></td></tr>
					</table>
				</fieldset>
				<br/>
				<fieldset>
					<legend><b>MODEL DAN METODE PEMBELAJARAN</b></legend>
					<table>
						<tr><td><textarea class="form-control" type="text" name="model" placeholder="Model pembelajaran"></textarea></td></tr>
						<tr><td><textarea class="form-control" type="text" name="metode" placeholder="Metode Pembelajaran"></textarea></td></tr>
					</table>
				</fieldset>
				<br/>
				<fieldset>
					<legend><b>LANGKAH-LANGKAH KEGIATAN PEMBELAJARAN</b></legend>
					<table>
						<tr><td>Kegiatan Pendahuluan</td></tr>	
						<tr><td><textarea class="form-control" name="pendahuluan" placeholder="Keg. Pendahuluan"></textarea></td></tr>
						<tr><td><input class="form-control" type="text" name="waktpn" placeholder="Waktu Pendahuluan(menit)"></td></tr>
						<tr><td>Kegiatan Inti</td></tr>
						<tr><td><textarea class="form-control" name="kegiatanliterasi" placeholder="Keg. Literasi"></textarea></td></tr>
						<tr><td><textarea class="form-control" name="criticalthinking" placeholder="Critical Thinking"></textarea></td></tr>
						<tr><td><textarea class="form-control" name="collaboration" placeholder="Collaboration"></textarea></td></tr>
						<tr><td><textarea class="form-control" name="communication" placeholder="Communication"></textarea></td></tr>
						<tr><td><textarea class="form-control" name="creativity" placeholder="Creativity"></textarea></td></tr>
						<tr><td><input class="form-control" type="text" name="waktii" placeholder="Waktu Keg. Inti(menit)"></td></tr>
						<tr><td>Kegiatan Penutup</td></tr>
						<tr><td><textarea class="form-control" name="penutup" placeholder="Keg. Penutup"></textarea></td></tr>
						<tr><td><input class="form-control" type="text" name="waktpp" placeholder="Waktu Keg. Penutup(menit)"></td></tr>
					</table>
				</fieldset>
				<br/>
				<fieldset>
					<legend><b>PENILAIAN</b></legend>
					<table>
						<tr><td><textarea class="form-control" type="text" name="penilaians" placeholder="Penilaian Sikap"></textarea></td></tr>
						<tr><td><textarea class="form-control" type="text" name="penilaianp" placeholder="Penilaian Pengetahuan"></textarea></td></tr>
						<tr><td><textarea class="form-control" type="text" name="penilaiank" placeholder="Penilaian Ketrampilan"></textarea></td></tr>
					</table>
				</fieldset>
				<br/>
				<fieldset>
					<legend><b>TTD</b></legend>
					<table>
						<tr><td><input class="form-control" type="text" name="pembuatan" placeholder="Kota dan Tanggal RPP"></td></tr>
						<tr><td><input class="form-control" type="text" name="namakepsek" placeholder="Nama Kepala Sekolah"></td></tr>
						<tr><td><input class="form-control" type="text" name="nipkepsek" placeholder="NIP Kepala Sekolah"></td></tr>
						<tr><td><input class="form-control" type="text" name="namaguru" placeholder="Nama Guru"></td></tr>
						<tr><td><input class="form-control" type="text" name="nipguru" placeholder="NIP Guru"></td></tr>
					</table>
				</fieldset>
				<br/>
				<center><tr>
					<td colspan=3 ><input class="btn btn-primary btn-xl js-scroll-trigger" type="submit" value="Print"/></td>
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