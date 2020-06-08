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
        <li > <a class="nom" style="float:left">Connecté en tant que :<b> <?=$Username?></b></a></li>
        <li style="float:center" class="titre"><b><h3>SUPER QUIZZ</h3></b></li>
        <div class="dropdown">
            <button class="dropbtn">Parametre</button>
            <div class="dropdown-content">
                <a href="#">Perso</a>
                <a href="../Model/logout.php">Déconexion</a>
            </div>
        </div>
    </ul>
        <!--////////////////////////////////////////////////////////////////////affichage theme-->
    <div class="theme">
        <select name="theme" class="selecteur">
        <option value="selection" hidden="" selected="selected">Theme</option>
    </div>

        <div class="gauche">
        <h4>Partie en cours </h4>
            <?php require('../Model/ListeThemes.php'); ?>
            <?php require('../Model/SelecteurThemes.php'); ?>
                    <!---------------------affichage partie-->
        </div>

        
        <!--//////////////////////////////////////////////////////////////////////////////button-->
        <div class="droite">
            <h4>Parametrer le jeu </h4>
            <form method="post" action="creation_questions.php">
                <button name="set_question" class= "buttonq">Crée un set de question </button>
            </form>

            <form method="post" action="creation_salle.php">
                <button name="set_question" class="buttonp">Crée une partie</button>
            </form>
            <h4>Theme deja existant</h4>
        </div>

        
	</body>
</html>
