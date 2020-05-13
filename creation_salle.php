<!DOCTYPE html>
<html lang="fr">
<head>
	<title>Création salle</title>
	<meta charset="utf-8">
</head>
<body>
	<?php
		$link=mysqli_connect("localhost","quintois","quintois","quintois");
		if(!$link){
			die("<p>connexion impossible</p>");
		}
	?>
	<form method="POST">
		<input type="text" name="nom" placeholder="Nom de la salle">
		<br/>
		<input type="text" name="nombre_joueurs" placeholder="nombre de joueurs">
		<br/>
		<input type="text" name="nombre_questions" placeholder="nombre de questions">
	</form>		
</body>
</html>