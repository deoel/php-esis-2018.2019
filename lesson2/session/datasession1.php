<?php
	session_start();
	
	echo "Bonjour ".$_SESSION['nom'];
	echo "<br/>Voici ton num : ".$_SESSION['tel'];
	
	$_SESSION['nom'] = 'Joel';
	$_SESSION['tel'] = '88888888';
?>