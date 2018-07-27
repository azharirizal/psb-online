<?php
session_start();

include '../conf/connect.php';

$ijazah			= $_FILES["ijazah"]['name'];
$foto			= $_FILES["foto"]['name'];
$nilai			= $_FILES["nilai"]['name'];
$skhun			= $_FILES["skhun"]['name'];

			if(file_exists("../images/ijazah/".$ijazah)) {
				unlink("../images/ijazah/".$ijazah);
				copy($_FILES['ijazah']['tmp_name'],"../images/ijazah/".$ijazah);	
			} else {
				copy($_FILES['ijazah']['tmp_name'],"../images/ijazah/".$ijazah);
			}

			if(file_exists("../images/foto/".$foto)) {
				unlink("../images/foto/".$foto);
				copy($_FILES['foto']['tmp_name'],"../images/foto/".$foto);	
			} else {
				copy($_FILES['foto']['tmp_name'],"../images/foto/".$foto);
			}

			if(file_exists("../images/nilai/".$nilai)) {
				unlink("../images/nilai/".$nilai);
				copy($_FILES['nilai']['tmp_name'],"../images/nilai/".$nilai);	
			} else {
				copy($_FILES['nilai']['tmp_name'],"../images/nilai/".$nilai);
			}

			if(file_exists("../images/skhun/".$skhun)) {
				unlink("../images/skhun/".$skhun);
				copy($_FILES['skhun']['tmp_name'],"../images/skhun/".$skhun);	
			} else {
				copy($_FILES['skhun']['tmp_name'],"../images/skhun/".$skhun);
			}

	$input = mysql_query("UPDATE psb_biodata SET 
						ijazah='$ijazah',
						foto='$foto',
						nilai='$nilai',
						skhun='$skhun',
						sts_bio=1 WHERE nisn='$_SESSION[nisn]'");

	if($input){
	echo '<script>alert("Data Anda Berhasil Disimpan !!!");
				window.location.href="../index.php?page=akun"</script>';
	}
	else{
	echo '<script>alert("Data Anda Gagal Disimpan!!!");
				window.location.href="../index.php?page=akun"</script>';
	}

?>
