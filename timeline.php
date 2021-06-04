<!DOCTYPE html>
<?php
require_once 'auth.php';
require 'functions.php';
$users = query ("SELECT * FROM users");
?>
<html>

<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Beranda - RPPMaker.com</title>
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
                    <li class="nav-item sidebar-brand"><a class="nav-link active js-scroll-trigger" href="#page-top">RPPMaker.com</a></li>
                    <li class="nav-item dropdown">
                    <?php foreach ($users as $row) :?>
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><?= $row["fullname"]; ?></a>
                        <?php endforeach ;?>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <nav class="navbar navbar-dark bg-primary">
                            <a class="dropdown-item" href="profile.php">Profile</a>
                            <a class="dropdown-item" href="logout.php">Log Out</a>
                        </nav>
                        </div></li>
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
            <h1 class="mb-1">RPPMaker.com</h1>
            <h3 class="mb-5"><em><strong>Website untuk Membuat&nbsp;</strong><br><strong>Rencana Pelaksanaan Pembelajaran (RPP)</strong></em></h3><a class="btn btn-primary btn-xl js-scroll-trigger" role="button" href="#about">Selengkapnya</a>
            <div class="overlay"></div>
        </div>
    </header>

    <section class="bg-light content-section" id="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 offset-md-6 mx-auto">
                    <h2>Apa itu RPP ?</h2>
                    <p class="text-justify" class="lead mb-5"><span>&nbsp; &nbsp; &nbsp; &nbsp; Rencana Pelaksanaan Pembelajaran (RPP) wajib dimiliki guru sebagai bagian dari perangkat mengajar. RPP adalah rencana pembelajaran yang pengembangannya mengacu pada suatu KD (Kopetensi Dasar) tertentu di dalam kurikulum/silabus. RPP dibuat dalam rangka pedoman guru dalam mengajar sehari-hari, sehingga pelaksanaan pembelajaran bisa terarah. RPP seringkali dibuat/disusun pada setiap KD yang dapat dilaksanakan dalam satu kali pertemuan atau lebih. RPP menggambarkan prosedur dan pengorganisasian pembelajaran di dalam mencapai sebuah Kompetensi Dasar (KD) yang diterapkan dalam Kompetensi Inti (KI) dan dijabarkan dalam silabus.</span>
                   <br><br>&nbsp; &nbsp; &nbsp; &nbsp; Selain RPP ada juga Silabus, yakni pedoman rencana pembelajaran yang fungsinya sebagai acuan pengembangan RPP. Silabus dikembangkan oleh suatu pendidikan berdasarkan KI dan KD dalam kurikulum. Untuk Kurikulum 2013, silabus disusun oleh pemerintah ditingkat nasional.<br><br>&nbsp; &nbsp; &nbsp; &nbsp; Adapun RPP dikembangkan sendiri oleh guru secara mandiri atau kelompok, di setiap sekolah masing-masing. Dikarenakan pengembanganya agar sesuai dengan tuntutan dak keadaan para siswa.<br></p>
                    <h2>Apa saja prinsip pengembangan RPP ?</h2>
                    <p align="justify/left/right/center" class="text-justify"><span>1.&nbsp;&nbsp;Disusun berdasarkan kurikulum / silabus yang telah disusun di tingkat nasional. Sehingga RPP harus memiliki kejelasan KI/KD-nya.<br>2.&nbsp;RPP menyesuaikan dalam pengembanganya sesuai dengan kondisi sekolah dan karateristik siswanya.<br>3. Mendorong partisipasi aktif siswa. Oleh karena itu didalam langkah-langkah pembelajaran siswa harus berperan aktif dalam pembelajaran atau menjadi pusat pembelajaran (Students Centers Learning).<br>4.&nbsp;Mengembangkan kegemaran siswa dalam membaca melalui beraham referensi (sumber baca) sehingga siswa terbiasa berpendapat dengan rujukan atau acuan yang jelas.<br>5.&nbsp;Memberikan banyak peluang pada siswa untuk berekspresi dalam bentuk tulisan, lisan, dan dalam bentuk karya-karya yang lainya. Sehingga para siswa diharapkan dapat membuat suatu produk yang bermanfaat.<br>6. Menciptakan suasana belajar yang menyenangkan, dengan menghadirkan beragam media dan sarana belajar yang dapat menumbuhkan minat/motivasi belajar siswa.<br>7.&nbsp;Memberikan keterkaitan dan keterpaduan antara komponen pembelajaran yang satu dengan komponen pembelajaran yang lainya sehingga dapat memberika pengalaman belajar pada siswa.<br><br><br></span></p>
                    <h2>Apa saja komponen dalam RPP ?</h2>
                    <p align="justify/left/right/center" class="text-justify"><span>&nbsp; &nbsp; &nbsp; &nbsp; Sebagimana diketahui Mendikbud telah menerbitkan Surat Edaran Nomor 14 Tahun 2019 Tentang Penyederhanaan RPP. Isi surat edaran tersebut menyatakan bahwa Penyusunan RPP dilakukan dengan prinsip efisien, efektif, dan berorientasi pada murid. Ditegaskan dalam Surat Edaran tersebut bahwa dari 13 (tiga belas) komponen RPP yang telah diatur dalam Peraturan Menteri Pendidikan dan Kebudayaan Nomor 22 Tahun 2016 tentang Standar Proses Pendidikan Dasar dan Menengah, yang menjadi komponen inti adalah tujuan pembelajaran, langkah-langkah (kegiatan) pembelajaran, dan&nbsp;penilaian pembelajaran (assessment) yang wajib dilaksanakan oleh guru, sedangkan komponen lainnya bersifat pelengkap.<br><br><br></span></p>
                    <a class="btn btn-primary btn-xl" role="button" href="contoh1.php">Download Contoh RPP</a>
                </div>
            </div>
        </div>
    </section>
    <section class="callout" style="background:linear-gradient(90deg, rgba(255, 255, 255, 0.1) 0%, rgba(255, 255, 255, 0.1) 100%), url(&quot;assets/img/bg-callout.jpg&quot;);background-position:center center;background-repeat:no-repeat;background-size:cover;">
        <div class="container text-center">
            <h2 class="mx-auto mb-5"><span>Buat RPP&nbsp;&nbsp;</span><span><br>Sekarang !<br></span></h2><a class="btn btn-primary btn-xl" role="button" href="manual.php">Buat RPP !</a>
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