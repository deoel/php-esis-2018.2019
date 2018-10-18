<?php

	echo "Bonjour le monde<br/><br/>";
	echo "Les variables<hr/>";
	
	$prenom = "John";
	$age = 22;
	$montant_en_banque = 250.8;
	$detail = 'Programmeur web';
	
	echo "Prenom : $prenom<br/>";
	echo 'Age : '.$age.' ans<br/>';
	echo 'Montant en banque : '.$montant_en_banque.'$<br/>';
	echo "Detail : $detail<br/>";
	
	echo "<br/>Les constantes<hr/>";
	define('GLSI', 50);
	const GLGST = 52;
	echo 'GLSI : '.GLSI.' Etudiants<br/>';
	echo 'GLGST : '.GLGST.' Etudiants<br/>';
	
	echo "<br/>Les tableaux<hr/>";
	$code_pin = array();
	$code_pin[] = "4582";
	$code_pin[] = "2356";
	$code_pin[] = "7412";
	
	foreach($code_pin as $code)
	{
		echo "$code - ";
	}
	
	echo "<br />";
	$contacts = array(
		"0973686603" => "D303L",
		"0817549614" => "Chris",
		"0895462134" => "Elie"
	);
	
	foreach($contacts as $t => $n)
	{
		echo "$n : $t <br/> ";
	}
?>