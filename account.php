<?php

require 'inc/functions.php';
logged_only();

if(!empty($_POST)){
	if(empty($_POST['password']) || $_POST['password'] != $_POST['password_confirm']){
		$_SESSION['flash']['danger'] = "Les mots de passe ne correspondent pas";
	}
		else{
			$user_id = $_SESSION['auth']['id'];
			$password = password_hash($_POST['password'], PASSWORD_BCRYPT);
			require_once 'inc/connect.php';
			$bdd->prepare('UPDATE users SET password = ? WHERE id = ?')->execute([$password, $user_id]);
			$_SESSION['flash']['success'] = "Mot de passe modifié avec succès";
		}
}

require 'inc/header.php';

?>

<div class="p6">
	<h1>Bonjour <?= $_SESSION['auth']['username']; ?>!</h1>

	<form action="" class="fond" method="post">
		<div>
			<input type="password" name="password" placeholder="Changez votre mot de passe"/>
		</div>
		<div>
			<input type="password" name="password_confirm" placeholder="Confirmez votre mot de passe"/>
		</div>
		<button>Changer mon mot de passe</button>
	</form>
</div>

<?php require 'inc/footer.php'; ?>