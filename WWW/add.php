<?php include 'inc/header.php' ?>
	<div class="p7">
		<div class="p7b">
			<h2>Ajouter une nouvelle paire de lunettes</h2>
		
		<div class="fond">
			<form action="traitement.php" method="post" enctype="multipart/form-data">
				<div class="entreeform">
					<div class="formleft">
						<label for="categorie">Catégorie</label>
					</div>
					
					<div class="formright">
						<select name="categorie">
							<option value="Montures hommes">Montures hommes</option>
							<option value="Montures femmes">Montures femmes</option>
							<option value="Montures enfants">Montures enfants</option>
							<option value="Montures solaires">Montures solaires</option>
						</select>
					</div>
				</div>
				
				<div class="entreeform">
					<div class="formleft">
						<label for="name">Nom de la photo</label>
					</div>
					<div class="formright">
						<input type="text" name="name" value="">
					</div>
				</div>

				<div class="entreeform">
					<div class="formleft">
						<label for="name">Titre de la photo</label>
					</div>
					<div class="formright">
						<input type="text" name="titre" value="">
					</div>
				</div>

				<div class="entreeform">
					<div class="formleft">
						<label for="name">Légende de la photo</label>
					</div>
					<div class="formright">
						<input type="text" name="legende" value="">
					</div>
				</div>

				<div class="entreeform">
					<div class="formleft">
						<label for="photo">Photo : </label>
					</div>
					<div class="formright">
		                <input type="hidden" name="MAX_FILE_SIZE" value="1048576" />
		                <input type="file" name="photo" id="photo" />
	                </div>
				</div>
				
				<button type="submit" name="button">Ajouter la nouvelle paire</button>
			</form>
			<a href="read.php">Liste des données</a>
		</div>
		</div>
	</div>
<?php include 'inc/footer.php' ?>