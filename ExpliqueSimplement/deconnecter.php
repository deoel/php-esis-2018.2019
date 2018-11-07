<?php
session_start();
// on detruit toutes les valeurs de la session avec la fonction session_destroy()
session_destroy(); 
// on redigige vers la page de connexion
header('Location: index.php');
?>