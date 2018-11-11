<?php

    $pseudo = $_POST ['pseudo']; 
    $mdp = $_POST ['mdp']; 
    $mdpconf = $_POST ['mdpconf']; 
    $email = $_POST ['email']; 
    $sexe = $_POST ['sexe']; 
    // la fonction emply verifie si une variable est vide ou pas
    if (empty($pseudo) OR empty ($mdp)OR empty ($email) OR empty ($sexe))
    {
        echo "il faut remplir tous les champs <br/>";
        echo '<a href="compte.php">Recommencer</a>';
    }
    else if ($mdp != $mdpconf)
    {
        echo "Les deux mots de passe ne correspondent pas <br/>";
        echo '<a href="compte.php"> Recommencer</a>'; 
    }
    else {
        // insertion dans la base des donnees 
        $db = new PDO('mysql: host=localhost; dbname=explique_simplement','root','root'); 
        $str = 'INSERT INTO membre VALUES (null, :pseudo, :mdp, :sexe, :email)';
        $val = array (
            'pseudo'=> $pseudo,
            'mdp'=>$mdp,
            'sexe'=> $sexe,
            'email'=>$email
        );
        $req = $db->prepare ($str);
        $req-> execute($val); 
        echo "Felicitation! votre compte a ete bien cree.<br/>";
        echo '<a href="index.php" > Se connecter maintenant</a>';
    }
?>