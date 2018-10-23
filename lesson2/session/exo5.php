<?php
	session_start();
	$_SESSION['nom'] = 'Raph';
	$_SESSION['tel'] = '0854695231';
	
	echo "Valeurs definies dans la session";
?>