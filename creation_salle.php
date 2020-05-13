<!DOCTYPE html>
<html lang="fr">
<head>
	<title>Création salle</title>
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
	<form method="POST">
		<input type="text" name="nom" placeholder="Nom de la salle">
		<br/>
		<input type="text" name="nombre_joueurs" placeholder="nombre de joueurs">
		<br/>
		<input type="text" name="nombre_questions" placeholder="nombre de questions">
		<select name="user_name" class="selecteur">
	    	<option value="selection" hidden="">Selectionnez</option>
		
			<?php
 	 			$resultat = mysqli_query($link,"SELECT nom_theme FROM Themes ");
     			if($resultat) {
         	?>
         	<?php
         		while($nom=mysqli_fetch_object($resultat)) {
            		echo "<option>";
            		echo $nom->nom_theme;
            		echo "</option>";
        		}
        		echo "</select>";
    			} else {
        			die("<p>erreur dans la requete<p>");
    			}
 			?>
    	</select>
	</form>		
</body>
</html>