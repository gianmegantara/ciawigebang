<form class="add-form" data-toggle="validator" role="form" method="post" 
	action="<?php echo base_url('surat/skhu'); ?>">
	<div class="form-group">
		<label for="input_keyword" class="control-label">NIK/NAMA</label>
		<input type="text" class="form-control" id="input_keyword" name="keyword" required>
	</div>
	<button type="submit" class="btn btn-hijau">
		Cari
	</button>
</form>
