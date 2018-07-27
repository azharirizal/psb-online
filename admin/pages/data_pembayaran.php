  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
      Data Pembayaran
      </h1>
      <ol class="breadcrumb">
        <li><a href="index.php"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Data Pembayaran</li>
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
                  <th>NAMA BANK</th>
                  <th>ATAS NAMA</th>
                  <th>JUMLAH</th>
                  <th>BANK TUJUAN</th>
                  <th>BUKTI TRANSFER</th>
                </tr>
                </thead>
<tbody>
<?php
$no=0;
$sql = mysql_query("SELECT * FROM psb_bayar ORDER BY kode_bayar");
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
  <td><?php echo $row1['nama'];?></td>
  <td><?php echo $row['bank'];?></td>
  <td><?php echo $row['atas_nama'];?></td>
  <td>Rp. <?php echo $row['jumlah'];?></td>
  <td><?php echo $row['bank_tujuan'];?></td>
  <td><a href="../images/struk/<?php echo $row['gambar']; ?>" target="_blank" title="LIHAT BUKTI TRANSFER"><img src="../images/struk/<?php echo $row['gambar']; ?>" width="140" height="150"></a></td>
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