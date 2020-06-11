<!DOCTYPE html>
<html lang="fr">
<head>
	<title>Créations questions</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="https://dwarves.iut-fbleau.fr/~quintois/projet_wim/public/CSS/creation_questions.css">
</head>
<body>
	<label><b>CRÉATION DE QUESTION</b></label>
    <form method="POST">
		<select name="theme" class="selecteur">
            <option value="selection" hidden="" selected="selected">Theme</option>
            <option value="Math">Math</option>
            <option value="Francais">Francais</option>
            <option value="sneakers">Sneakers</option>
        </select>
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
		<a href="main">Retourner à la page principale</a>
    </form>
</body>
</html>