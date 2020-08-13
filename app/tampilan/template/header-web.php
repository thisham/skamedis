<!DOCTYPE html>
<html>
<head>
	<title><?php echo $title; ?> - SMK Mitra Sehat Mandiri Sidoarjo</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" media="screen" href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,700">
	<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<script src="<?php echo basis_url('assets/js/jquery-3.5.1.js'); ?>"></script>
	<script src="<?php echo basis_url('assets/js/materialize.js'); ?>"></script>
	<script src="<?php echo basis_url('assets/js/sweetalert.min.js'); ?>"></script>
	<link rel="stylesheet" type="text/css" href="<?php echo basis_url('assets/css/materialize.css'); ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo basis_url('assets/css/animate.min.css'); ?>">

	<style type="text/css">
		body {
			font-family: 'Ubuntu', sans-serif;
			display: flex;
			min-height: 100vh;
			flex-direction: column;
		}

		main {
			flex: 1 0 auto;
		}
		
		.input-field input:focus + label {
			color: #536dfe !important;
		}
	
		.input-field input:focus {
			border-bottom: 1px solid #536dfe !important;
			box-shadow: 0 1px 0 0 #536dfe !important;
		}

		.input-field .prefix.active {
			color: #536dfe;
		}

		nav.navbar
		{
			top: 0;
			position: fixed;
			width: 100%;
			z-index: 100;
		}
	</style>
</head>

<body>
	<main>