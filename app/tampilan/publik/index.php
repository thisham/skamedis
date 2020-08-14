<div class="parallax-container center valign-wrapper">
	<div class="container">
		<div class="row">
			<div class="col s12 black-text">
				<h2>SMK Mitra Sehat Mandiri Sidoarjo</h2>
				<h5>Jalan Ki Hajar Dewantara 200, Katerungan, Krian <br> Sidoarjo -- 61262</h5>
				<br>
				<a class="waves-effect waves-light btn-large indigo">Selengkapnya</a>

			</div>
		</div>
	</div>
	
	<div class="parallax" style="opacity: 30%;">
		<img src="https://images.unsplash.com/photo-1429081172764-c0ee67ab9afd?dpr=1&auto=format&fit=crop&w=1500&h=927&q=80&cs=tinysrgb&crop=">
	</div>

</div>

<div class="container">
	<div class="row">
		<div class="col m4 s12">
			<div class="icon-block">
				<h2 class="center">
					<span class="icon"><i class="material-icons large red-text">school</i></span>
				</h2>
				<h5 class="center">Speeds up development</h5>
				<p class="light">
					We did most of the heavy lifting for you to provide a default stylings that incorporate our custom components. Additionally, we refined animations and transitions to provide a smoother experience for developers.
				</p>
			</div>
		</div>
		<div class="col m4 s12">
			<div class="icon-block">
				<h2 class="center light-blue-text">
					<i class="material-icons large">group</i>	
				</h2>
				<h5 class="center">User Experience Focused</h5>
				<p class="light">
					By utilizing elements and principles of Material Design, we were able to create a framework that incorporates components and animations that provide more feedback to users. Additionally, a single underlying responsive system across all platforms allow for a more unified user experience.
				</p>
			</div> 
		</div>
		<div class="col m4 s12">
			<div class="icon-block">
				<h2 class="center light-blue-text">
					<i class="material-icons large">settings</i>	
				</h2>
				<h5 class="center">Easy to work with</h5>
				<p class="light">
					We have provided detailed documentation as well as specific code examples to help new users get started. We are also always open to feedback and can answer any questions a user may have about Materialize.
				</p>
			</div> 
		</div>
	</div>
</div>

<div class="parallax-container center valign-wrapper">
	<div class="parallax"><img src="https://images.unsplash.com/photo-1463780324318-d1a8ddc05a11?dpr=1&auto=format&fit=crop&w=1500&h=1000&q=80&cs=tinysrgb&crop=">
	</div>
	
	<div class="container white-text">
		<div class="row">
			<div class="col s12">
				<h4>Majors</h4>

				<div class="slider">
					<div materialize="carousel" [materializeParams]="[{full_width: true}]" class="carousel carousel-slider center" data-indicators="true">
						<div class="carousel-fixed-item center">
							<a class="btn waves-effect white black-text darken-text-2">Take an Admission</a>
						</div>
						<div class="carousel-item red white-text" href="#one!" style="background-image: url('https://images.unsplash.com/photo-1463780324318-d1a8ddc05a11?dpr=1&auto=format&fit=crop&w=1500&h=1000&q=80&cs=tinysrgb&crop='); background-size: 200%;">
							<h2>Nautika Kapal Niaga</h2>
							<p class="white-text">ASDASDSASD</p>
							<a class="btn waves-effect blue white-text darken-text-2">Selengkapnya<i class="material-icons right">chevron_right</i></a>
						</div>
						<div class="carousel-item amber white-text" href="#two!">
							<h2>Teknologi Laboratorium Medik</h2>
							<p class="white-text">This is your second panel</p>
							<a class="btn waves-effect red white-text darken-text-2">Selengkapnya<i class="material-icons right">chevron_right</i></a>
						</div>
						<div class="carousel-item green white-text" href="#three!">
							<h2>Farmasi Klinis dan Komunitas</h2>
							<p class="white-text">This is your third panel</p>
							<a class="btn waves-effect indigo white-text darken-text-2">Selengkapnya<i class="material-icons right">chevron_right</i></a>
						</div>
						<div class="carousel-item blue white-text" href="#four!">
							<h2>Asisten Keperawatan</h2>
							<p class="white-text">This is your fourth panel</p>
							<a class="btn waves-effect green white-text darken-text-2">Selengkapnya<i class="material-icons right">chevron_right</i></a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="container center-align">
 <div class="section">
		<div class="row">
		<div class="col s12">
			<h4>Contact Us</h4>
			<p class="light left-align">
				Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam scelerisque id nunc nec volutpat. Etiam pellentesque tristique arcu, non consequat magna fermentum ac. Cras ut ultricies eros. Maecenas eros justo, ullamcorper a sapien id, viverra ultrices eros. Morbi sem neque, posuere et pretium eget, bibendum sollicitudin lacus. Aliquam eleifend sollicitudin diam, eu mattis nisl maximus sed. Nulla imperdiet semper molestie. Morbi massa odio, condimentum sed ipsum ac, gravida ultrices erat. Nullam eget dignissim mauris, non tristique erat. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae;
			</p>
		</div>			
	</div>
	</div>
</div>

<div class="parallax-container center valign-wrapper">
	<div class="parallax"><img src="https://images.unsplash.com/photo-1489289827069-adf270f4f417?dpr=1&auto=format&fit=crop&w=1500&h=2250&q=80&cs=tinysrgb&crop=">
	</div>
	
	<div class="container white-text">
		<div class="row">
			<div class="col s12">
				<h5>A modern responsive front-end framework based on Material Design</h5>
			</div>
		</div>
	</div>
</div>

<style type="text/css">
	div.carousel-item {
		z-index: 100;
	}
</style>

<script type="text/javascript">
	$(document).ready(function () {
		$('.parallax').parallax();
		$('.slider').slider({
			indicators: false
		});
		$('.carousel.carousel-slider').carousel({
			fullWidth: true,
			indicators: true
		});
		setInterval(function () {
			$('.carousel').carousel('next');
		}, 4000);
	});
		
</script>
