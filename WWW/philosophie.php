<?php require 'inc/header.php'; ?>
	
	<div class="p3">
		<div class="p3b">
			<div class="p3g">
				<h2>C'est nous!</h2>

				<div id="qsn1" >
					<img src="
						<?php
							$page = $bdd->query('SELECT chemin_photo FROM photos WHERE id = 2');
							$page = $page->fetch();
							
							echo $page['chemin_photo'];
						?>
					">
				</div>

				<p>Nous sommes <strong>Artisan Lunetier</strong>, une profession paramédicale.</p>

				<h3>Oui, d’accord, mais ça veut dire quoi ?</h3>

				<p>Cela veut dire que nous possédons un savoir-faire et des connaissances techniques et physiologiques qui nous permettent de nous placer au service de votre vue pour réaliser l’équipement qui vous correspondra au mieux.</p>
			</div>
			<br>

			<div class="p3d">
				<h3>Comment ?</h3>

				<p><em>Par l’approche paramédicale:</em> nous avons à transcrire une prescription médicale en une paire de lunettes qui prend en compte vos besoins visuels en s’inscrivant dans votre quotidien avec le respect de votre façon de vivre, votre personnalité et de votre budget.</p>

				<p><em>Par l’approche artisanale:</em> nous mettons en œuvre nos connaissances techniques et notre savoir faire pour vous servir par le choix des matériaux, la qualité de réalisation et toutes les avancées technologiques que les verres peuvent vous apporter.</p>
				
				<br>

				<div id="qsn2" >
					<img src="
						<?php
							$page = $bdd->query('SELECT chemin_photo FROM photos WHERE id = 3');
							$page = $page->fetch();
							
							echo $page['chemin_photo'];
						?>
					">
				</div>

				<p>Pour garder ces valeurs actives au quotidien, nous avons fait le choix de l’indépendance. Cela nous permet de ne pas être contraints d’obéir à des firmes qui nous imposeraient de se soumettre au pouvoir des finances, au détriment d’une relation plus humaine à laquelle nous tenons tout particulièrement. Mettre notre professionnalisme à votre écoute, celle de vos gouts, de vos envies, de la manière dont on peut vous faciliter la vie, améliorer votre confort visuel, vous conseiller en santé visuelle…</p>

				<br>

				<p>Et ceci ne s’arrête pas aux lunettes: nutrition, <a href="bienetre.php">yoga des yeux</a> …</p>

			</div>
		</div>
	</div>

<?php require 'inc/footer.php'; ?>