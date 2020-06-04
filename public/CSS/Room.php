<?php require('../Model/Jeu.php'); ?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    
    <link rel="stylesheet" type="text/css" href="../public/CSS/Room.css">
</head>
<body>

    <div class="all">
        <div id="Question" class="question">ceci est la question </div></br></br>
        <div id="reponses" class="reponses">
            <div id="reponse1" class="reponse_1"> c'est la Réponse 1 et elle est un peu longue  </div>
            <div id="reponse2" class="reponse_2">c'est la Réponse 2 et elle est un peu longue </div></br>
            <div id="reponse3" class="reponse_3">c'est la Réponse 3 et elle est un peu longue </div>
            <div id="reponse4" class="reponse_4">c'est la Réponse 4 et elle est un peu longue </div></br></br>
        </div>
        <div id="myProgress">
            <div id="myBar">0</div> 
        </div>        
        <br>
        <button onclick="move()">Commencer</button>
    </div>
</body>
</html>
