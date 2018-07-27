<?php
session_start();
error_reporting(0);
include "../conf/connect.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>PSB Online | SMK Mandiri Bojonggede</title>
    
    <!-- core CSS -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link href="../css/font-awesome.min.css" rel="stylesheet">
    <link href="../css/animate.min.css" rel="stylesheet">
    <link href="../css/prettyPhoto.css" rel="stylesheet">
    <link href="../css/main.css" rel="stylesheet">
    <link href="../css/responsive.css" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->
    <link rel="shortcut icon" href="../images/logo.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png">
</head><!--/head-->

<body class="homepage">

    <header id="header">
        <div class="top-bar">
            <div class="container">
                <div class="row">
                    <div class="col-sm-2 col-xs-4">
                        <div class="top-number"><p><i class="glyphicon glyphicon-phone-alt"></i> - 087770335439 -</p></div>
                    </div>
                    <div class="col-sm-4 col-xs-4">
                        <div class="top-number"><p><i class="glyphicon glyphicon-envelope"></i>  - smkmandiribjnggd@gmail.com -</p></div>
                    </div>
                    <div class="col-sm-6 col-xs-8">
                       <div class="social">
                            <ul class="social-share">
                                <li><a href="https://www.facebook.com" title="Facebook" target="_blank"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="https://twitter.com" title="Twitter" target="_blank"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="https://instagram.com" title="Instagram" target="_blank"><i class="fa fa-instagram"></i></a></li>
                            </ul>
                       </div>
                    </div>
                </div>
            </div><!--/.container-->
        </div><!--/.top-bar-->

        <nav class="navbar navbar-inverse" role="banner">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="../index.php"><img src="../images/logo-sekolah.png" alt="logo"></a>
                </div>
            <?php
            if (!isset($_SESSION['nisn'])) {
            ?>
                <div class="collapse navbar-collapse navbar-right">
                    <ul class="nav navbar-nav">
                        <li><a href="../index.php">Beranda</a></li>
                        <li><a href="../index.php?page=profil">Profil</a></li>
                        <li><a href="../index.php?page=fasilitas">Fasilitas</a></li>
                        <li><a href="../index.php?page=pendaftar">Pendaftar</a></li>
                        <li><a href="../index.php?page=pengumuman">Pengumuman</a></li>
                        <li><a href="../index.php?page=informasi">Informasi</a></li>
                        <li><a href="login.php">Log In</a></li>
                        <li><a href="register.php">Sign Up</a></li>                      
                    </ul>
                </div>
            <?php 
            }
            else {
            ?> 
                <div class="collapse navbar-collapse navbar-right">
                    <ul class="nav navbar-nav">
                        <li><a href="../index.php">Akun</a></li>
                        <li><a href="pembayaran.php">Pembayaran</a></li>
                        <li><a href="../index.php?page=prosedur">Prosedur</a></li>
                        <li><a href="../index.php?page=pendaftar">Pendaftar</a></li>
                        <li><a href="../index.php?page=pengumuman">Pengumuman</a></li>
                        <li><a href="../index.php?page=informasi">Informasi</a></li>
                        <li><a href="logout.php">Log Out</a></li>                     
                    </ul>
                </div>
            <?php } ?>
            </div><!--/.container-->
        </nav><!--/nav-->
        
    </header><!--/header-->

<!--/.content-->

<?php
$sql    = mysql_query("SELECT * FROM psb_biodata WHERE nisn = '$_SESSION[nisn]'")or die(mysql_error());
$row    = mysql_fetch_array($sql);
?>

<script type="text/javascript" src="../js/jquery-2.2.3.min.js"></script>
<script type="text/javascript" src="../js/jquery.validate.js"></script>

    <section id="feature" class="transparent-bg">
        <div class="container">
           <div class="center wow fadeInDown">
                <h2>Formulir Pendaftaran</h2>
           </div>
<div class="col-md-6">
<div class="jumbotron">
<form class="form-horizontal" method="post" action="user/biodata_proses.php" role="form" id="biodata">
  <h3 align="center" class="text-success">DATA PRIBADI SISWA</h3>
  <div class="form-group">     
  <label>NISN :</label>
       <input type="text" class="form-control" name="nisn" value="<?= $row['nisn']?>" placeholder="NISN" required>
  </div>
  <div class="form-group">
  <label>Nama Siswa :</label>
       <input type="text" class="form-control" name="nm_siswa" value="<?= $row['nm_siswa']?>" placeholder="NAMA SISWA" required>
  </div>
  <div class="form-group">
  <label>Tempat Lahir :</label>
       <input type="text" class="form-control" name="tmp_lahir" value="<?= $row['tmp_lahir']?>" placeholder="TEMPAT LAHIR" required>
  </div>
  <div class="form-group">
  <label>Tanggal Lahir :</label>
       <input type="date" class="form-control" name="tgl_lahir" value="<?= $row['tgl_lahir']?>" placeholder="TANGGAL LAHIR" required>
  </div>
  <div class="form-group">
  <label>Jenis Kelamin :</label>
  </div>
  <label class="radio-inline">
  <input type="radio" name="jns_kelamin" value="Laki-laki">Laki-laki</label>
  <label class="radio-inline">
  <input type="radio" name="jns_kelamin" value="Perempuan">Perempuan</label>
  <div class="form-group">   
  <label for="sel1">Agama :</label>   
  <select class="form-control" name="agama" id="sel1">
  <option>ISLAM</option>
  <option>KRISTEN PROTESTAN</option>
  <option>KRISTEN KATOLIK</option>
  <option>BUDHA</option>
  <option>HINDU</option>
  </select>
  </div>
  <div class="form-group">
  <label>Anak keberapa :</label>
       <input type="text" class="form-control" name="ank_ke" value="<?= $row['ank_ke']?>" placeholder="ANAK KEBERAPA" required>
  </div>
  <div class="form-group">
  <label>Dari berapa :</label>
       <input type="text" class="form-control" name="jml_saudara" value="<?= $row['ank_ke']?>" placeholder="DARI ANAK BERAPA" required>
  </div>
  <div class="form-group">   
  <label for="sel1">Status Anak :</label>   
  <select class="form-control" name="sts_siswa" id="sel1">
  <option>KANDUNG</option>
  <option>TIRI</option>
  <option>ASUH</option>
  </select>
  </div>
  <div class="form-group">
  <label>Nomor Telepon :</label>
       <input type="text" class="form-control" name="hp_siswa" value="<?= $row['hp_siswa']?>" placeholder="NOMOR TELEPON" required>
  </div>
  <h3 align="center" class="text-success">KETERANGAN TEMPAT TINGGAL</h3>
  <div class="form-group">
  <label>Tinggal Dengan :</label>
       <input type="text" class="form-control" name="tmpt_siswa" value="<?= $row['tmpt_siswa']?>" placeholder="TINGGAL DENGAN" required>
  </div>
  <div class="form-group">
  <label for="comment">Alamat :</label>
       <textarea class="form-control" name="almt_siswa" rows="5" id="comment" placeholder="ALAMAT SISWA" required><?= $row['almt_siswa']?></textarea>
  </div>
  <div class="form-group">   
  <label for="sel1">Pergi Kesekolah Dengan :</label>   
  <select class="form-control" name="kendaraan" id="sel1">
  <option>MOBIL</option>
  <option>MOTOR</option>
  <option>KENDARAAN UMUM</option>
  <option>JALAN KAKI</option>
  </select>
  </div>
