<nav class="navbar indigo">
	<div class="container">
		<div class="nav-wrapper">
			<div class="row">
				<div class="col l6 m12 s12">
					<a href="#" class="sidenav-trigger hide-on-large-only" data-target="slide-out">
						<i class="material-icons">menu</i>
					</a>
					<a href="https://products.thisham.my.id/sidang" class="brand-logo"><img src="<?php echo basis_url('assets/img/logo.png'); ?>"></a>
				</div>
				<div class="col l6 hide-on-med-and-down">
					<ul id="nav-mobile" class="right hide-on-med-and-down">
						<li><a href="<?php echo basis_url() ?>">Beranda</a></li>
						<li><a href="<?php echo basis_url('beranda/kegiatan') ?>">Kegiatan</a></li>
						<li><a href="<?php echo basis_url('beranda/tentang') ?>">Tentang</a></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</nav>

<ul class="sidenav" id="slide-out">
	<li>
		<div class="user-view center">
			<div class="background">
				<img src="<?php echo basis_url('assets/img/account-def.jpg'); ?>">
			</div>
			<a href="<?php echo basis_url('assets/img/logo-smk.png'); ?>">
				<img src="<?php echo basis_url('assets/img/logo-smk.png'); ?>" style="max-width: 80px;">
			</a>
			<br>
			<a href="<?php echo basis_url(); ?>">SMK Mitra Sehat Mandiri Sidoarjo</a>
		</div>
	</li>
	<li><a href="<?php echo basis_url(); ?>">Beranda</a></li>
	<li><a href="<?php echo basis_url('beranda/kegiatan'); ?>">Kegiatan</a></li>
	<li><a href="<?php echo basis_url('beranda/tentang'); ?>">Tentang</a></li>
</ul>