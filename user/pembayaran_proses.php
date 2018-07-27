<?php
session_start();

include '../conf/connect.php';

$bank			= $_POST['bank'];
$atas_nama		= $_POST['atas_nama'];
$jumlah			= $_POST['jumlah'];
$bank_tujuan    = $_POST['bank_tujuan'];
$nisn			= $_SESSION['nisn'];
$gambar			= $_FILES["gambar"]["name"];
$log 			= "2.png";

if(file_exists("../images/struk/".$gambar)) {
	unlink("../images/struk/".$gambar);
	copy($_FILES['gambar']['tmp_name'],"../images/struk/".$gambar);	
} else {
	copy($_FILES['gambar']['tmp_name'],"../images/struk/".$gambar);
}

	$input = mysql_query("UPDATE psb_bayar SET 
						bank='$bank',
						atas_nama='$atas_nama',
						jumlah='$jumlah',
						gambar='$gambar',
						bank_tujuan='$bank_tujuan',
						sts_bayar=1
						WHERE nisn='$_SESSION[nisn]'");

	$input2 		= mysql_query("UPDATE psb_log SET 
						pembayaran='$log' WHERE nisn='$_SESSION[nisn]'");

	if($input){
	echo '<script>alert("Data Anda Berhasil Disimpan !!!");
				window.location.href="../user/pembayaran.php"</script>';
	}
	else{
	echo '<script>alert("Data Anda Gagal Disimpan!!!");
				window.location.href="../user/pembayaran.php"</script>';
	}
?>
