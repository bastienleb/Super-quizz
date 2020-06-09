<?php //require('../Model/VerifSession2.php'); ?>

<!DOCTYPE html>
<html lang="fr">
	<head>
        <meta charset="utf-8">
	    <title>page principale </title>
	    <link rel="stylesheet" href="https://dwarves.iut-fbleau.fr/~quintois/projet_wim/public/CSS/main.css">
    </head>
    <body>
    <ul>
        <li><a class="nom" style="float:left">Connecté en tant que :<b> <?=$Username?></b></a></li>
        <li style="float:center" class="titre"><b><h3>SUPER QUIZZ</h3></b></li>
        <div class="dropdown">
            <button class="dropbtn">Parametre</button>
            <div class="dropdown-content">
                <a href="#">Perso</a>
                <a href="logout">Déconexion</a>
            </div>
        </div>
    </ul>
    <div class="gauche">
        <h4>Partie en cours </h4>
        <!-------------------affichage partie---------------->    
        <table>
            <tr>
                <th>nom</th>
                <th>nombre de joueurs max</th>
                <th>theme</th>
                <th>entrer</th>
            </tr>
    </div>

        
        <!----------------------button---------------------->
        <div class="droite">
            <h4>Parametrer le jeu </h4>
            <button name="set_question" class= "buttonq" onclick="window.location.href='creation_questions'">Crée un set de question</button>
            
            <button name="set_question" class="buttonp" onclick="window.location.href='creation_salle'">Crée une partie</button>

            <h4>Theme deja existant</h4>
            <div class="theme"> <!--affichage theme-->
                <select name="theme" class="selecteur">
                <option value="selection" hidden="" selected="selected">Theme</option>
            </div>
        </div>  
	</body>
</html>