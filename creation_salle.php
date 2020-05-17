<!DOCTYPE html>
<html lang="fr">
<head>
	<title>Création salle</title>
	<link rel="stylesheet" href="creation_salle.css">
	<meta charset="utf-8">
</head>
<body>
	<?php
		/*if(!isset($_COOKIE['user'])) {
        	if(isset($_POST['user'])) {
        	    setcookie('user', $_POST['user']);
        	    $user = json_decode($_POST['user']); //////////////// A METTRE DANS LA PAGE APRES CETTE PAGE 
        	}
        	else {
        	    header('Location: https://dwarves.iut-fbleau.fr/~leblet/WIM/PROJET/login.php');
        	}
    	} else {
        	$user = json_decode($_COOKIE['user']);
    	} */

		$link=mysqli_connect("localhost","quintois","quintois","quintois");
		if(!$link){
			die("<p>connexion impossible</p>");
		}
	?>
	<h1 class="titre">Création de partie</h1>
	<form method="POST">
		<label>Nom de la salle:</label>
		<input type="text" name="nom" placeholder="Nom de la salle" required>
		<br/><br/>
		<label>Nombre de joueurs max:</label>
		<input type="text" name="nombre_joueurs" placeholder="nombre de joueurs" required>
		<br/><br/>
		<label>Nombre de question:</label>
		<input type="text" name="nombre_questions" placeholder="nombre de questions" required>
		<br/><br/>

		<label>Choix du theme:</label>
		<select name="nom_theme" class="selecteur">
		<option value="selection" hidden="">Selectionnez</option>
		
			<?php
 	 			$resultat = mysqli_query($link,"SELECT nom_theme FROM Themes ");
     			if($resultat) {
         	?>
         	<?php
         		while($noom=mysqli_fetch_object($resultat)) {
            		echo "<option>";
            		echo $noom->nom_theme;
            		echo "</option>";
        		}
        		echo "</select>";
    			} else {
        			die("<p>erreur dans la requete<p>");
    			}
 			?>
    	</select>
        <br/><br/><button type="submit" name="créer">Créer</button><br/><br/>
        <a href="main.php">Retourner à la page principale</a> 
   	</form>

   	<?php
   		if(isset($_POST['nom']) && isset($_POST['nombre_joueurs']) && isset($_POST['nombre_questions']) && isset($_POST['nom_theme'])){

   			$user = 'test';	
   			$nom = mysqli_real_escape_string($link, $_POST['nom']);
   			$nombre_joueurs = mysqli_real_escape_string($link, $_POST['nombre_joueurs']);
   			$nombre_questions = mysqli_real_escape_string($link, $_POST['nombre_questions']);
   			$nom_theme = mysqli_real_escape_string($link, $_POST['nom_theme']);

			/*$salle = mysqli_prepare($link,"INSERT INTO ListeTables (Createur,Nom,nombre_joueurs,nombre_questions,theme) VALUES (?,?,?,?,?)");
    		mysqli_stmt_bind_param($salle,"ssdds",$user,$nom,$nombre_joueurs,$nombre_questions,$nom_theme);
    		mysqli_execute($salle); */
    		//header("location: room.php");
   		
   		}
   	?>
</body>
</html>