<?php
$aksi = isset($_GET['aksi']) ? $_GET['aksi'] : '';

switch ($aksi) {
   case 'pemesanan':
      include 'main/pemesanan.php';
      break;

   case 'detail':
      include 'main/detail.php';
      break;
   case 'daftar-pemesanan':
      include 'main/daftar-pemesanan.php';
      break;
   case 'hapus':
      include 'main/hapus.php';
      break;

   default:
      include 'main/main.php';
      break;
}
?>