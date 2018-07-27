<?php
include "../conf/connect.php";

$admin_id=$_GET['id'];

$hapus=mysql_query("DELETE FROM psb_admin WHERE admin_id ='$admin_id'");
if ($hapus)
echo "<meta http-equiv='refresh' content='0; url=../index.php?page=data_admin'>";
else
	echo "Gagal Menghapus Data !!!";
?>
