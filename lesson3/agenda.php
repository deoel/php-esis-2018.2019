<?php
	require_once('contact.php');

	$c = new Contact("Dan", "09785623");
	$d = new Contact('Esther', '08574655');
	
	echo $c->afficher();
	echo '<br/>';
	echo $d->afficher();
	
	$d->tel = '000066660000';
	echo '<br/>';
	echo $d->afficher();
	
?>