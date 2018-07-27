<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
      Berkas Siswa
      </h1>
      <ol class="breadcrumb">
        <li><a href="index.php"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Berkas Siswa</li>
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
                  <th>IJAZAH</th>
                  <th>FOTO</th>
                  <th>NILAI</th>
                  <th>SKHUN</th>
                  <th></th>
                </tr>
                </thead>
<tbody>
<?php
$no=0;
$tampil = mysql_query("SELECT * FROM psb_biodata ORDER BY bio_id");
?>

<?php
while ($row=mysql_fetch_array($tampil))
{
?>

  <tr>
  <td align="center"><?php echo $no=$no+1;?></td>
  <td><?php echo $row['nisn'];?></td>
  <td><?php echo $row['nm_siswa'];?></td>
  <td><a href="../images/ijazah/<?php echo $row['ijazah']; ?>" target="_blank" title="LIHAT IJAZAH"><img src="../images/ijazah/<?php echo $row['ijazah']; ?>" width="50" height="90"></a></td>
  <td><a href="../images/foto/<?php echo $row['foto']; ?>" target="_blank" title="LIHAT FOTO"><img src="../images/foto/<?php echo $row['foto']; ?>" width="50" height="90"></a></td>
  <td><a href="../images/nilai/<?php echo $row['nilai']; ?>" target="_blank" title="LIHAT NILAI"><img src="../images/nilai/<?php echo $row['nilai']; ?>" width="50" height="90"></a></td>
  <td><a href="../images/skhun/<?php echo $row['skhun']; ?>" target="_blank" title="LIHAT SKHUN"><img src="../images/skhun/<?php echo $row['skhun']; ?>" width="50" height="90"></a></td>
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