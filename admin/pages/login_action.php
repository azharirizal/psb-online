<?php
include "../conf/connect.php";
$username = mysql_real_escape_string(htmlentities($_POST['username']));
$password = mysql_real_escape_string(htmlentities($_POST['password']));
$check    = mysql_query("SELECT * FROM psb_admin WHERE username = '$username' AND password = md5('$password')") or die(mysql_error());
if(mysql_num_rows($check) >= 1){
	while($row = mysql_fetch_array($check)){
		session_start();
		$_SESSION['admin_id'] = $row['admin_id'];
		$_SESSION['username'] = $row['username'];
		?>
	    <script>alert("Selamat Datang <?= $row['username']; ?> Kamu Telah Login Ke Halaman Admin !!!");
				window.location.href="../index.php"</script>
				<?php
	}	
}else{
    echo '<script>alert("Masukan Username dan Password dengan Benar !!!");
				window.location.href="login.php"</script>';
}
?>