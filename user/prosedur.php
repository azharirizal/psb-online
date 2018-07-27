    <section id="blog" class="container">
        <div class="center">
            <h2>Prosedur</h2>
            <p class="lead">Prosedur SMK Mandiri Bojonggede</p>
        </div>
<?php
include "conf/connect.php";
$query= mysql_query("SELECT * FROM psb_log WHERE nisn='$_SESSION[nisn]'");
$row=mysql_fetch_array($query);
?>
      <br/><br/>
      <div class="center">
      <table class="table table-striped" width="50%" border="0" align="center">
        <tr>
          <td><img src="images/prosedur/<?php echo $row['pendaftaran']; ?>" width="28" height="50" /></td>
          <td><strong><h4><b>Proses Pendaftaran</b></h4></strong></td>
        </tr>
        <tr><td><br></td></tr>
        <tr>
          <td><img src="images/prosedur/<?php echo $row['biodata']; ?>" width="28" height="50" /></td>
          <td><strong><h4><b>Proses Mengisi Biodata & Upload Berkas</b></h4></strong></td>
        </tr>
        <tr><td><br></td></tr>
        <tr>
          <td><img src="images/prosedur/<?php echo $row['verifikasi']; ?>" width="28" height="50" /></td>
          <td width="97%"><strong><h4><b>Proses Verifikasi Data</b></h4></strong></td>
        </tr>
        <tr><td><br></td></tr>
        <tr>
          <td><img src="images/prosedur/<?php echo $row['pembayaran']; ?>" width="28" height="50" /></td>
          <td width="97%"><strong><h4><b>Proses Pembayaran</b></h4></strong></td>
        </tr>
      </table><br/><br/><br/>
      </div>
</section>