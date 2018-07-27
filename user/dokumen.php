    <section id="feature" class="transparent-bg">
        <div class="container">
           <div class="center wow fadeInDown">
                <h2>UPLOAD DOKUMEN & BERKAS</h2>
           </div>
<?php
$sql    = mysql_query("SELECT * FROM psb_biodata WHERE nisn = '$_SESSION[nisn]'")or die(mysql_error());
$row    = mysql_fetch_array($sql);
?>
<div class="col-lg-12">
<div class="jumbotron">
<form class="form-inline" action="user/dokumen_proses.php" method="post" enctype="multipart/form-data" role="form">
  <div class="form-group">
  <label class="text-success">UPLOAD SCAN IJAZAH : </label>
  </div><input type="file" name="ijazah"><br>
  <div>
  LIHAT GAMBAR :
  <a href="images/ijazah/<?php echo $row['ijazah']; ?>" target="_blank"><?php echo $row['ijazah']; ?></a>
  </div>
  <div class="form-group">
  <label class="text-success">UPLOAD SCAN SKHUN : </label>
  </div><input type="file" name="skhun"><br>
  <div>
  LIHAT GAMBAR :
  <a href="images/skhun/<?php echo $row['skhun']; ?>" target="_blank"><?php echo $row['skhun']; ?></a>
  </div>
  <div class="form-group">
  <label class="text-success">UPLOAD SCAN NILAI SEMESTER 5 : </label>
  </div><input type="file" name="nilai"><br>
  <div>
  LIHAT GAMBAR :
  <a href="images/nilai/<?php echo $row['nilai']; ?>" target="_blank"><?php echo $row['nilai']; ?></a>
  </div>
  <div class="form-group">
  <label class="text-success">UPLOAD SCAN FOTO DIRI : </label>
  </div><input type="file" name="foto"><br>
  <div>
  LIHAT GAMBAR :
  <a href="images/foto/<?php echo $row['foto']; ?>" target="_blank"><?php echo $row['foto']; ?></a>
  </div>
  <div class="form-group">
  <button type="submit" class="btn btn-primary" title="Klik untuk menyimpan semua data.">SUBMIT</button>
  </div>
</form>
</div>
</div>
</div>
</section>