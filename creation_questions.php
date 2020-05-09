<!DOCTYPE html>
<html lang="fr">
<head>
	<title>Créations questions</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="https://dwarves.iut-fbleau.fr/~leblet/WIM/PROJET/creation_questions.css">
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
	<label><b>CRÉATION DE QUESTION</b></label>
    <form method="POST">
    	<input type="text" name="theme" placeholder="Nom du thème" class="theme" required>
    	<br/><br/>

    	<div class="question">
    		<input type="text" name="question1" placeholder="Question 1" class="text_question" required>
    		<br/>
            <input type="text" name="reponseA" placeholder="Reponse A" class="align_gauche" required>
            <input type="radio" name="reponse1" >
    		<input type="text" name="reponseB" placeholder="Reponse B" class="align_droite" required>
    		<input type="radio" name="reponse1" class="align_droite" >
    		<br/>
            <input type="text" name="reponseC" placeholder="Reponse C" class="align_gauche" required>
            <input type="radio" name="reponse1" >            
    		<input type="text" name="reponseD" placeholder="Reponse D" class="align_droite" required>
    		<input type="radio" name="reponse1" class="align_droite" >
    	</div>

    	
    	<button type="submit" name="créer">Créer</button> 
    </form>

    <?php
    	if(isset($_POST['theme']) && isset($_POST['question1']) && isset($_POST['reponseA']) && isset($_POST['reponseB']) && isset($_POST['reponseC']) && isset($_POST['reponseD']) && isset($_POST['reponse1'])){

    		$theme = mysqli_real_escape_string($link, $_POST['theme']);

    		$question1 = mysqli_real_escape_string($link, $_POST['question1']);
    		$reponseA = mysqli_real_escape_string($link, $_POST['reponseA']);
    		$reponseB = mysqli_real_escape_string($link, $_POST['reponseB']);
    		$reponseC = mysqli_real_escape_string($link, $_POST['reponseC']);
    		$reponseD = mysqli_real_escape_string($link, $_POST['reponseD']);
    		$reponse1 = mysqli_real_escape_string($link, $_POST['reponse1']);
    		
            $i = 1;
    	   /* $add_theme = mysqli_prepare($link,"INSERT INTO Themes (Createur,nom_theme) VALUES (?,?)");
    		mysqli_stmt_bind_param($add_theme,"ss",$user,$theme);
	       	mysqli_execute($add_theme); */
		
            $question = mysqli_prepare($link,"INSERT INTO Questions (Theme,Question,num_Question,Reponse_A,Reponse_B,Reponse_C,Reponse_D,Bonne_reponse) VALUES (?,?,?,?,?,?,?,?)");
    		mysqli_stmt_bind_param($question,"ssdsssss",$theme,$question1,$i,$reponseA,$reponseB,$reponseC,$reponseD,$reponse1);
    		mysqli_execute($question);
            } 
	?>
</body>
</html>