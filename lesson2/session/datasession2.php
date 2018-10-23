<?php
	session_start();
	
	echo "Nom : ".$_SESSION['nom'];
	echo "<br/>Tel : ".$_SESSION['tel'];
	
	$_SESSION['nom'] = 'Gloire';
	$_SESSION['tel'] = '44444';
?>