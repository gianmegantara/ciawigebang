<nav class="navbar navbar-default navbar-fixed-top">
<div class="container-fluid">
	<a class="navbar-brand" href="<?= base_url(); ?>">Desa Ciawigebang</a>
	<ul class="nav navbar-nav navbar-right">
		<li class="<?php if($this->uri->segment(3)==""){echo "active";} ?>">
			<a href="<?= base_url(); ?>">Beranda</a>
		</li>
		<li class="<?php if($this->uri->segment(3)=="pemberitahuan"){echo "active";} ?>">
			<a href="<?php echo base_url('pengajuan/penduduk/pemberitahuan'); ?>">Pemberitahuan <?php if ($jumlah_konfirmasi > 0) { ?><span class='badge badge-error'><?= $jumlah_konfirmasi ?></span><?php } ?></a>
		</li>
		<li><a href="<?php echo base_url('auth/logout'); ?>">Logout</a></li>
	</ul>
</div>
</nav>