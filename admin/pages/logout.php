<?php
session_start();
include '../conf/connect.php';
$sess_admin 	= $_SESSION['admin_id'];
$sess_username	= $_SESSION['username'];
if (isset($sess_admin) and (isset($sess_username)))
{
	session_destroy();
		echo '<script>alert("Anda Telah Logout !!!");
				window.location.href="login.php"</script>';
}
?>
