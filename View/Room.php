<?php require('../Model/Jeu.php'); ?>

<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="utf-8">
	<title>Room</title>
	<link rel="stylesheet" type="text/css" href="../public/CSS/Room.css">
</head>
<body>
	<div id="Question">Question </div>
	<div id="reponses">
		<div id="reponse1">Réponse 1</div>
		<div id="reponse2">Réponse 2</div>
		<div id="reponse3">Réponse 3</div>
		<div id="reponse4">Réponse 4</div>
	</div>

	<div id="myProgress">
    	<div id="myBar">0</div> 
	</div>
	<br>
	<button onclick="move()" id="button_temps">Répondre</button> 
</body>
</html>