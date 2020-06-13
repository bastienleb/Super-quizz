<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="https://dwarves.iut-fbleau.fr/~quintois/projet_wim/public/CSS/Room.css">
</head>
<body>      
        <form>
            <div class='question_class'>
            <h4> Question :</h4>
                <div class='question'><b><?php echo json_encode($questions['question']); ?></b>
                </div><br/>
            </div>

            <div class="all">  
            <h4> Reponses :</h4>
            <div id='reponses' class='reponses'>
                <div id='reponse1' class='reponse_1'><?php echo json_encode($questions['reponseA']); ?></div>
                <div id='reponse1' class='reponse_2'><?php echo json_encode($questions['reponseB']); ?></div></br>
                <div id='reponse1' class='reponse_3'><?php echo json_encode($questions['reponseC']); ?></div>
                <div id='reponse1' class='reponse_4'><?php echo json_encode($questions['reponseD']); ?></div>;
            </div>
            <div id="myProgress">
                <div id="myBar">0</div> 
            </div>        
            <br>
            <button onclick="move(); return false;" id="button">Commencer</button>
        </form>
        </br></br>
        <a href="../../../main">Retourner au main</a>
    </div>
</body>
</html>