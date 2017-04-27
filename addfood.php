<?php
	require 'inc/functions.php';
	logged_only();
	require 'inc/header.php';
?>

<div class="p7">
	<div class="p7b">
		
		<h2>Ajouter un nouvel aliment</h2>
	
		<div class="fond">
			<form action="process/traitementfood.php" method="post" enctype="multipart/form-data">
				
				<div class="entreeform">
					<div class="formleft">
						<label for="name">Aliment:</label>
					</div>
					<div class="formright">
						<input type="text" name="name" value="">
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
				
				<button type="submit" name="button">Ajouter le nouvel aliment</button>
			</form>

			<a href="up.php">Retour</a>

		</div>
	</div>
</div>

<?php include 'inc/footer.php' ?>