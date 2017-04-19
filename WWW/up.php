<?php
require 'inc/functions.php';
logged_only();
require 'inc/header.php';
?>

<div class="p7">
    <div class="p7b">
        <h1>Bonjour <?= $_SESSION['auth']['username']; ?>, bienvenue dans le panneau d'administration.</h1>
        
        <h2>Catalogue:</h2>

        <table>
          <tr>
              <th>Catégorie</th>
              <th>Nom de la photo</th>
              <th>Titre de la photo</th>
              <th>Légende de la photo</th>
              <th>Image</th>
              <th>Modifications</th>
          </tr>

          <?php
            
            $reponse = $bdd->query('SELECT * FROM catalogue  ORDER BY categorie');
            while ($donnees = $reponse->fetch()){
           
          ?>
        
          <tr>
              <td id='categorie'><?= $donnees['categorie']; ?></td>
              <td id='nom'><?= $donnees['nom_photo']; ?></td>
              <td id='texte'><?= $donnees['texte_photo']; ?></td>
              <td id='legende'><?= $donnees['legende_photo']; ?></td>
              <td id=pic><img src="<?= $donnees['chemin_photo'] ?>" width="40%"></td> 
              <td class="modifs"><a id="mod" href="maj.php?id=<?php echo $donnees['id']; ?> "> Modifier </a><a class="sup" href="delete.php?id=<?php echo $donnees['id']; ?>"> Supprimer </a></td>
          </tr>
          
          <?php
              }

              $reponse->closeCursor();

            ?>

            <tr><form action="add.php"><button>Ajouter une nouvelle paire</button></form></tr>
        </table>

        <br>

        <h2>Alimentation:</h2>
        
                <table>
          <tr>
              <th>Aliment</th>
              <th>Légende de la photo</th>
              <th>Image</th>
              <th>Modifications</th>
          </tr>

          <?php
            
            $reponse = $bdd->query('SELECT * FROM food');
            while ($donnees = $reponse->fetch()){
           
          ?>
        
          <tr>
              <td id='nom'><?= $donnees['nom_photo']; ?></td>
              <td id='legende'><?= $donnees['legende_photo']; ?></td>
              <td id=pic><img src="<?= $donnees['chemin_photo'] ?>" width="40%"></td> 
              <td class="modifs"><a id="mod" href="maj.php?id=<?php echo $donnees['id']; ?> "> Modifier </a><a class="sup" href="delete.php?id=<?php echo $donnees['id']; ?>"> Supprimer </a></td>
          </tr>
          

          
          <?php
              }

              $reponse->closeCursor();

            ?>

            <tr><form action="addfood.php"><button>Ajouter un nouvel aliment</button></form></tr>
        </table>

    </div>

</div>

<?php require 'inc/footer.php'; ?>