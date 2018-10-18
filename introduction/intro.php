<h1>Welcome to PHP</h1>
<form method="post" action="intro.php">
	<input type="text" name="recherche" />
</form>
<?php
	if(isset($_POST['recherche']))
	{
		$recherche = $_POST['recherche'];
		echo "Bonjour, vous cherchez :  $recherche";
	}
	
?>

<h2>
	Like it
</h2>