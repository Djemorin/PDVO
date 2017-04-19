<?php require 'inc/header.php'; ?>

		<div class="p2">
			<div class="p2b">
				<?php
					$page = $bdd->query('SELECT * FROM catalogue  ORDER BY categorie');
					$page = $page->fetchAll();
					$categorie = '';
					$i=0;
			
					foreach ($page as $pic) {
						$chemin_photo = $pic['chemin_photo'];

						if ($categorie!=$pic['categorie']){
							
							if ($i != 0){
								echo '</div>';
							}
							?>
							
							<div class="man">
							<h2 id="man"><?= $pic['categorie'] ?></h2>	
							
							<?php
								$categorie = $pic['categorie'];
							}
							$i++;
							?>
		
					<div class="gal">
						<div class="cat">
							<img id="img<?= $pic['id'] ?>" src="<?= $chemin_photo ?>" alt="<?= htmlspecialchars($pic['legende_photo']) ?>"> 
							<p><?= htmlspecialchars($pic['texte_photo']) ?></p>	
						</div>
					</div>
					
					<script>
						$( "#img<?= $pic['id'] ?>" ).click(function() {
					  		$( "#myModal<?= $pic['id'] ?>" ).css("display", "block");
						});	
					</script>
				
					<!-- The Modal -->
					<div id="myModal<?= $pic['id'] ?>" class="modal">
					  <span class="close" id="close">&times;</span>
					  <img class="modal-content" src="<?= $chemin_photo ?>">
					  <div id="caption"><?= $pic['legende_photo'] ?></div>
					</div>

					<script>
						$("#myModal<?= $pic['id'] ?>").click(function() {
					  		$( "#myModal<?= $pic['id'] ?>" ).css("display", "none");
						});	
					</script>
					
					<?php
						}
					?>
	
			</div>
		</div>


<?php require 'inc/footer.php'; ?>