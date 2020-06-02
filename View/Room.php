<?php require('../Model/Jeu.php'); ?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <title>Room</title>
    <link rel="stylesheet" type="text/css" href="../public/CSS/Room.css">
</head>
<body>
    <div class="all">
        <div id="Question" class="question">ceci est la question </div></br></br>
        <div id="reponses" class="reponses">
            <div id="reponse1" class="reponse_1">Réponse 1</div>
            <div id="reponse2" class="reponse_2">Réponse 2</div></br>
            <div id="reponse3" class="reponse_3">Réponse 3</div>
            <div id="reponse4" class="reponse_4">Réponse 4</div></br></br>
        </div>
        <div id="myProgress">
            <div id="myBar">0</div> 
        </div>        
        <br>
        <button onclick="move()" id="button_temps">Commencer</button> 
    </div>
</body>
</html>
