<?php require 'inc/header.php'; ?>

<div class="p7">

<form action="cible.php" method="post" enctype="multipart/form-data">
    <table>
        <tr>
            <td><p><label for="nom">Nom : </label>
                <input type="text" name="nom" id="nom" autofocus required /></p>
                                     
            <p><label for="creation">Date de création : </label>
                <input placeholder="AAAA/MM/JJ" type="date" name="date" id="date" /></p>
                 
            <p><label for="mail">Adresse mail : </label>
                <input type="email" name="mail" id="mail" /></p>
                 
            <p><label for="site">URL du site principal : </label>
                <input type="url" name="site" id="site" /></p></td>
                 
            <td><p><label for="logo">Logo : </label>
                <input type="hidden" name="MAX_FILE_SIZE" value="1048576" />
                <input type="file" name="logo" id="logo" /></p>
                 
            <p><label for="forme">Forme juridique : </label>
                <select name="forme" id="forme">
                    <option value=""></option>
                    <option value="ONG">O.N.G.</option>
                    <option value="Association">Association</option>
                    <option value="Collectif">Collectif</option>
                    <option value="Particulier">Particulier</option>
                </select></p>
                 
            <p><label for="domaine">Domaine d'action :</label>
                <input type="text" name="domaine" id="domaine" /></p>
                 
            <p><label for="lieux">Lieux d'action :</label>
                <input type="text" name="lieux" id="lieux" /></p></td>
                                                         
            <td><p><label for="descriptif">Descriptif :</label>
                <textarea name="descriptif" id="descriptif" cols="50" rows="10" required></textarea></p>
                 
                <input type="submit" value="POSTER" class="OK" />
                <input type="reset" name="effacer" value="EFFACER" class="NOK" /></td>
        </tr>
    </table>
    </form>

</div>

<?php require 'inc/footer.php'; ?>