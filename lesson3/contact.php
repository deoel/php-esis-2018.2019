<?php

	class Contact 
	{
		/**
		définitions des attributs
		**/
		public $nom;
		public $tel;
		
		/**
		ceci est un constructeur,
		il permet de créer des instances (objets)
		de type Contact.
		Un constructeur est juste une fonction
		**/
		public function __construct($n, $t)
		{
			$this->nom = $n;
			$this->tel = $t;
		}
		
		/**
		ceci est une méthode ou une fonction
		**/
		public function afficher()
		{
			echo '<strong>'.$this->nom.'</strong> : '.$this->tel;
		}
	}

	$e = new Contact('Chris', '0885');
	$e->afficher();
?>