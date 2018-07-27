<?php
include "../conf/connect.php";
if($_POST)
{
$nisn 		= $_POST['nisn'];
$nama 		= $_POST['nama'];
$email 		= $_POST['email'];
$password 	= $_POST['password'];
$nopeserta 	= date('ymdhis');
$tgl_daftar	= date('ymd');
$registrasi = "2.png";
$default	= "1.png";
$succes1 	= ("INSERT INTO psb_calon_siswa (id_calon_siswa,no_peserta,nama,nisn,email,password,tgl_daftar) VALUES ('','".$nopeserta."','".$nama."','".$nisn."','".$email."','".md5($password)."','".$tgl_daftar."')");
$succes2	= mysql_query("INSERT INTO psb_biodata (nisn,nm_siswa) VALUES ('".$nisn."','".$nama."')");
$succes3	= mysql_query("INSERT INTO psb_bayar (kode_bayar,nisn) VALUES ('','".$nisn."')");
$succes4	= mysql_query("INSERT INTO psb_log (nisn,pendaftaran,biodata,verifikasi,pembayaran) VALUES ('".$nisn."','".$registrasi."','".$default."','".$default."','".$default."')");
if(!mysql_query($succes1)){
		die(mysql_error);
	}else{
		echo '<script>alert("Terima kasih sudah melakukan Registrasi !!!");
				window.location.href="login.php"</script>';	
	}
}
?>
