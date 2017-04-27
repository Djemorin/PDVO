<?php
	require 'inc/functions.php';
	
	logged_only();
	
	require 'inc/header.php';
	require 'inc/connect.php';

	$sql='SELECT * FROM food WHERE id = '.$_GET['id'].'';
	$res=$bdd->query($sql);
	$resu=$res->fetch();
?>

<div class="p7">
	<div class="p7b">
		<h2>Modifier un aliment:</h2>
	
		<div class="fond">

			<form action="process/traitementmajfood.php" method="post" enctype="multipart/form-data">

				<input type="hidden" name="id" value="<?php echo $_GET['id'] ?>">
				
				<div class="entreeform">
					<div class="formleft">
						<label for="name">Photo:</label>
					</div>
					<div class="formright">
						<img src="<?= $resu['chemin_photo'] ?>" width="90%">
					</div>
				</div>
				
				<div class="entreeform">
					<div class="formleft">
						<label for="name">Nom de la photo:</label>
					</div>
					<div class="formright">
						<input type="text" name="name" value="<?= $resu['nom_photo'] ?>">
					</div>
				</div>

				<div class="entreeform">
					<div class="formleft">
						<label for="name">Légende de la photo:</label>
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
			
			<a href="up.php">Retour</a>
			
		</div>
	</div>
</div>

<?php include 'inc/footer.php' ?>