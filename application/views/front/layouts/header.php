<!DOCTYPE html>
<html lang="cz">
<head>
	<title>Prsteny Baroň</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

	<link rel="stylesheet" href="{base_url}assets/css/front/global/view.css">

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body>
	<header>

		<div class="row pt15">
			<div class="col-md-4 d-none d-md-block"></div>
			<div class="col-md-4 text-center d-none d-md-block">
				<a class="navbar-brand d-none d-md-block" href="{base_url}">
					<img src="{base_url}assets/images/logo.png" width="200">
				</a>
			</div>			
			<div class="col-md-4 text-right nowrap pr3p pt15 d-none d-md-block">
				<a href="{facebook_url}" target="_blank"><img src="{base_url}assets/images/icons/facebook.png" width="45" border="0"></a>
				<a href="{instagram_url}" target="_blank"><img src="{base_url}assets/images/icons/instagram.png" width="45" border="0"></a>
			</div>
		</div>


		<nav class="navbar navbar-expand-md bg-light navbar-light">
			<div class="wlogofip d-md-none">
				<div class="row">
					<div class="col">
						<a class="navbar-brand" href="{base_url}">
							<img src="{base_url}assets/images/logo.png" width="90">
						</a>
					</div>
					<div class="col text-right">
						<a href="{facebook_url}" target="_blank"><img src="{base_url}assets/images/icons/facebook.png" width="40" border="0"></a>
						<a href="{instagram_url}" target="_blank"><img src="{base_url}assets/images/icons/instagram.png" width="40" border="0"></a>
					</div>
				</div>
			</div>

			<!-- Toggler/collapsibe Button -->
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
				<span class="navbar-toggler-icon"></span>
			</button>

			<!-- Navbar links -->
			<div class="collapse navbar-collapse" id="collapsibleNavbar">
				<ul class="navbar-nav"> <!-- nav-link-active -->
					<li class="nav-item">
						<a class="nav-link {nav_header_home}" href="{base_url}">Úvod</a>
					</li>
					<li class="nav-item">
						<a class="nav-link {nav_header_about_us}" href="{base_url}o_nas">O nás</a>
					</li>
					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
							Katalog
						</a>
						<div class="dropdown-menu"> <!-- dropdown-item-active -->
							<a class="dropdown-item {nav_header_category_1}" href="{base_url}bile_zlato">Bílé zlato</a>
							<a class="dropdown-item {nav_header_category_2}" href="{base_url}kombinovane_zlato">Kombinované zlato</a>
							<a class="dropdown-item {nav_header_category_3}" href="{base_url}zlute_zlato">Žluté zlato</a>
							<a class="dropdown-item {nav_header_category_4}" href="{base_url}cervene_zlato">Červené zlato</a>
						</div>
					</li>
					<li class="nav-item">
						<a class="nav-link {nav_header_gold}" href="{base_url}zlato">Zlato</a>
					</li> 
				</ul>

				<ul class="navbar-nav ml-auto">
					<li class="nav-item">
						<a class="nav-link {nav_header_stones}" href="{base_url}kameny">Kameny</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="{base_url}dulezite_informace">
							<span class="d-md-none d-lg-block {nav_header_important_information}">Důležité informace</span>
							<span class="d-none d-md-block d-lg-none {nav_header_important_information}">Důležité info.</span>
						</a>
					</li>
					<li class="nav-item">
						<a class="nav-link {nav_header_contact}" href="{base_url}kontakt">Kontakt</a>
					</li> 
				</ul>

			</div> 
		</nav>
	</header>