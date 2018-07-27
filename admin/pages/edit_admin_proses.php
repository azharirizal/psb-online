<?php
include "../conf/connect.php";

$admin_id = $_POST['admin_id'];
$username = $_POST['username'];
$password = $_POST['password'];
$profil   = $_FILES['profil']['name'];

if(file_exists("../images/profil/".$profil)) {
	unlink("../images/profil/".$profil);
	copy($_FILES['profil']['tmp_name'],"../images/profil/".$profil);	
} else {
	copy($_FILES['profil']['tmp_name'],"../images/profil/".$profil);
}

$succes = mysql_query ("UPDATE psb_admin SET username='$username',password=md5('$password'),profil='$profil' WHERE admin_id ='$admin_id'")or die(mysql_error());

if($succes){
		echo '<script>alert("Data Admin Berhasil Diedit !!!");
				window.location.href="../index.php?page=data_admin"</script>';
}
?>
