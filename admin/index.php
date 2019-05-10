<?php
session_start();
error_reporting(0);
include "conf/connect.php";
include "conf/function_all.php";
if(isset($_SESSION['admin_id'])==0){
echo '<script>alert("Anda Harus Login Terlebih Dahulu !!!");
                window.location.href="pages/login.php"</script>';
}else{

?>

<!-- Designed By Muhamad Rizal Azhari -->
<!-- https://bit.ly/2vBKb8Y -->

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>PSB Online - ADMIN | SMK Mandiri Bojonggede</title>
  <link rel="shortcut icon" href="../images/logo.ico">
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="dist/css/skins/_all-skins.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="plugins/iCheck/flat/blue.css">
  <!-- Morris chart -->
  <link rel="stylesheet" href="plugins/morris/morris.css">
  <!-- jvectormap -->
  <link rel="stylesheet" href="plugins/jvectormap/jquery-jvectormap-1.2.2.css">
  <!-- Date Picker -->
  <link rel="stylesheet" href="plugins/datepicker/datepicker3.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">
  <!-- bootstrap wysihtml5 - text editor -->
  <link rel="stylesheet" href="plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">

  <link rel="stylesheet" href="css/scroll.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <header class="main-header">
    <!-- Logo -->
    <a href="index.php" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>PSB</b></span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>PSB </b>Online</span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>
      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- User Account: style can be found in dropdown.less -->
        <?php
        $tampil = mysql_query("SELECT * FROM psb_admin WHERE admin_id='$_SESSION[admin_id]'");
        $row = mysql_fetch_array($tampil);
        ?>
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="images/profil/<?php echo $row['profil']; ?>"class="user-image" alt="User Image">
              <span class="hidden-xs"><?php echo $row['username']; ?></span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <img src="images/profil/<?php echo $row['profil']; ?>" class="img-circle" alt="User Image">

                <p>
                  <?php echo $row['username']; ?>
                  <small>Sebagai Administrator</small>
                </p>
              </li>
              <li class="user-footer">
                <div class="pull-right">
                  <a href="pages/logout.php" onclick="return confirm('Kamu yakin mau Log Out ?');" class="btn btn-default btn-flat">Log Out</a>
                </div>
              </li>
            </ul>
          </li>
        </ul>
      </div>
    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="images/profil/<?php echo $row['profil']; ?>" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p><?php echo $row['username']; ?></p>
          <i class="fa fa-circle text-success"></i> Online
        </div>
      </div>
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu">
        <li class="header">MENU UTAMA</li>
        <li class="treeview">
          <a href="index.php">
            <i class="glyphicon glyphicon-home"></i> <span>Beranda</span>
		      </a>
        </li>
        <li class="header">MENU KELOLA</li> 
        <li><a href="index.php?page=data_admin"><i class="glyphicon glyphicon-user"></i> <span>Data Admin</span></a></li>
        <li class="treeview">
          <a href="#">
            <i class="glyphicon glyphicon-education"></i>
            <span>Kelola Calon Siswa</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="index.php?page=data_siswa"><i class="glyphicon glyphicon-minus"></i>Data Siswa</a></li>
            <li><a href="index.php?page=berkas_siswa"><i class="glyphicon glyphicon-minus"></i>Berkas Siswa</a></li>
          </ul>
        </li>
        <li><a href="index.php?page=data_pembayaran"><i class="glyphicon glyphicon-usd"></i> <span>Kelola Data Pembayaran</span></a></li>
        <li class="header">MENU CETAK</li>
        <li><a href="index.php?page=cetak_pembayaran_perperiode"><i class="glyphicon glyphicon-file"></i> <span>Cetak Data Pembayaran</span></a></li>
        <li class="treeview">
          <a href="#">
            <i class="glyphicon glyphicon-duplicate"></i>
            <span>Cetak Data Siswa</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="index.php?page=cetak_data_siswa"><i class="glyphicon glyphicon-minus"></i>Cetak Data Siswa</a></li>
            <li><a href="index.php?page=cetak_data_siswa_perperiode"><i class="glyphicon glyphicon-minus"></i>Cetak Data Siswa Perperiode</a></li>
          </ul>
        </li>
        <li class="header">MENU USER</li>
        <li><a href="pages/logout.php" onclick="return confirm('Kamu yakin mau Log Out ?');"><i class="glyphicon glyphicon-lock"></i> <span>Log Out</span></a></li>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>

<!--Content-->

<?php include "conf/page.php"; ?>

<!--Content-->

  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <div align="center">
    <strong>Copyright &copy; 2018 <a href="https://bit.ly/2vBKb8Y" target="_blank" title="Link to Profile Creator">Muhamad Rizal Azhari</a>.</strong> All Rights
    Reserved.
    </div>
  </footer>
</div>
<!-- ./wrapper -->

<!-- jQuery 2.2.3 -->
<script src="plugins/jQuery/jquery-2.2.3.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button);
</script>
<!-- Bootstrap 3.3.6 -->
<script src="bootstrap/js/bootstrap.min.js"></script>
<!-- Morris.js charts -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
<script src="plugins/morris/morris.min.js"></script>
<!-- Sparkline -->
<script src="plugins/sparkline/jquery.sparkline.min.js"></script>
<!-- jvectormap -->
<script src="plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
<!-- jQuery Knob Chart -->
<script src="plugins/knob/jquery.knob.js"></script>
<!-- daterangepicker -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.11.2/moment.min.js"></script>
<script src="plugins/daterangepicker/daterangepicker.js"></script>
<!-- datepicker -->
<script src="plugins/datepicker/bootstrap-datepicker.js"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
<!-- Slimscroll -->
<script src="plugins/slimScroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="plugins/fastclick/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/app.min.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="dist/js/pages/dashboard.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>

</body>
</html>

<?php } ?>
