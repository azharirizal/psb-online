    <section id="blog" class="container">
        <div class="center">
            <h2>Pendaftar</h2>
            <p class="lead">Peserta Terdaftar SMK Mandiri Bojonggede</p>
        </div>
	<table class="table table-striped" style="font-weight: bold; color: black; background-color: silver">
	<thead>
	    <tr style="background-color: #47A219; color:white">
			<th style="text-align: center" scope="col">No</th>
			<th style="text-align: center" scope="col">No Peserta</th>
			<th scope="col">NISN</th>
			<th scope="col">Nama</th>
			<th style="text-align: center" scope="col">Verifikasi</th>
	    </tr>
	</thead>
	<tbody>
	<?php
	$jmldata = mysql_query("SELECT * FROM psb_calon_siswa");
	$no = 0;
	 while($items=mysql_fetch_array($jmldata)){
		if  ($items['sts_verifikasi']==0){
			$ver = "Belum";
		}
		else{
			$ver = "Sudah";
		}
		?>
			 <tr>
					<td style='text-align: center'><?php echo $no=$no+1 ?></td>
					<td style='text-align: center'><?php echo $items['no_peserta'] ?></td>
					<td><?php echo $items['nisn'] ?></td>
					<td><?php echo $items['nama'] ?></td>
					<td style='text-align: center'><?php echo $ver ?></td>
			 </tr>
		<?php } ?>
	</tbody>
	</table>
</section>
