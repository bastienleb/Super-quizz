<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="http://dwarves.iut-fbleau.fr/~leblet/WIM/PROJET/public/CSS/Room.css">
</head>
<body>          
    <form>
        <div class='question_class'>
            <h4> Question :</h4>
            <div id="question" class='question' ><?php echo ($questions['question']); ?>
            </div><br/>
        </div>
        <div class="all" id="test">
            <h4> Reponses :</h4>
            <div id='reponses' class='reponses'>
                <div id='reponse1' class='reponse_1' onclick="getId(this);"><?php echo ($questions['reponseA']); ?></div>
                <div id='reponse2' class='reponse_2' onclick="getId(this);"><?php echo ($questions['reponseB']); ?></div></br>
                <div id='reponse3' class='reponse_3' onclick="getId(this);"><?php echo ($questions['reponseC']); ?></div>
                <div id='reponse4' class='reponse_4' onclick="getId(this);"><?php echo ($questions['reponseD']); ?></div>
                <div id="bonnereponse" hidden><?php echo ($questions['BonneReponse']); ?></div>
            </div>
            <div id="myProgress">
                <div id="myBar">0</div>
            </div>        
            <br>
            <button onclick="move(); return false;" id="button">Commencer</button>
        </div>
    </form>
    </br></br>
    <a href="../../../main">Retourner au main</a>
    <p id="carre" hidden> score = </p>
    <p id="demo"></p>
    <script type="text/javascript" src="http://dwarves.iut-fbleau.fr/~leblet/WIM/PROJET/public/JavaScript/Jeu.js"></script>
</body>
</html>