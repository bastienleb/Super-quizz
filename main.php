<?php
    $link=mysqli_connect("localhost","quintois","quintois","quintois");
    if(!$link){
        die("<p>connexion impossible</p>");
    }
?>


<!DOCTYPE html>
<html lang="fr">
	<head>
    <ul>
        <li style="float:left"> <h2>SUPER QUIZZ</h2></li>
        <li > <a class="nom" >Connecté en tant que :<b> <!--< ?=$_SESSION['Username']?>--></b></a></li>
        <ul style="float:right"> test2
            <li><a href="deco.php"> déconexion</a></li>
            <li>grade</li>
        </ul>
    </ul>
    <br />
    <br />
    <br />

    <!--////////////////////////////////////////////////////////////////////affichage theme-->
        <select name="theme" class="selecteur">
        <option value="selection" hidden="">Theme</option>
    
        <?php
              $resultat = mysqli_query($link,"SELECT nom_theme FROM Themes ");
             if($resultat) {
         ?>
         <?php
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

        <?php ////////////////////////////////////////////////////////////////////affichage partie
        $bpartie = mysqli_query($link, "SELECT * FROM  ListeTables");
        if($bpartie) {
            ?>
            <table>
            <tr>
                <th>nom</th>
                <th>nombre de joueurs</th>
                <th>theme</th>
            </tr>
            <?php
            while($apartie=mysqli_fetch_object($bpartie)) {
                echo "<tr>";
                echo "<td>".$apartie->Nom."</td>";
                echo "<td>".$apartie->nombre_joueurs."</td>";
                echo "<td>".$apartie->theme."</td>";
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

        
        <!--//////////////////////////////////////////////////////////////////////////////button-->
        <form method="post" action="creation_questions.php">
            <button name="set_question">Crée un set de question </button>
        </form>

        <form method="post" action="http://dwarves.iut-fbleau.fr/~quintois/projet_wim/creation_salle.php">
            <button name="set_question">Crée une partie</button>
        </form>
    
    </head>
	<body>
	</body>
</html>
