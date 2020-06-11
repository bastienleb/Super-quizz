<!DOCTYPE html>
<html lang="fr">
<head>
	<title>Personnalisation</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="http://dwarves.iut-fbleau.fr/~leblet/WIM/PROJET/public/CSS/perso.css">
</head>
<body>
	<div class="all">
		<h1>Que souhaitez vous faire ?</h1>
		</br></br>
		<div class="modif">
			<form method="post"> 
				<p>Modifier son pseudo:</p>
				<input type="text" name="ModifierPseudo" placeholder="Nouveau Pseudo"></br></br>
				<input type="submit" name="Changer" value="Changer">
			</form>
			</br></br>
			<form method="post">
				<p>Modifier son mot de passe:</p>
				<input type="password" name="AncienMDP" placeholder="Ancien mot de passe"></br></br>
				<input type="password" name="NouveauMDP" placeholder="Nouveau mot de passe"></br></br>
				<input type="password" name="ConfirmMDP" placeholder="Confirmer le mot de passe"></br></br>
				<input type="submit" name="Changer" value="Changer">
			</form>
			</br>
			<a href="main">Retourner à la page principale</a>
		</div> 
	</div>
</body>
</html>