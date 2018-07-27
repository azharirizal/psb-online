<?php
ob_start();
 include "aksi_cetak_laporan_data_siswa.php";
 $content = ob_get_clean();
// conversion HTML => PDF
 require_once "../../../asset/pdf/html2pdf.class.php";
 try
 {
 $html2pdf = new HTML2PDF('P','A4', 'en', false, 'ISO-8859-15');
 $html2pdf->writeHTML($content, isset($_GET['vuehtml']));
 $html2pdf->Output('Laporan Data Siswa Perperiode.pdf');
 }
 catch(HTML2PDF_exception $e) { echo $e; }
?>