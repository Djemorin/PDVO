<?php
	require 'connect.php';

	$page = $bdd->query('SELECT chemin_photo FROM photos');
?>

<!DOCTYPE html>
<html>
	<head>
		<title>Point De Vue Opticien</title>
		<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="css/style.css">
		<link rel="icon" type="image/png" href="imgs/base/logo.jpg" />
		<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Baloo" rel="stylesheet">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	</head>
	
	<body>
		<header>
			<div class="maintitle">
				<img id="maintitle" src="imgs/base/titre.jpg">
			</div>

			<div class="phototitre">
				<?php
					$rendu = $page->fetch();
				?>
				<img id="phototitre" src="<?= $rendu['chemin_photo'] ?>">
			</div>
		</header>

		<nav>
			<div class="table">
				<ul>
					<li class="home">
						<a href="index.php">Accueil</a>
					</li>
					<li class="catalogue">
						<a href="catalogue.php">Catalogue</a>
					</li>
					<li class="philo">
						<a href="philosophie.php">Qui sommes-nous?</a>
					</li>
					<li class="health">
						<a href="bienetre.php">Bien être</a>
					</li>
					<li class="contact">
						<a href="contact.php">Contact</a>
					</li>
				</ul>
			</div>
		</nav>

		<article>
	