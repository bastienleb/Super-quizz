<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="../public/CSS/Room.css">
</head>
<body>
    <?php require('../Model/Jeu.php'); ?>
    <div class="all">
        
        <?php require('../Model/Question.php'); ?>
        <div id="myProgress">
            <div id="myBar">0</div> 
        </div>        
        <br>

        <button onclick="move()">Commencer</button>
    </div>
</body>
</html>
