<!-- Suppression d'une paire du catalogue -->

<?php
	require '../inc/connect.php';
	
	$sql='DELETE FROM catalogue WHERE id =' . $_GET['id'];

	$bdd->exec($sql);
	
	header('location: ../up.php');
?>