<?php
include "../conf/connect.php";

$status = $_GET['ver'];
$nisn   = $_GET['id'];

if ($status=="0"){
	$verifikasi="1";
	$log 	= "2.png";
} else {
	$verifikasi="0";
	$log 	= "1.png";
}

$succes 		= mysql_query ("UPDATE psb_calon_siswa SET sts_verifikasi='$verifikasi' WHERE nisn ='$nisn'")or die(mysql_error());

$success2 		= mysql_query("UPDATE psb_log SET 
						verifikasi='$log' WHERE nisn='$nisn'");

if($succes){
		echo '<script>alert("Data Verifikasi Berhasil Diubah!!!");
				window.location.href="../index.php?page=data_siswa"</script>';
	}

?>
