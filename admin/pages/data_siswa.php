<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Data Siswa
      </h1>
      <ol class="breadcrumb">
        <li><a href="index.php"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Data Siswa</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="table-responsive">
            <!-- /.box-header -->
            <div class="box-body no-padding">
              <table class="table table-striped table-bordered">
                <tr>
                  <th>NO</th>
                  <th>NISN</th>
                  <th>NAMA SISWA</th>
                  <th>TTL</th>
                  <th>JENIS KELAMIN</th>
                  <th>AGAMA</th>
                  <th>ANAK KE</th>
                  <th>JUMLAH SAUDARA</th>
                  <th>STATUS</th>
                  <th>TELEPON SISWA</th>
                  <th>ALAMAT SISWA</th>
                  <th>TINGGAL DENGAN</th>
                  <th>KENDARAAN</th>
                  <th>BERAT</th>
                  <th>TINGGI</th>
                  <th>GOLONGAN DARAH</th>
                  <th>NAMA AYAH</th>
                  <th>NAMA IBU</th>
                  <th>ALAMAT ORANGTUA</th>
                  <th>TELEPON ORANGTUA</th>
                  <th>KERJA AYAH</th>
                  <th>KERJA IBU</th>
                  <th>PENDAPATAN ORANGTUA</th>
                  <th>BIAYA PENDIDIKAN</th>
                  <th>VERIFIKASI</th>
                  <th>SELEKSI</th>
                  <th colspan="2">UBAH STATUS</th>
                </tr>
<?php
$no=0;
$sql = mysql_query("SELECT * FROM psb_biodata ORDER BY bio_id");
?>

<?php
while ($row=mysql_fetch_array($sql))
{

$sql1 = mysql_query("SELECT * FROM psb_calon_siswa WHERE nisn='$row[nisn]'");
$row1 = mysql_fetch_array($sql1);

    if  ($row1['sts_verifikasi']==0){
      $ver = "Belum";
    }
    else{
      $ver = "Sudah";
    }

    if  ($row1['sts_seleksi']==0){
      $sel = "Dalam Proses";
    }
    else{
      $sel = "Diterima";
    }
?>

  <tr>
  <td align="center"><?php echo $no=$no+1;?></td>
  <td><?php echo $row['nisn'];?></td>
  <td><?php echo $row['nm_siswa'];?></td>
  <td><?php echo $row['tmp_lahir'],', ',$row['tgl_lahir'];?></td>
  <td><?php echo $row['jns_kelamin'];?></td>
  <td><?php echo $row['agama'];?></td>
  <td><?php echo $row['ank_ke'];?></td>
  <td><?php echo $row['jml_saudara'];?></td>
  <td><?php echo $row['sts_siswa'];?></td>
  <td><?php echo $row['hp_siswa'];?></td>
  <td><?php echo $row['almt_siswa'];?></td>
  <td><?php echo $row['tmpt_siswa'];?></td>
  <td><?php echo $row['kendaraan'];?></td>
  <td><?php echo $row['brt_badan'];?></td>
  <td><?php echo $row['tgi_badan'];?></td>
  <td><?php echo $row['gol_darah'];?></td>
  <td><?php echo $row['nm_ayah'];?></td>
  <td><?php echo $row['nm_ibu'];?></td>
  <td><?php echo $row['almt_ortu'];?></td>
  <td><?php echo $row['hp_ortu'];?></td>
  <td><?php echo $row['kerja_ayah'];?></td>
  <td><?php echo $row['kerja_ibu'];?></td>
  <td><?php echo $row['hasil_ortu'];?></td>
  <td><?php echo $row['tgung_biaya'];?></td>
  <td><?php echo $ver;?></td>
  <td><?php echo $sel;?></td>
  <td><a href="pages/ubah_status_verifikasi.php?ver=<?=$row1['sts_verifikasi'];?>&id=<?=$row['nisn'];?>"><button type="button" class="btn btn-primary" title="Ubah Verifikasi Data Siswa">VERIFIKASI</button></a></td>
  <td><a href="pages/ubah_status_seleksi.php?sel=<?=$row1['sts_seleksi'];?>&id=<?=$row['nisn'];?>"><button type="button" class="btn btn-success" title="Ubah Seleksi Data Siswa">SELEKSI</button></td>
  </tr>
<?php } ?>
              </table>
            </div>
            <!-- /.box-body -->
        </div>
        <!-- /.responsive -->
      </div>
      <!-- /.col -->
    </div>
     <!-- /.row -->
  </section>
   <!-- /.content -->