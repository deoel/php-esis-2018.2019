<?php
// verification dans la session si le membre est connecte
// si la cle membre-connected n'est pas la session, donc il n'est pas connecte
// alors on le redirige vers la page connexion
session_start();
if (!isset ($_SESSION['membre_connected']))
{
    header('Location: index.php');
}
?>
<!DOCTYPE <!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>ExpliaueSimplement</title>
</head>
<body>
    <strong> [<?php echo $_SESSION ['pseudo']?> connecte]</strong>
    <h2> Welcome to ExpliqueSimplement</h2>
    <p> Si vous comprennez bien un concept, un sujet ou un domaine, <br/> 
    expliquer le simplement dans vos propres mots, en donnant des exemples <br/>
    ou en faisant des analogies.</p>
    <p> 
        <a href=""> Nouveau sujet </a><br/>
        <a href=""> Sujet traites </a><br/>
        <a href=""> Charte </a><br/>
        <a href="deconnecter.php"> Se deconnecter </a><br/>
    </p>
</body>
</html>