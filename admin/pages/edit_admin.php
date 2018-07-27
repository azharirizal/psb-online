<?php
$tampil="SELECT * FROM psb_admin WHERE admin_id='".$_GET['id']."'";
$query=mysql_query($tampil) or die ("Gagal".mysql_error());
$row=mysql_fetch_array($query);
?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
      Ubah Admin
      </h1>
      <ol class="breadcrumb">
        <li><a href="index.php"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Ubah Admin</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <!-- left column -->
        <div class="col-md-12">
          <!-- general form elements -->
          <div class="box box-primary">
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" method="post" action="pages/edit_admin_proses.php" enctype ="multipart/form-data">
              <div class="box-body">
                <div class="form-group">
                  <input type="hidden" name="admin_id" value="<?php echo $row['admin_id']; ?>">
                  <label>Username</label>
                  <input type="text" name="username" value="<?php echo $row['username']; ?>" class="form-control" placeholder="Username">
                </div>
                <div class="form-group">
                  <label>Password</label>
                  <input type="password" name="password" class="form-control" placeholder="Ketik Ulang Password">
                </div>
                <div class="form-group">
                  <label for="exampleInputFile">Upload Foto</label>
                  <input type="file" name="profil">
                  <p class="help-block">Contoh : admin.jpg</p>
                  <hr>
                  <p>Foto Sebelumnya :</p>
                  <img src="images/profil/<?php echo $row['profil']; ?>" width="50" height="50">
                </div>
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Update</button>
              </div>
            </form>
          </div>
          <!-- /.box -->
        </div>
      </div>
    </section>