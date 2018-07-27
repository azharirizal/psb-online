<?php
include "../conf/connect.php";
if($_POST)
{
$username = $_POST['username'];
$password = $_POST['password'];
$profil = $_FILES['profil']['name'];
copy($_FILES['profil']['tmp_name'],"../images/profil/".$profil);
$succes = ("INSERT INTO psb_admin(admin_id,username,password,profil) VALUES ('','".$username."','".md5($password)."','".$profil."')");
if(!mysql_query($succes)){
		die(mysql_error);
	}else{
		echo '<script>alert("Data Admin Berhasil Ditambahkan !!!");
				window.location.href="../index.php?page=data_admin"</script>';	
	}
}
?>
