<?php require 'inc/header.php'; ?>
	
	<div class="p5">
		<div class="p5b">
			<h1>Point De Vue Opticien</h1>
		
			<div class="location">

				<!-- <div class="logocontact">
					<img src="imgs/logo.jpg">
				</div> -->
				
				<div class="adresse">
					<ul>
						<li>Place du centre</li>
						<li>2 rue du marché</li>
						<li>22440 Ploufragan</li>
						<li>02 69 32 26 65</li>
					</ul>
				</div>

				<iframe class="gmap" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2644.239463634545!2d-2.794836284642425!3d48.49029997925311!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4811e2812e0b49b1%3A0xef72625ff2892a28!2sPoint+de+Vue+Opticien!5e0!3m2!1sfr!2sfr!4v1490875535677" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>


			</div>
			
			<br>

			<div class="horaires">
				<h3>Horaires</h3>
				<ul>
					<li>Lundi: 13h30/19h00</li>
					<li>Du mardi au vendredi: 9h30/12h30 - 13h30/19h00</li>
					<li>Samedi: 9h00/13h30</li>
				</ul>
			</div>

			<h3>Des questions? N'hésitez pas à nous contacter!</h3>

			<form>
				<p><label>Votre nom:</label>
				<br>
				<input type="text" name="nom" placeholder="Nom" required="required"></p>
				<p><label>Votre adresse e-mail:</label>
				<br>
				<input type="mail" name="mail" placeholder="Adresse e-mail" required="required"></p>
				<p><p><label>Votre message:</label>
				<br>
				<textarea placeholder="Tapez otre message ici" required="required"></textarea></p>
				<p><button type="submit">Envoyer</button></p>
			</form>

			<h3>Et retrouvez nous sur notre page Facebook!</h3>
		</div>
	</div>	
<?php require 'inc/footer.php'; ?>