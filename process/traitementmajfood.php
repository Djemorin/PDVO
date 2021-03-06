<!-- Modification d'un aliment -->

<?php
	require '../inc/connect.php';
	
		// Testons si le fichier a bien été envoyé et s'il n'y a pas d'erreur
		if (isset($_FILES['photo']) AND $_FILES['photo']['error'] == 0){
			
			// Testons si le fichier n'est pas trop gros
		    if ($_FILES['photo']['size'] <= 100000000){
		        
		        // Testons si l'extension est autorisée
		        $infosfichier = pathinfo($_FILES['photo']['name']);
		        $extension_upload = $infosfichier['extension'];
		        $extensions_autorisees = array('jpg', 'jpeg', 'gif', 'png');
		        if (in_array($extension_upload, $extensions_autorisees)){
		            
		            // On peut valider le fichier et le stocker définitivement

		            $rand = rand(0, 999);
		        	$new_name = 'imgs/food/' . $rand . basename($_FILES['photo']['name']);
		        	
		             
		            move_uploaded_file($_FILES['photo']['tmp_name'], '../'.$new_name);

					$requete = $bdd->PREPARE('UPDATE food SET nom_photo=?, legende_photo=?, chemin_photo=? WHERE id = '.$_POST["id"]);
	
					$requete->execute(array($_POST['name'], $_POST['legende'], $new_name));

				}
	    	}
		}	else{
		$requete = $bdd->PREPARE('UPDATE food SET nom_photo = ?, legende_photo = ? WHERE id = '.$_POST["id"]);
	
		$requete->execute(array($_POST['name'], $_POST['legende']));
		}

	header('location: ../up.php');
?>