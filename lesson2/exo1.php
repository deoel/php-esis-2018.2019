<?php

	$a = time();
	echo $a;
	echo "<hr/>";
	
	$b = date('d-m-Y', $a);
	echo $b;
	echo "<hr/>";
	
	$c = mktime(0,0,0,9,15,2018);
	echo $c;
	echo "<hr/>";
	
	$e = date('d-m-Y', $c);
	echo $e;
	echo "<hr/>";
	
	$f = checkdate(2,25,2018);
	echo "2-30-2018 : ".$f;
	echo "<hr/>";
	
?>