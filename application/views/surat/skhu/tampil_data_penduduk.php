<table class="profil">
	<?php 
	if (is_array($penduduk)||is_object($penduduk)) {
		foreach ($penduduk as $row){
		?>
	<tr>
		<td>NIK</td>
		<td><?php echo $row['nik']; ?></td>
	</tr>	
	<tr>	
		<td>Nama</td>
		<td><?php echo $row['nama']; ?></td>
	</tr>
	<tr>	
		<td>Jenis Kelamin</td> 
		<td><?php echo $row['jeniskelamin']; ?></td>
	</tr>
	<tr>	
		<td>Tempat Lahir</td> 
		<td><?php echo $row['tempatlahir']; ?></td>
	</tr>
	<tr>	
		<td>Tanggal Lahir</td> 
		<td><?php echo $row['tanggallahir']; ?></td>
	</tr>
	<tr>	
		<td>Umur</td> 
		<td><?php echo $row['umur']; ?></td>
	</tr>
	<tr>	
		<td>Agama</td> 
		<td><?php echo $row['agama']; ?></td>
	</tr>
	<tr>	
		<td>Status</td> 
		<td><?php echo $row['status']; ?></td>
	</tr>
	<tr>	
		<td>Pendidikan</td> 
		<td><?php echo $row['pendidikan']; ?></td>
	</tr>
	<tr>	
		<td>Pekerjaan</td> 
		<td><?php echo $row['pekerjaan']; ?></td>
	</tr>
	<tr>	
		<td>Nama Ibu</td> 
		<td><?php echo $row['namaibu']; ?></td>
	</tr>
	<tr>	
		<td>Nama Ayah</td> 
		<td><?php echo $row['namaayah']; ?></td>
	</tr>
	<tr>
		<td colspan="2" align="center">
			<br>
			<a href="<?= base_url('surat/skhu/download/'.$row['nik']); ?>" class="btn btn-primary" role="button">Download Surat</a>
		</td>
	</tr>
	<?php
		}
	}
	?>
</table>
