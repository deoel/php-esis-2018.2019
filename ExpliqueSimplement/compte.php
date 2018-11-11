<!DOCTYPE <!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>ExpliaueSimplement</title>
</head>
<body>
    <h1>ExpliaueSimplement</h1>
    <h3>Creer un nouveau compte </h3>
    <form method="post" action="creer_compte.php">
        <label>Pseudo : </label>
        <input type="text" name="pseudo"/>
        <br>
        <label>Mot de passe : </label>
        <input type="password" name="mdp"/>
        <br>
        <label>Confirmer : </label>
        <input type="password" name="mdpconf"/>
        <br>
        <label>Email : </label>
        <input type="text" name="email"/>
        <br>
        <label>Sexe </label>
        <select name="sexe">
            <option value="f"> Femme </option>
            <option value="m"> Homme</option>
        </select>
        <br>
        <input type="submit" value="Creer"/> <a href="index.php"> J'ai deja un compte </a>
    </form>
</body>
</html>