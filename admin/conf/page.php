<?php
switch($_GET['page']){
  default:
		include 'pages/home.php';
    break;
  case 'tambah_admin':
    include 'pages/tambah_admin.php';
    break;
  case 'data_admin':
    include 'pages/data_admin.php';
    break;
  case 'edit_admin':
    include 'pages/edit_admin.php';
    break;
  case 'data_siswa':
    include 'pages/data_siswa.php';
    break;
  case 'data_pembayaran':
    include 'pages/data_pembayaran.php';
    break;
  case 'berkas_siswa':
    include 'pages/berkas_siswa.php';
    break;
  case 'cetak_data_siswa':
    include 'pages/cetak_data_siswa.php';
    break;
  case 'cetak_data_siswa_perperiode':
    include 'pages/cetak_data_siswa_perperiode.php';
    break;
  case 'cetak_pembayaran_perperiode':
    include 'pages/cetak_pembayaran_perperiode.php';
    break;
  case 'data':
    include 'pages/data.php';
    break;
  case 'data_table':
    include 'pages/data_table.php';
    break;
}
?>
