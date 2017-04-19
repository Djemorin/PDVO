<?php  
	if(!empty($_POST) && !empty($_POST['email'])){
		require_once 'inc/connect.php';
		require_once 'inc/functions.php';
		$req = $bdd->prepare('SELECT * FROM users WHERE email = ?');
		$req->execute([$_POST['email']]);
		$user = $req->fetch();
		if($user){
			session_start();
			$reset_token = str_random(60);
			$bdd->prepare('UPDATE users SET reset_token = ?, reset_at = NOW() WHERE id = ?')->execute([$reset_token, $user['id']]);
			$_SESSION['flash']['success'] = 'Un mail vous a été envoyé pour réinitialiser votre mot de passe';
			mail($_POST['email'], 'Réinintialisation de votre mot de passe', "Merci de cliquer sur ce lien pour réinitialiser votre mot de passe\n\nlocalhost/grafikart/reset.php?id={$user['id']}&token=$reset_token");
			header('location: login.php');
			exit();
		}
			else{
				$_SESSION['flash']['danger'] = 'Aucun compte correspondant trouvé';
			}
	}
?>

<?php require 'inc/header.php'; ?>
<div class="p6">
	<h1>Mot de passe oublié</h1>

	<form method="POST">

		<div class="form-group">
			<label>Email</label>
			<input type="email" name="email" class="form-control"/>
		</div>

		<button type="submit" class="btn btn-primary">Réinitialiser mon mot de passe</button>

	</form>
</div>
<?php require 'inc/footer.php'; ?>