<head>
  <title>Cetak PDF</title>
    
   <style>
   table {border-collapse:collapse; table-layout:fixed;width: 630px;}
   table td {word-wrap:break-word;width: 20%;}
   th, td {
    text-align: left;
    padding: 8px;
}

tr:nth-child(odd) {background: #999966}
tr:nth-child(even) {background: #CC6600}

th {
    background-color: #47A219;
    color: white;
}
   </style>
</head>
<body>
  
<img src="../../../images/logo-sekolah.png" width="280" height="80">
<br>
<div style="text-align:right;font-weight:bold;font-size:20px;margin:0 auto;width:100%;">Laporan Per-Periode Pembayaran</div>
<div style="text-align:right;font-weight:bold;font-size:18px;margin:0 auto;width:100%;">SMK Mandiri Bojonggede</div>
<br>
<table width="100%" border="0" align="center">
<tr>
  <th align="center">NISN</th>
  <th align="center">NAMA BANK</th>
  <th align="center">ATAS NAMA</th>
  <th align="center">JUMLAH</th>
  <th align="center">BANK TUJUAN</th>
</tr>
<?php
// Load file koneksi.php
include "../../conf/connect.php";
$tawal=$_POST["tawal"];
$takhir=$_POST["takhir"];
$format_tawal = date("Y-m-d", strtotime($tawal));
$format_takhir = date("Y-m-d", strtotime($takhir));

$format_tawal2 = date("d-m-Y", strtotime($tawal));
$format_takhir2 = date("d-m-Y", strtotime($takhir));
$sql = mysql_query("SELECT * FROM psb_calon_siswa INNER JOIN psb_bayar ON psb_calon_siswa.nisn=psb_bayar.nisn WHERE (psb_calon_siswa.tgl_daftar BETWEEN '$format_tawal' AND '$format_takhir')")or die(mysql_error());
$row = mysql_num_rows($sql); // Ambil jumlah data dari hasil eksekusi $sql
if($row > 0){ // Jika jumlah data lebih dari 0 (Berarti jika data ada)
    while($data = mysql_fetch_array($sql)){ // Ambil semua data dari hasil eksekusi $sql
     ?>
      <tr>
      <td align="center"><?php echo $data['nisn'];?></td>
      <td align="center"><?php echo $data['bank']; ?></td>
      <td align="center"><?php echo $data['atas_nama']; ?></td>
      <td align="center"><?php echo $data['jumlah']; ?></td>
      <td align="center"><?php echo $data['bank_tujuan']; ?></td>
      </tr>
    <?php
	}
}else{ // Jika data tidak ada
    echo "<tr><td colspan='4'>Data tidak ada</td></tr>";
}
?>
</table>
<hr>
<div style="text-align:left;">Jumlah Pendaftar : <?php echo $row; ?></div>
<div style="text-align:right;">Periode : <?php echo $format_tawal2; ?> s/d <?php echo $format_takhir2; ?></div>
</body>
</html>

