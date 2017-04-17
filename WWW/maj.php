<?php include 'inc/header.php' ?>

<?php
			require 'inc/connect.php';

			$sql='SELECT * FROM catalogue WHERE id = '.$_GET['id'].'';
			$res=$bdd->query($sql);
			$resu=$res->fetch();
		?>
	<div class="p7">
		<div class="p7b">
			<h2>Modifier une paire de lunettes</h2>
		
		<div class="fond">

			<form action="traitement2.php" method="post" enctype="multipart/form-data">

				<input type="hidden" name="id" value="<?php echo $_GET['id'] ?>">
				
				<div class="entreeform">
					<div class="formleft">
						<label for="categorie">Catégorie</label>
					</div>
					
					<div class="formright">
						<select name="categorie">
							<option <?php if($resu['categorie'] == 'Montures hommes') echo 'selected'; ?> value="Montures hommes">Montures hommes</option>
							<option <?php if($resu['categorie'] == 'Montures femmes') echo 'selected'; ?> value="Montures femmes">Montures femmes</option>
							<option <?php if($resu['categorie'] == 'Montures enfants') echo 'selected'; ?> value="Montures enfants">Montures enfants</option>
							<option <?php if($resu['categorie'] == 'Montures solaires') echo 'selected'; ?> value="Montures solaires">Montures solaires</option>
						</select>
					</div>
				</div>
				
				<div class="entreeform">
					<div class="formleft">
						<label for="name">Nom de la photo</label>
					</div>
					<div class="formright">
						<input type="text" name="name" value="<?= $resu['nom_photo'] ?>">
					</div>
				</div>

				<div class="entreeform">
					<div class="formleft">
						<label for="name">Titre de la photo</label>
					</div>
					<div class="formright">
						<input type="text" name="titre" value="<?= $resu['texte_photo'] ?>">
					</div>
				</div>

				<div class="entreeform">
					<div class="formleft">
						<label for="name">Légende de la photo</label>
					</div>
					<div class="formright">
						<input type="text" name="legende" value="<?= $resu['legende_photo'] ?>">
					</div>
				</div>

				<div class="entreeform">
					<div class="formleft">
						<label for="photo">Photo : </label>
					</div>
					<div class="formright">
		                <input type="hidden" name="MAX_FILE_SIZE" value="1048576" />
		                <input type="file" name="photo" id="photo" value="" />
	                </div>
				</div>
				
				<button type="submit" name="button">Mettre à jour la paire</button>
			</form>
			<a href="read.php">Liste des données</a>
		</div>
		</div>
	</div>
<?php include 'inc/footer.php' ?>