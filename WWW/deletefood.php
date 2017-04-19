<?php
	require 'inc/connect.php';
	
	$sql='DELETE FROM food WHERE id =' . $_GET['id'];

	$bdd->exec($sql);
	
	header('location: up.php');
?>