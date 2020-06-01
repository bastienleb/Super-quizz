<?php

require('connection.php');


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