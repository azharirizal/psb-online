<?php
session_start();
error_reporting(0);
include "conf/connect.php";
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
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/animate.min.css" rel="stylesheet">
    <link href="css/prettyPhoto.css" rel="stylesheet">
    <link href="css/main.css" rel="stylesheet">
    <link href="css/responsive.css" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->
    <link rel="shortcut icon" href="images/logo.ico">
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
                    <a class="navbar-brand" href="index.php"><img src="images/logo-sekolah.png" alt="logo"></a>
                </div>
            <?php
            if (!isset($_SESSION['nisn'])) {
            ?>
                <div class="collapse navbar-collapse navbar-right">
                    <ul class="nav navbar-nav">
                        <li><a href="index.php">Beranda</a></li>
                        <li><a href="index.php?page=profil">Profil</a></li>
                        <li><a href="index.php?page=fasilitas">Fasilitas</a></li>
                        <li><a href="index.php?page=pendaftar">Pendaftar</a></li>
                        <li><a href="index.php?page=pengumuman">Pengumuman</a></li>
                        <li><a href="index.php?page=informasi">Informasi</a></li>
                        <li><a href="user/login.php">Log In</a></li>
                        <li><a href="user/register.php">Sign Up</a></li>                      
                    </ul>
                </div>
            <?php 
            }
            else {
            ?> 
                <div class="collapse navbar-collapse navbar-right">
                    <ul class="nav navbar-nav">
                        <li><a href="index.php">Akun</a></li>
                        <li><a href="user/pembayaran.php">Pembayaran</a></li>
                        <li><a href="index.php?page=prosedur">Prosedur</a></li>
                        <li><a href="index.php?page=pendaftar">Pendaftar</a></li>
                        <li><a href="index.php?page=pengumuman">Pengumuman</a></li>
                        <li><a href="index.php?page=informasi">Informasi</a></li>
                        <li><a href="user/logout.php">Log Out</a></li>                     
                    </ul>
                </div>
            <?php } ?>
            </div><!--/.container-->
        </nav><!--/nav-->
        
    </header><!--/header-->

<!--/.content-->
    
<?php include "conf/page.php"; ?>

    <footer id="footer" class="midnight-blue">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    Copyright &copy; 2018 <a href="https://www.instagram.com/rizal_azharii/" target="_blank" title="Link to Profile Creator">Muhamad Rizal Azhari</a>. All Rights Reserved.
                </div>
            </div>
        </div>
    </footer><!--/#footer-->

    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.prettyPhoto.js"></script>
    <script src="js/jquery.isotope.min.js"></script>
    <script src="js/main.js"></script>
    <script src="js/wow.min.js"></script>
</body>
</html>