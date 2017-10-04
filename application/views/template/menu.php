<div class="menu">
	<ul>
		<li style="float:left"><b>Desa Ciawigebang</b></li>
		<li><a href="<?php echo base_url('auth/logout'); ?>">Logout</a></li>
		<li class="<?php if($this->uri->segment(1)=="surat"){echo "active";} ?>">
			<a href="<?php echo base_url('surat/daftar'); ?>">Surat</a>
		</li>
	</ul>
</div>
<div class="konten">
	<h1><?php echo $title; ?></h1>
	<hr>