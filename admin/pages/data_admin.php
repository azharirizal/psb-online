  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
      Data Admin
      </h1>
      <ol class="breadcrumb">
        <li><a href="index.php"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Data Admin</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
      <div class="box box-primary">
        <div class="box-header">
          <a href="index.php?page=tambah_admin" class="btn btn-primary" role="button" title="Tambah Data"><i class="glyphicon glyphicon-plus"></i> Tambah</a>
          </div>
            <div class="box-body">
              <table id="example1" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>NO</th>
                  <th>USERNAME</th>
                  <th>PASSWORD</th>
                  <th>FOTO PROFIL</th>
                  <th colspan="2">AKSI</th>
                </tr>
                </thead>
<tbody>
<?php
$no=0;
$tampil = mysql_query("SELECT * FROM psb_admin ORDER BY admin_id");
?>

<?php
while ($row=mysql_fetch_array($tampil))
{
?>

  <tr>
  <td align="center"><?php echo $no=$no+1;?></td>
  <td><?php echo $row['username'];?></td>
  <td><?php echo $row['password'];?></td>
  <td><img src="images/profil/<?php echo $row['profil']; ?>" width="50" height="50"></td>
  <td><a href="index.php?page=edit_admin&id=<?=$row['admin_id'];?>" class="btn btn-success" role="button" title="Ubah Data"><i class="glyphicon glyphicon-edit"></i> Ubah</a></td>
  <td><a href="pages/hapus_admin.php?id=<?=$row['admin_id'];?>" class="btn btn-danger" role="button" title="Hapus Data" onclick="return confirm('Kamu yakin mau menghapus data ini ?');"><i class="glyphicon glyphicon-trash"></i> Hapus</a></td>
  </tr>
<?php } ?>
                </tbody>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->