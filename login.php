<?php  
	if(!empty($_POST) && !empty($_POST['username']) && !empty($_POST['password'])){
		require_once 'inc/connect.php';
		require_once 'inc/functions.php';
		
		$req = $bdd->prepare('SELECT * FROM users WHERE username = :username');
		$req->execute(['username' => $_POST['username']]);
		$user = $req->fetch();
		
		if(password_verify($_POST['password'], $user['password'])){
			session_start();
			$_SESSION['auth'] = $user;
			$_SESSION['flash']['success'] = 'Vous êtes maintenant connecté';
			header('location: up.php');
			exit();
		}
			else{
				$_SESSION['flash']['danger'] = 'Identifiant ou mot de passe incorrect';
			}
	}
?>

<?php require 'inc/header.php'; ?>

<div class="p6">
	
		<h2>Connexion</h2>

	<form class="fond" method="POST">
		<div class="entree">
			<label for="">Utilisateur</label>
			<br>
			<input type="text" name="username" required/>
		</div>

		<div class="entree">
			<label for="">Mot de passe</label>
			<br>
			<input type="password" name="password" required/>
		</div>

		<button type="submit">Se connecter</button>
		<br>
		
		<a href="forget.php">J'ai oublié mon mot de passe comme un manche</a>
	</form>
	
</div>

<?php require 'inc/footer.php'; ?>