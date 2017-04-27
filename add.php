<?php
	require 'inc/functions.php';
	
	logged_only();

	require 'inc/header.php';
?>

<div class="p7">
	<div class="p7b">
		<h2>Ajouter une nouvelle paire de lunettes</h2>
	
		<div class="fond">
			<form action="#" method="post" enctype="multipart/form-data">
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
						<label for="name">Nom de la photo:</label>
					</div>
					<div class="formright">
						<input type="text" name="name" value="">
					</div>
				</div>

				<div class="entreeform">
					<div class="formleft">
						<label for="name">Titre de la photo:</label>
					</div>
					<div class="formright">
						<input type="text" name="titre" value="">
					</div>
				</div>

				<div class="entreeform">
					<div class="formleft">
						<label for="name">Légende de la photo:</label>
					</div>
					<div class="formright">
						<input type="text" name="legende" value="">
					</div>
				</div>

				<div class="entreeform">
					<div class="formleft">
						<label for="photo">Photo: </label>
					</div>
					<div class="formright">
		                <input type="hidden" name="MAX_FILE_SIZE" value="1048576" />
		                <input type="file" name="photo" id="photo" />
	                </div>
				</div>
				
				<button type="submit" name="button">Ajouter la nouvelle paire</button>
			</form>
			<a href="up.php">Retour</a>
		</div>

	<?php
		
		// Testons si le fichier a bien été envoyé et s'il n'y a pas d'erreur
		if (isset($_FILES['photo']) AND $_FILES['photo']['error'] == 0){
			
			// Testons si le fichier n'est pas trop gros
		    if ($_FILES['photo']['size'] <= 1000000000){
		        
		        // Testons si l'extension est autorisée
		        $infosfichier = pathinfo($_FILES['photo']['name']);
		        $extension_upload = $infosfichier['extension'];
		        $extensions_autorisees = array('jpg', 'jpeg', 'gif', 'png');
		        if (in_array($extension_upload, $extensions_autorisees)){
		            
		            // On peut valider le fichier et le stocker définitivement

		            $rand = rand(0, 999);
		            $clean = str_replace(' ', '_', $_POST['categorie']);
		        	$temp = $clean.$rand;
		        	$new_name = 'imgs/upload/' . $temp . basename($_FILES['photo']['name']);
		        	         
		            move_uploaded_file($_FILES['photo']['tmp_name'], $new_name);

					$requete = $bdd->PREPARE('INSERT INTO catalogue SET categorie = ?, nom_photo = ?, texte_photo = ?, legende_photo = ?, chemin_photo = ?');
					
					$requete->execute(array($_POST['categorie'], $_POST['name'], $_POST['titre'], $_POST['legende'], $new_name));

					header('location: up.php');
					
	            }
	    	}
		}
	?>

	</div>
</div>

<?php include 'inc/footer.php' ?>