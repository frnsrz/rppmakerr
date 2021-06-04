<?php
// memanggil dan membaca template dokumen yang telah kita buat
$document = file_get_contents("contohmanual.doc");
// header untuk membuka file output RTF dengan MS. Word
header("Content-type: application/msword");
header("Content-disposition: inline; filename=contohRPPl.doc");
echo $document;
?>