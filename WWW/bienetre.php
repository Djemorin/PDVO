<?php require 'inc/header.php'; ?>
	
	<div class="p4">
		<div class="p4b">
			<h1>Le bien-être par la vue.</h1>

			<img id="ip4-1" src="imgs/pics/be1.jpg">

			<p>Quête de bien-être, recherche de sens et recherche d’un équilibre à inventer.</p>

			<p>Si nous sommes en quête d’un équilibre à inventer, quels sont les paramètres à prendre en compte dans notre cas présent?</p>

			<p>En réponse, je vous propose de tenter de trouver un équilibre de bien-être pour bien vivre votre vue.</p>

			<br>

			<h3>Entre technologie et/ou Dame Nature.</h3>

			<p>Pour commencer, un peu de bon sens.</p>

			<p>La seule bonne lumière est la lumière naturelle, c'est à dire celle du soleil. Prendre le temps d’y être régulièrement et suffisamment exposés nous régénère. Cela aurait même une implication pour freiner les évolutions de myopie.</p>

			<p>Si l’organisme est constitué en moyenne de 70% d’eau, l’œil l’est pour son compte à 90%, donc une bonne hydratation est d’autant plus important pour nos yeux.</p>

			<br>

			<img id="ip4-2" src="imgs/pics/be2.jpg">

			<br>

			<h3>La qualité de l’air dans les espaces clos (la voiture, les lieux climatisés, le chauffage à la maison…)</h3>

			<p>Souvent, en espace clos, la gestion des flux d’air nous crée facilement des environnements trop secs pour nos yeux qui vont lutter pour préserver leur humidité, et donc souffrir.</p>
			
			<br>

			<p>Un peu de bon sens aussi serait de prendre l’habitude de reposer notre système visuel à période régulière lorsque nous pratiquons une activité prolongée en vision de près - d’autant plus si cette activité implique l’utilisation d’écrans (téléphone, tablette, ordinateur, télé, etc.).</p>

			<br>

			<h3>Booster le bon fonctionnement de vos yeux par la nutrition.</h3>

			<p>Voici quelques exemple d’aliments - il en existe plein d’autres. Les consommer en conscience pour vos yeux vous permet de renforcer le pouvoir auto-régénérant de votre organisme.</p>

			<div class="food">
				<div class="gal">
					<div class="cat">
						<img id="bef1" src="imgs/food/myrtille.jpg" alt="La myrtille">
					</div>
					<div class="cat">
						<img id="bef2" src="imgs/food/carotte.jpg" alt="La carotte">
					</div>
					<div class="cat">
						<img id="bef3" src="imgs/food/poissons.jpg" alt="Les poissons gras">
					</div>
					<div class="cat">
						<img id="bef4" src="imgs/food/epinards.jpg" alt="Les épinards">
					</div>
				</div>
			</div>

			<br>

			<h3>Et si on se relaxait les yeux ?</h3>

			<p>Avec persévérance, la relaxation des yeux peut même améliorer votre vision et développer votre côté Zen. Pour cela, une pratique utile et ludique : le yoga des yeux.</p>
			
			<iframe class="videoydy" width="560" height="315" src="https://www.youtube.com/embed/kKOi4bOqxzQ" frameborder="0" allowfullscreen></iframe>

			<p>La pratique de tels exercices contribue à améliorer votre rapport à vous-même, en améliorant la libre circulation de votre énergie. Cela facilite le fonctionnement naturel de vos yeux - une sorte de maintenance respectueuse du fonctionnement naturel de vos yeux. </p>

			<br>

			<h3>Par d’autres approches encore…</h3>

			<p>L’aromathérapie par exemple améliorerait notre fonction visuelle par la simple respiration des parfums des huiles essentiels de jasmin, de mente poivrée ou bien encore de vanille.</p>
			
			<br>

			<p>Bref, il existe de nombreux outils pour nous améliorer dans le respect de ce que nous sommes.</p>

			<p>N’hésitez pas à venir échanger avec nous pour le plaisir du partage!</p>

		</div>
	</div>
	
		<!-- The Modal -->
			<div id="myModal" class="modal">
			  <span class="close">&times;</span>
			  <img class="modal-content" id="img01">
			  <div id="caption"></div>
			</div>

			<script>
				// Get the modal
				var modal = document.getElementById('myModal');

				// Get the image and insert it inside the modal - use its "alt" text as a caption
				var img = document.getElementById('bef1');
				var modalImg = document.getElementById("img01");
				var captionText = document.getElementById("caption");
				img.onclick = function(){
				    modal.style.display = "block";
				    modalImg.src = this.src;
				    captionText.innerHTML = this.alt;
				}

				var img = document.getElementById('bef2');
				var modalImg = document.getElementById("img01");
				var captionText = document.getElementById("caption");
				img.onclick = function(){
				    modal.style.display = "block";
				    modalImg.src = this.src;
				    captionText.innerHTML = this.alt;
				}

				var img = document.getElementById('bef3');
				var modalImg = document.getElementById("img01");
				var captionText = document.getElementById("caption");
				img.onclick = function(){
				    modal.style.display = "block";
				    modalImg.src = this.src;
				    captionText.innerHTML = this.alt;
				}

				var img = document.getElementById('bef4');
				var modalImg = document.getElementById("img01");
				var captionText = document.getElementById("caption");
				img.onclick = function(){
				    modal.style.display = "block";
				    modalImg.src = this.src;
				    captionText.innerHTML = this.alt;
				}

				// Get the <span> element that closes the modal
				var span = document.getElementsByClassName("close")[0];

				// When the user clicks on <span> (x), close the modal
				span.onclick = function() { 
				    modal.style.display = "none";
				}
			</script>
<?php require 'inc/footer.php'; ?>