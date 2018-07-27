<?php
include "../conf/connect.php";

$status = $_GET['sel'];
$nisn   = $_GET['id'];

if ($status=="0"){
	$seleksi="1";
} else {
	$seleksi="0";
}

$succes = mysql_query ("UPDATE psb_calon_siswa SET sts_seleksi='$seleksi' WHERE nisn ='$nisn'")or die(mysql_error());

if($succes){
		echo '<script>alert("Data Seleksi Berhasil Diubah !!!");
				window.location.href="../index.php?page=data_siswa"</script>';
	}

?>