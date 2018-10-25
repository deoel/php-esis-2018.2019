<?php
	
	$db = new PDO('mysql:host=localhost;dbname=agenda', 'root', '');
	
	$str = 'INSERT INTO contact VALUES(null, :n, :t)';
	
	$r = $db->prepare($str);
	$r->execute(
		array('n' => 'John', 't' => '08945631')
	);

	echo "Contact added";
?>