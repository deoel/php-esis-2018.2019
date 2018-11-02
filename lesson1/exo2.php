<?php

	function moyenne(int $cotes): float
	{
		$s = 0;
		foreach($cotes as $c)
		{
			$s += $c;
		}
		$n = count($cotes);
		return ($s/$n);
	}
	
	$tc = array(8, 9, 7, 5, 7);
	$m = moyenne($tc);
	
	echo "Moyenne : $m<hr/>";
	
	function get_telephone(string $nom): ?int
	{
		$contacts = array(
			"0973686603" => "D303L",
			"0817549614" => "Chris",
			"0895462134" => "Elie"
		);
	
		foreach($contacts as $t => $n)
		{
			if($n == $nom)
			{
				return $t;
			}
		}
		return null;
	}
	
	$h = get_telephone('Chris');
	echo "Tel de Chris : $h<hr/>";
	
	
?>
