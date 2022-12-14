<!DOCTYPE html>
<html lang="fr">
<head>
	<title>Création salle</title>
	<link rel="stylesheet" href="https://dwarves.iut-fbleau.fr/~quintois/projet_wim/public/CSS/creation_salle.css">
	<meta charset="utf-8">
</head>
<body>
	<h1 class="titre">Créer une partie</h1>
	<form method="POST">
		<label>Nom de la salle:</label>
		<input type="text" name="nom" placeholder="Nom de la salle" required>
		<br/><br/>
		<label>Nombre de joueurs max:</label>
		<input type="number" min="2" name="nombre_joueurs" placeholder="nombre de joueurs" required>
		<br/><br/>
		<label>Nombre de questions:</label>
		<input type="number" min="2" name="nombre_questions" placeholder="nombre de questions" required>
		<br/><br/>

		<label>Choix du theme:</label>
		<select name="nom_theme" class="selecteur" id='selecte'>
			<option value="selection" hidden="">Selectionnez</option>
			<?php 
                $i = 1;
                while($i <= $creation_salle["nombreLigne"]){
                    echo "<option value=".$creation_salle["theme".$i].">".$creation_salle["theme".$i]."</option>";
                    $i++;
				}
            ?>
        </select>
        <br/><br/><button type="submit" name="créer">Créer</button><br/><br/>
        <a href="main">Retourner à la page principale</a> 
   	</form>
</body>
</html>