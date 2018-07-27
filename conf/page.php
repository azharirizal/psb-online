<?php
switch($_GET['page']){
  default:
  if (!isset($_SESSION['nisn'])) {
		include 'user/home.php';
    break;
  } else {
		include 'user/akun.php';
    break;
  }
  case 'profil':
		include 'user/profil.php';
    break;
  case 'fasilitas':
    include 'user/fasilitas.php';
    break;
  case 'akun':
    include 'user/akun.php';
    break;
  case 'biodata':
    include 'user/biodata.php';
    break;
  case 'dokumen':
    include 'user/dokumen.php';
    break;
  case 'informasi':
    include 'user/informasi.php';
    break;
  case 'pembayaran':
    include 'user/pembayaran.php';
    break;
  case 'pendaftar':
    include 'user/pendaftar.php';
    break;
  case 'pengumuman':
    include 'user/pengumuman.php';
    break;
  case 'prosedur':
    include 'user/prosedur.php';
    break;
}
?>
