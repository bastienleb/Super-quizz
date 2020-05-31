<?php require('../Model/VerifNew_compte.php'); ?>
<!DOCTYPE html>
<html lang="fr">
<head>
	<title>Création de Compte</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="../public/CSS/new_compte.css">
</head>
<body>
	<div class="all">
		<img src='../public/Images/quizz_img.jpg'>
		<form method="POST">
			<b><label>Pseudo : </label></b><br/>
			<b><input type="text" name="Username" required></b>
			<br/><br/>
			<b><label>Mot de passe : </label></b><br/>
			<input type="password" name="mdp" required>
			<br/><br/>
			<b><label>Confirmer le mot de passe : </label></b><br/>
			<input type="password" name="confirmation" required>
			<br/><br/>
			<button name="nouveau_compte"><b>Envoyer</b></button><br/>
			<a href="login.php">connexion</a>
		</form>
	</div>
</body>
</html>