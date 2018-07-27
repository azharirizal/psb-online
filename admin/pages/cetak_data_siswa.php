  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
      Cetak Data Siswa
      </h1>
      <ol class="breadcrumb">
        <li><a href="index.php"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Cetak Data Siswa</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
      <div class="box box-primary">
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>NO</th>
                  <th>NISN</th>
                  <th>NAMA SISWA</th>
                  <th>TTL</th>
                  <th>JENIS KELAMIN</th>
                  <th>TELEPON SISWA</th>
                  <th>AKSI</th>
                </tr>
                </thead>
<tbody>
<?php
$no=0;
$sql = mysql_query("SELECT * FROM psb_biodata ORDER BY bio_id");
?>

<?php
while ($row=mysql_fetch_array($sql))
{

$sql1 = mysql_query("SELECT * FROM psb_calon_siswa WHERE nisn='$row[nisn]'");
$row1 = mysql_fetch_array($sql1);

?>

  <tr>
  <td align="center"><?php echo $no=$no+1;?></td>
  <td><?php echo $row['nisn'];?></td>
  <td><?php echo $row['nm_siswa'];?></td>
  <td><?php echo $row['tmp_lahir'],', ',$row['tgl_lahir'];?></td>
  <td><?php echo $row['jns_kelamin'];?></td>
  <td><?php echo $row['hp_siswa'];?></td>
  <td><a href="pages/cetak/cetak_biodata.php?id=<?=$row['nisn'];?>" class="btn btn-primary" role="button" title="Cetak Data" target="_blank"><i class="glyphicon glyphicon-print"></i> Cetak</a></td>
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