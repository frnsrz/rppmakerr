<?php
// membaca data dari form
$ki = $_POST['ki'];
$kd = $_POST['kd'];
$ipk = $_POST['ipk'];
$namasekolah = $_POST['namasekolah'];
$namakepsek = $_POST['namakepsek'];
$nipkepsek = $_POST['nipkepsek'];
$namaguru = $_POST['namaguru'];
$nipguru = $_POST['nipguru'];
$mp = $_POST['mp'];
$kelas = $_POST['kelas'];
$tahun = $_POST['tahun'];
$pertemuan = $_POST['pertemuan'];
$pembuatan = $_POST['pembuatan'];
$materipokok = $_POST['materipokok'];
$waktu = $_POST['waktu'];
$tujuan = $_POST['tujuan'];
$matpem = $_POST['matpem'];
$alat = $_POST['alat'];
$media = $_POST['media'];
$sumber = $_POST['sumber'];
$model = $_POST['model'];
$metode = $_POST['metode'];
$waktpn = $_POST['waktpn'];
$pendahuluan = $_POST['pendahuluan'];
$waktii = $_POST['waktii'];
$kegiatanliterasi = $_POST['kegiatanliterasi'];
$criticalthinking = $_POST['criticalthinking'];
$collaboration = $_POST['collaboration'];
$communication = $_POST['communication'];
$creativity = $_POST['creativity'];
$waktpp = $_POST['waktpp'];
$penutup = $_POST['penutup'];
$penilaians = $_POST['penilaians'];
$penilaianp = $_POST['penilaianp'];
$penilaiank = $_POST['penilaiank'];
// memanggil dan membaca template dokumen yang telah kita buat
$document = file_get_contents("manual1.rtf");
// isi dokumen dinyatakan dalam bentuk string
$document = str_replace("#KI", $ki, $document);
$document = str_replace("#KD", $kd, $document);
$document = str_replace("#IPK", $ipk, $document);
$document = str_replace("#NAMASEKOLAH", $namasekolah, $document);
$document = str_replace("#NAMAKEPSEK", $namakepsek, $document);
$document = str_replace("#NIPKEPSEK", $nipkepsek, $document);
$document = str_replace("#NAMAGURU", $namaguru, $document);
$document = str_replace("#NIPGURU", $nipguru, $document);
$document = str_replace("#MP", $mp, $document);
$document = str_replace("#KELAS", $kelas, $document);
$document = str_replace("#TAHUN", $tahun, $document);
$document = str_replace("#PERTEMUAN", $pertemuan, $document);
$document = str_replace("#PEMBUATAN", $pembuatan, $document);
$document = str_replace("#MATERIPOKOK", $materipokok, $document);
$document = str_replace("#WAKTU", $waktu, $document);
$document = str_replace("#TUJUAN", $tujuan, $document);
$document = str_replace("#MATPEM", $matpem, $document);
$document = str_replace("#ALAT", $alat, $document);
$document = str_replace("#MEDIA", $media, $document);
$document = str_replace("#SUMBER", $sumber, $document);
$document = str_replace("#MODEL", $model, $document);
$document = str_replace("#METODE", $metode, $document);
$document = str_replace("#WAKTPN", $waktpn, $document);
$document = str_replace("#PENDAHULUAN", $pendahuluan, $document);
$document = str_replace("#WAKTII", $waktii, $document);
$document = str_replace("#KEGIATANLITERASI", $kegiatanliterasi, $document);
$document = str_replace("#CRITICALTHINKING", $criticalthinking, $document);
$document = str_replace("#COLLABORATION", $collaboration, $document);
$document = str_replace("#COMMUNICATION", $communication, $document);
$document = str_replace("#CREATIVITY", $creativity, $document);
$document = str_replace("#WAKTPP", $waktpp, $document);
$document = str_replace("#PENUTUP", $penutup, $document);
$document = str_replace("#PENILAIANS", $penilaians, $document);
$document = str_replace("#PENILAIANP", $penilaianp, $document);
$document = str_replace("#PENILAIANK", $penilaiank, $document);
// header untuk membuka file output RTF dengan MS. Word
header("Content-type: application/msword");
header("Content-disposition: inline; filename=laporan1.doc");
header("Content-length: ".strlen($document));
echo $document;
?>