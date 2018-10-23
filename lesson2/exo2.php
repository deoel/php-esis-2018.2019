<?php
	
	$commentaire = "PHP est un langage Objet";
	$n = strlen($commentaire);
	echo $n;
	echo "<hr/>";
	
	$min = strtolower($commentaire);
	echo $min;
	echo "<hr/>";
	
	$maj = strtoupper($commentaire);
	echo $maj;
	echo "<hr/>";
	
	$nom = 'bileu kapepula';
	echo ucfirst($nom);
	echo "<hr/>";
	
	$lang = "French,Spanish,English,Chinese,Deutch";
	$tab_lang = explode(',', $lang);
	foreach($tab_lang as $l)
	{
		echo $l.'<br/>';
	}
	echo "<hr/>";
	
	$prenoms = array('Pathy', 'Joel', 'Titi', 'Vanel');
	$p = implode(' *-* ', $prenoms);
	echo $p;
	echo "<hr/>";
?>