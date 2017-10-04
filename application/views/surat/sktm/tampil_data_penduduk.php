<table class="profil">
	<tr>
		<td>NIK</td>
		<td>:</td>
		<td><?= $penduduk->NIK; ?></td>
	</tr>
	<tr>
		<td>Nama</td>
		<td>:</td>
		<td><?= $penduduk->NAMA; ?></td>
	</tr>
	<tr>
		<td>Jenis Kelamin</td>
		<td>:</td>
		<td><?= $penduduk->JENISKELAMIN; ?></td>
	</tr>
	<tr>
		<td>Tempat Lahir</td>
		<td>:</td>
		<td><?= $penduduk->TEMPATLAHIR; ?></td>
	</tr>
	<tr>
		<td>Tanggal Lahir</td>
		<td>:</td>
		<td><?= $penduduk->TANGGALLAHIR; ?></td>
	</tr>
	<tr>
		<td>Umur</td>
		<td>:</td>
		<td><?= $penduduk->UMUR; ?></td>
	</tr>
	<tr>
		<td>Agama</td>
		<td>:</td>
		<td><?= $penduduk->AGAMA; ?></td>
	</tr>
	<tr>
		<td>Status</td>
		<td>:</td>
		<td><?= $penduduk->STATUS; ?></td>
	</tr>
	<tr>
		<td>Pendidikan</td>
		<td>:</td>
		<td><?= $penduduk->PENDIDIKAN; ?></td>
	</tr>
	<tr>
		<td>Pekerjaan</td>
		<td>:</td>
		<td><?= $penduduk->PEKERJAAN; ?></td>
	</tr>
	<tr>
		<td>Nama Ibu</td>
		<td>:</td>
		<td><?= $penduduk->NAMAIBU; ?></td>
	</tr>
	<tr>
		<td>Nama Ayah</td>
		<td>:</td>
		<td><?= $penduduk->NAMAAYAH; ?></td>
	</tr>
</table>
<form class="add-form" data-toggle="validator" role="form" method="post" 
	action="<?php echo base_url('surat/sktm/download/'.$penduduk->NIK); ?>">
	<div class="form-group">
		<label for="input_untuk" class="control-label">Untuk</label>
		<input type="text" class="form-control" id="input_untuk" name="untuk" required>
	</div>
	<button type="submit" class="btn btn-primary">
		Download Surat
	</button>
</form>