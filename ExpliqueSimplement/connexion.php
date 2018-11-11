<?php

    $pseudo = $_POST ['pseudo']; 
    $mdp = $_POST ['mdp']; 

    $db = new PDO('mysql: host=localhost; dbname=explique_simplement','root','root'); 
    $r = $db->prepare ('SELECT * FROM membre WHERE pseudo = :pseudo AND mdp = :mdp');  
     $r -> execute(array (
            'pseudo'=> $pseudo,
            'mdp'=>$mdp));
    $membre = $r-> fetch(PDO::FETCH_OBJ);
    if ($membre !=null)
    {
        // creation de la session 
        session_start();
        $_SESSION ['id'] = $membre->id; 
        $_SESSION ['pseudo'] = $membre->pseudo;
        $_SESSION ['membre_connected'] = true;
        // redigiger vers la page d'accueil 
        header ('Location: accueil.php');
    }
    else 
    {
        echo "Pseudo ou login incorrect.<br/>";
        echo '<a href="index.php" > Recommencer</a>';
    }
?>