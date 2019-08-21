<!DOCTYPE html>
<html lang="cz">
<head>
	<title>Prsteny Baroň</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/front/global/view.css">

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body>

	<header>
		<div class="row d-none d-md-block">
			<div class="col-xl-12 text-right nowrap pr3p pt15">
				<a href="{facebook_url}" target="_blank"><img src="<?php echo base_url(); ?>assets/images/icons/facebook.png" width="45" border="0"></a>
				<a href="{instagram_url}" target="_blank"><img src="<?php echo base_url(); ?>assets/images/icons/instagram.png" width="45" border="0"></a>
			</div>
		</div>

		<nav class="navbar navbar-expand-md bg-light navbar-light">

			<div class="wlogofip d-md-none">
				<div class="row">
					<div class="col">
						<a class="navbar-brand" href="/">
							<img src="<?php echo base_url(); ?>assets/images/logo.png" width="90">
						</a>
					</div>
					<div class="col text-right">
						<a href="{facebook_url}" target="_blank"><img src="<?php echo base_url(); ?>assets/images/icons/facebook.png" width="40" border="0"></a>
						<a href="{instagram_url}" target="_blank"><img src="<?php echo base_url(); ?>assets/images/icons/instagram.png" width="40" border="0"></a>
					</div>
				</div>
			</div>

			<!-- Toggler/collapsibe Button -->
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
				<span class="navbar-toggler-icon"></span>
			</button>

			<!-- Navbar links -->
			<div class="collapse navbar-collapse" id="collapsibleNavbar">
				<ul class="navbar-nav">
					<li class="nav-item">
						<a class="nav-link nav-link-active" href="#">Úvod</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#">O nás</a>
					</li>
					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
							Katalog
						</a>
						<div class="dropdown-menu">
							<a class="dropdown-item dropdown-item-active" href="<?php echo  base_url().'Home/category/'.'0'?>">Bílé zlato</a>
							<a class="dropdown-item " href="<?php echo  base_url().'Home/category/'.'1'?>">Kombinované zlato</a>
							<a class="dropdown-item" href="<?php echo  base_url().'Home/category/'.'2'?>">Žluté zlato</a>
							<a class="dropdown-item" href="<?php echo  base_url().'Home/category/'.'3'?>">Červené zlato</a>
						</div>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#">Zlato</a>
					</li> 
				</ul>

				<div class="w100p text-center">
					<a class="navbar-brand d-none d-md-block" href="/">
						<img src="<?php echo base_url(); ?>assets/images/logo.png" width="200">
					</a>
				</div>

				<ul class="navbar-nav ml-auto">
					<li class="nav-item">
						<a class="nav-link" href="#">Kameny</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#">Důležité informace</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#">Kontakt</a>
					</li> 
				</ul>

			</div> 
		</nav>
	</header>