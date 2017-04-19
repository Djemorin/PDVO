<?php
	require 'connect.php';

	$page = $bdd->query('SELECT chemin_photo FROM photos');
?>

<!DOCTYPE html>
<html>
	<head>
		<meta name="viewport" content="width=device-width" />
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
					<?php if(isset($_SESSION['auth'])): ?>
					<li><a href="account.php">Mon compte</a></li>
					<li><a href="logout.php">Se déconnecter</a></li>
					<?php endif; ?>
            
				</ul>

				
			</div>
		</nav>
		
		<div class="menu2">
			<img id="boutonresponsive" src="imgs/base/titre.jpg">
			<ul class="hidden">
				<li><a href="index.php">Accueil</a></li>
				<li><a href="catalogue.php">Catalogue</a></li>
				<li><a href="philosophie.php">Qui sommes-nous?</a></li>
				<li><a href="bienetre.php">Bien être</a></li>
				<li><a href="contact.php">Contact</a></li>
			</ul>
		</div>


		<script>
			$(document).ready(function(){
      			$(".hidden").hide();
      
		      $("#boutonresponsive").click(function(){
		          $(".hidden").toggle(250);
		      });
		  });
		</script>
		<article>
	