    <section id="blog" class="container">
        <div class="center">
            <h2>Pengumuman</h2>
            <p class="lead">Pengumuman Peserta SMK Mandiri Bojonggede</p>
        </div>
	<table class="table table-striped" style="font-weight: bold; color: black; background-color: silver">
	<thead>
	    <tr style="background-color: #47A219; color:white">
			<th style="text-align: center" scope="col">No</th>
			<th style="text-align: center" scope="col">No Peserta</th>
			<th style="text-align: center" scope="col">NISN</th>
			<th scope="col">Nama</th>
			<th style="text-align: center" scope="col">Seleksi</th>
	    </tr>
	</thead>
	<tbody>
	<?php
	$jmldata = mysql_query("SELECT * FROM psb_calon_siswa WHERE sts_seleksi = '1' ORDER BY no_peserta");
	$no = 0;
	while($items=mysql_fetch_array($jmldata)){
		if  ($items['sts_seleksi']==0){
			$sel = "Tidak Diterima";
		}
		else{
			$sel = "Diterima";
		}
		?>
			 <tr>
					<td style='text-align: center'><?php echo $no=$no+1 ?></td>
					<td style='text-align: center'><?php echo $items['no_peserta'] ?></td>
					<td style="text-align: center"><?php echo $items['nisn'] ?></td>	
					<td><?php echo $items['nama'] ?></td>
					<td style='text-align: center'><?php echo $sel ?></td>
			 </tr>
		<?php } ?>
	</tbody>
	</table>
</section>
