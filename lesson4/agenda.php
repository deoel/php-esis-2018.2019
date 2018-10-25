<?php
	
	$db = new PDO('mysql:host=localhost;dbname=agenda', 'root', '');
	
	$str = 'SELECT * FROM contact';
	$r = $db->prepare($str);
	$r->execute();
	
	$tab_c = $r->fetchAll();
	foreach($tab_c as $c)
	{
		echo $c['nom'].' : '.$c['tel'];
		echo '<br/>';
	}
?>