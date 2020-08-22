$(document).ready(function () {
	$('.sidenav').sidenav();
	$('.slider').slider();
	$('.parallax').parallax();
	$('.carousel').carousel({
		fullWidth: false,
		padding: 20,
		dist: 0,
		shift: 0
	});
	setInterval(function () {
		$('.carousel').carousel('next');
	}, 4000);
});