</div>
</div>

<div class="col-md-6">
<div class="jumbotron">
  <h3 align="center" class="text-success">KETERANGAN JASMANI</h3>
  <div class="form-group" id="biodata">
  <label>Berat Badan :</label>
       <input type="text" class="form-control" name="brt_badan" value="<?= $row['brt_badan']?>" placeholder="BERAT BADAN" required>
  </div>
  <div class="form-group">
  <label>Tinggi Badan :</label>
       <input type="text" class="form-control" name="tgi_badan" value="<?= $row['tgi_badan']?>" placeholder="TINGGI BADAN" required>
  </div>
  <div class="form-group">   
  <label for="sel1">Golongan Darah :</label>   
  <select class="form-control" name="gol_darah" id="sel1">
  <option>A</option>
  <option>B</option>
  <option>O</option>
  <option>AB</option>
  </select>
  </div>
  <h3 align="center" class="text-success">KETERANGAN ORANGTUA</h3>
  <div class="form-group">     
  <label>Nama Ayah :</label>
       <input type="text" class="form-control" name="nm_ayah" value="<?= $row['nm_ayah']?>" placeholder="NAMA AYAH" required>
  </div>
  <div class="form-group">     
  <label>Pekerjaan Ayah :</label>
       <input type="text" class="form-control" name="kerja_ayah" value="<?= $row['kerja_ayah']?>" placeholder="PEKERJAAN AYAH" required>
  </div>
  <div class="form-group">     
  <label>Nama Ibu :</label>
       <input type="text" class="form-control" name="nm_ibu" value="<?= $row['nm_ibu']?>" placeholder="NAMA IBU" required>
  </div>
  <div class="form-group">     
  <label>Pekerjaan Ibu :</label>
       <input type="text" class="form-control" name="kerja_ibu" value="<?= $row['kerja_ibu']?>" placeholder="PEKERJAAN IBU" required>
  </div>
  <div class="form-group">
  <label for="comment">Alamat Orangtua:</label>
       <textarea class="form-control" name="almt_ortu" rows="5" id="comment" placeholder="ALAMAT ORANGTUA" required><?= $row['almt_ortu']?></textarea>
  </div>
  <div class="form-group">     
  <label>Penghasilan Orangtua :</label>
       <input type="text" class="form-control" name="hasil_ortu" value="<?= $row['hasil_ortu']?>" placeholder="PENGHASILAN ORANGTUA" required>
  </div>
  <div class="form-group">     
  <label>Tanggungan Biaya Pendidikan :</label>
       <input type="text" class="form-control" name="tgung_biaya" value="<?= $row['tgung_biaya']?>" placeholder="TANGGUNGAN BIAYA PENDIDIKAN OLEH" required>
  </div>
  <div class="form-group">
  <label>Nomor Telepon Orangtua :</label>
       <input type="text" class="form-control" name="hp_ortu" value="<?= $row['hp_ortu']?>" placeholder="NOMOR TELEPON ORANGTUA" required>
  </div>
</div>
</div>
<div class="col-md-6">
  <div class="form-group">
  <button type="submit" class="btn btn-primary" title="Klik untuk menyimpan semua data.">SUBMIT</button>
  </div>
</div>
</form>
</div>
</section>

    <footer id="footer" class="midnight-blue">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    Copyright &copy; 2018 <a target="_blank" href="http://shapebootstrap.net/" title="shapebootstrap.net">Muhamad Rizal Azhari</a>. All Rights Reserved.
                </div>
            </div>
        </div>
    </footer><!--/#footer-->
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/jquery.prettyPhoto.js"></script>
    <script src="../js/jquery.isotope.min.js"></script>
    <script src="../js/main.js"></script>
    <script src="../js/wow.min.js"></script>
</body>
</html>

<!-- jQuery Validate -->
<script>
$(document).ready(function(){
    $("#biodata").validate();
});
</script>

<style type="text/css">
label.error {
    color: red;
    padding-left: .5em;
}
</style>