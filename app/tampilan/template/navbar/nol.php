<nav class="navbar indigo">
	<div class="container">
		<div class="nav-wrapper">
			<div class="row">
				<div class="col l6 m12 s12">
					<a href="#" class="sidenav-trigger hide-on-large-only" data-target="slide-out">
						<i class="material-icons">menu</i>
					</a>
					<a href="<?php echo basis_url(); ?>" class="brand-logo" style="height: 100%; display: flex; justify-content: center; align-items: center;">
						<img src="<?php echo basis_url('assets/img/logo_name_w.png'); ?>" style="max-height: 40pt;">		
					</a>		
				</div>
				<div class="col l6 hide-on-med-and-down">
					<ul id="nav-mobile" class="right hide-on-med-and-down">
						<li <?php if ($pages == 1) echo "class='active'"; ?>><a href="<?php echo basis_url() ?>">Beranda</a></li>
						<li <?php if ($pages == 2) echo "class='active'"; ?>><a href="<?php echo basis_url('beranda/kegiatan') ?>">Kegiatan</a></li>
						<li <?php if ($pages == 3) echo "class='active'"; ?>><a href="<?php echo basis_url('beranda/tentang') ?>">Tentang</a></li>
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
				<img src="<?php echo basis_url('assets/img/image104.png'); ?>" style="max-width: 80px;">
			</a>
			<br>
			<a href="<?php echo basis_url(); ?>">SMK Mitra Sehat Mandiri Sidoarjo</a>
		</div>
	</li>
	<li <?php if ($pages == 1) echo "class='active'"; ?>><a href="<?php echo basis_url(); ?>">Beranda</a></li>
	<li <?php if ($pages == 2) echo "class='active'"; ?>><a href="<?php echo basis_url('beranda/kegiatan'); ?>">Kegiatan</a></li>
	<li <?php if ($pages == 3) echo "class='active'"; ?>><a href="<?php echo basis_url('beranda/tentang'); ?>">Tentang</a></li>
</ul>