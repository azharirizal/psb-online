<?php
session_start();

include '../conf/connect.php';

$nisn			= $_POST['nisn'];
$nm_siswa		= $_POST['nm_siswa'];
$tmp_lahir		= $_POST['tmp_lahir'];
$tgl_lahir		= $_POST['tgl_lahir'];
$kelamin		= $_POST['jns_kelamin'];
$agama			= $_POST['agama'];
$urut_anak		= $_POST['ank_ke'];
$urut_anak1		= $_POST['jml_saudara'];
$status_anak	= $_POST['sts_siswa'];
$hp_siswa		= $_POST['hp_siswa'];
$almt_siswa		= $_POST['almt_siswa'];
$tmpt_siswa		= $_POST['tmpt_siswa'];
$kendaraan		= $_POST['kendaraan'];
$berat_bdn		= $_POST['brt_badan'];
$tggi_bdn		= $_POST['tgi_badan'];
$darah			= $_POST['gol_darah'];
$nm_ayah		= $_POST['nm_ayah'];
$nm_ibu			= $_POST['nm_ibu'];
$almt_ortu		= $_POST['almt_ortu'];
$hp_ortu		= $_POST['hp_ortu'];
$kerja_ayah		= $_POST['kerja_ayah'];
$kerja_ibu		= $_POST['kerja_ibu'];
$hasil_ortu		= $_POST['hasil_ortu'];
$biaya			= $_POST['tgung_biaya'];
$log 			= "2.png";
$input 			= mysql_query("UPDATE psb_biodata SET 
						nisn='$nisn',
						nm_siswa='$nm_siswa',
						tmp_lahir='$tmp_lahir',
						tgl_lahir='$tgl_lahir',
						jns_kelamin='$kelamin',
						agama='$agama',
						ank_ke='$urut_anak',
						jml_saudara='$urut_anak1',
						sts_siswa='$status_anak',
						hp_siswa='$hp_siswa',
						almt_siswa='$almt_siswa',
						tmpt_siswa='$tmpt_siswa',
						kendaraan='$kendaraan',
						brt_badan='$berat_bdn',
						tgi_badan='$tggi_bdn',
						gol_darah='$darah',
						nm_ayah='$nm_ayah',
						nm_ibu='$nm_ibu',
						almt_ortu='$almt_ortu',
						hp_ortu='$hp_ortu',
						kerja_ayah='$kerja_ayah',
						kerja_ibu='$kerja_ibu',
						hasil_ortu='$hasil_ortu',
						tgung_biaya='$biaya',
						sts_bio=1 WHERE nisn='$_SESSION[nisn]'");
						
$input1 		= mysql_query("UPDATE psb_calon_siswa SET 
						nama='$nm_siswa',
						WHERE nisn='$_SESSION[nisn]'");

$input2 		= mysql_query("UPDATE psb_log SET 
						biodata='$log' WHERE nisn='$_SESSION[nisn]'");
	if($input){
	echo '<script>alert("Data Anda Berhasil Disimpan !!!");
				window.location.href="../index.php?page=akun"</script>';
	}
	else{
	echo '<script>alert("Data Anda Gagal Disimpan!!!");
				window.location.href="../user/biodata.php?id=1"</script>';
	}

?>
