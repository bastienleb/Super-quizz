<?php
    $link=mysqli_connect("localhost","quintois","quintois","quintois");
    if(!$link){
        die("<p>connexion impossible</p>");
    }
?>


<!DOCTYPE html>
<html lang="fr">
	<head>
        <meta charset="utf-8">
	    <title>connection </title>
	    <link rel="stylesheet" href="main.css">
	</head>
    <ul>
        <li > <a class="nom" style="float:left">Connecté en tant que :<b> <!--< ?=$_SESSION['Username']?>--></b></a></li>
        <li style="float:center"> <h4>SUPER QUIZZ</h4></li>
        <div class="dropdown">
            <button class="dropbtn">Parametre</button>
            <div class="dropdown-content">
                <a href="#">test</a>
                <a href="deco.php">déconexion</a>
            </div>
        </div>
    </ul>

    <div class="theme">
        <select name="theme" class="selecteur">
        <option value="selection" hidden="">Theme</option>
        
        <?php
            $resultat = mysqli_query($link,"SELECT * FROM Themes ");
            if($resultat) {
                while($nom=mysqli_fetch_object($resultat)) {
                    echo "<option>";
                    echo $nom->nom_theme;
                    echo "</option>";
                }
                echo "</select>";
            } else {
                    die("<p>erreur dans la requete<p>");
            }
        ?>
    </div>
    

        <div class="gauche">
        <h4>Partie en cours </h4>
        <?php ////////////////////////////////////////////////////////////////////affichage partie
        
            $bpartie = mysqli_query($link, "SELECT * FROM  ListeTables");
            if($bpartie) {
                ?>
                <table>
                <tr>
                    <th>nom</th>
                    <th>nombre de joueurs max</th>
                    <th>theme</th>
                </tr>
                <?php
                while($apartie=mysqli_fetch_object($bpartie)) {
                    echo "<tr>";
                    echo "<td>".$apartie->Nom."</td>";
                    echo "<td>".$apartie->nombre_joueurs."</td>";
                    echo "<td>".$apartie->theme."</td>";
                    echo "<td>";
                    ?><input type="button" value="entrer"><?php
                    echo "</td>";
                ?>
                
                <?php
                    echo "</tr>";
                }
                echo "</table>";
            } else {
                die("<p>erreur dans la requete<p>");
            }
            mysqli_close($link);
            ?>
        </div>

        
        <!--//////////////////////////////////////////////////////////////////////////////button-->
        <div class="droite">
            <h4>Parametrer le jeu </h4>
            <form method="post" action="creation_questions.php">
                <button name="set_question" class= "buttonq">Crée un set de question </button>
            </form>

            <form method="post" action="http://dwarves.iut-fbleau.fr/~quintois/projet_wim/creation_salle.php">
                <button name="set_question" class="buttonp">Crée une partie</button>
            </form>

            

            <!--////////////////////////////////////////////////////////////////////affichage theme-->
            
    
    </head>
	<body>
	</body>
</html>
