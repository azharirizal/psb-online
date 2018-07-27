<?php
session_start();
include '../conf/connect.php';
$sess_peserta 	= $_SESSION['no_peserta'];
$sess_nisn		= $_SESSION['nisn'];
if (isset($sess_peserta) and (isset($sess_nisn)))
{
	mysql_query("update psb_calon_siswa set status = '0' where no_peserta = '$sess_peserta'") or die (mysql_error());
	session_destroy();
		echo '<script>alert("Anda Telah Logout !!!");
				window.location.href="../index.php"</script>';
}
?>