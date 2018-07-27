<?php
include "../conf/connect.php";
$email = mysql_real_escape_string(htmlentities($_POST['email']));
$pass   = mysql_real_escape_string(htmlentities($_POST['pass']));
$check  = mysql_query("SELECT * FROM psb_calon_siswa WHERE email = '$email' AND password = md5('$pass')") or die(mysql_error());
if(mysql_num_rows($check) >= 1){
	while($row = mysql_fetch_array($check)){
		session_start();
		$_SESSION['nisn'] = $row['nisn'];
		$_SESSION['nama'] = $row['nama'];
		$_SESSION['no_peserta'] = $row['no_peserta'];
		?>
	    <script>alert("Selamat Datang <?= $row['nama']; ?> Kamu Telah Login Ke Halaman User !!!");
				window.location.href="../index.php"</script>
				<?php
	}	
}else{
    echo '<script>alert("Masukan Username dan Password dengan Benar !!!");
				window.location.href="login.php"</script>';
}
?>