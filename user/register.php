<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>PSB Online | SMK Mandiri Bojonggede</title>
  <link rel="shortcut icon" href="../images/logo.ico">
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="../admin/bootstrap/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../admin/dist/css/AdminLTE.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="../admin/plugins/iCheck/square/blue.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>
<body class="hold-transition register-page">
<div class="register-box">
  <div class="login-logo">
    <b>PSB </b>Online
  </div>

  <div class="register-box-body">
    <p class="login-box-msg">Daftar Untuk Masuk Ke Halaman User.</p>

    <form action="register_action.php" method="post" id="register">
      <div class="form-group has-feedback">
        <input type="text" name="nisn" class="form-control number" placeholder="NISN" minlength="10" maxlength="10" required>
      </div>
      <div class="form-group has-feedback">
        <input type="text" name="nama" id="nama" class="form-control" placeholder="Nama Lengkap" required>
      </div>
      <div class="form-group has-feedback">
        <input type="email" name="email" class="form-control email" placeholder="E-Mail" required>
      </div>
      <div class="form-group has-feedback">
        <input type="password" name="password" class="form-control" placeholder="Password" required>
      </div>
      <div class="row">
        <!-- /.col -->
        <div class="col-xs-4">
          <button type="submit" class="btn btn-primary btn-block btn-flat">Daftar</button>
        </div>
        <!-- /.col -->
      </div>
    </form>
  </div>
  <!-- /.form-box -->
</div>
<!-- /.register-box -->

<!-- jQuery 2.2.3 -->
<script src="../admin/plugins/jQuery/jquery-2.2.3.min.js"></script>
<!-- Bootstrap 3.3.6 -->
<script src="../admin/bootstrap/js/bootstrap.min.js"></script>
<!-- iCheck -->
<script src="../admin/plugins/iCheck/icheck.min.js"></script>
<script>
  $(function () {
    $('input').iCheck({
      checkboxClass: 'icheckbox_square-blue',
      radioClass: 'iradio_square-blue',
      increaseArea: '20%' // optional
    });
  });
</script>

<!-- jQuery Validate Only Alphabate & Spaces -->
<script>
$('#nama').keypress(function (e) {
        var regex = new RegExp(/^[a-zA-Z\s]+$/);
        var str = String.fromCharCode(!e.charCode ? e.which : e.charCode);
        if (regex.test(str)) {
            return
            true;        
            } else {
        e.preventDefault();
        alert('Hanya Boleh Huruf dan Spasi !!!');
        return
        false;
                }
                    });
</script>

<!-- jQuery Validate -->
<script type="text/javascript" src="../js/jquery.validate.js"></script>
<script>
$(document).ready(function(){
    $("#register").validate();
});
</script>

<style type="text/css">
label.error {
    color: red;
    padding-left: .5em;
}
</style>
</body>
</html>
