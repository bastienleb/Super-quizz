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
    </ul>

    <?php ////////////////////////////////////////////////////////////////////affichage theme
        $btheme = mysqli_query($link, "SELECT * FROM Themes");
        if($btheme) {
            ?>
            <table>
            <tr>
                <th>Thèmes</th>
            </tr>
            <?php
            while($atheme=mysqli_fetch_object($btheme)) {
                echo "<tr>";
                echo "<td>".$atheme->nom_theme."</td>";
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
        <form method="post" action="creation_questions.php">
            <button name="set_question">Crée un set de question </button>
        </form>

        <form method="post" /*action="creation_salle.php"*/>
            <button name="set_question">Crée une partie</button>
        </form>
    
    </head>
	<body>
	</body>
</html>
