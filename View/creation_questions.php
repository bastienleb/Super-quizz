<?php //require('../Model/VerifSession2.php'); ?>
<?php require('../Model/VerifQuestions.php'); ?>

<!DOCTYPE html>
<html lang="fr">
<head>
	<title>Créations questions</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="../public/CSS/creation_questions.css">
</head>
<body>
	<label><b>CRÉATION DE QUESTION</b></label>
    <form method="POST">
    	<input type="text" name="theme" placeholder="Nom du thème" class="theme" required>
    	<br/><br/>

    	<div class="question">
    		<input type="text" name="question1" placeholder="Question 1" class="text_question" required>
    		<br/>
            <input type="text" name="reponseA" placeholder="Reponse A" class="align_gauche" required>
            <input type="radio" name="reponse1" value="A">
    		<input type="text" name="reponseB" placeholder="Reponse B" class="align_droite" required>
    		<input type="radio" name="reponse1" value="B">
    		<br/>
            <input type="text" name="reponseC" placeholder="Reponse C" class="align_gauche" required>
            <input type="radio" name="reponse1" value="C" >            
    		<input type="text" name="reponseD" placeholder="Reponse D" class="align_droite" required>
    		<input type="radio" name="reponse1" value="D">
    	</div>

    	
		<button type="submit" name="créer">Créer</button> <br/><br/>
		<a href="main.php">Retourner à la page principale</a>
    </form>
</body>
</html>