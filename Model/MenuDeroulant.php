<?php
    class MenuDeroulant {
/* ------------------Recupere et Affiche dzns un select les themes existant------------------ */
        public function AfficherMenu() {
            $link = connection::Connect();

            $resultat = mysqli_query($link,"SELECT * FROM Themes ");
            if($resultat) {
                $nb_theme = mysqli_query($link,"SELECT COUNT(*) AS nb_theme FROM Themes");
                $nombreThemes = mysqli_fetch_array($nb_theme);
                $i = 1;
                while($i <= $nombreThemes){
                    $nom=mysqli_fetch_object($resultat)
                    $theme[$i] = $nom['nom_theme'];    
                    $i++;
                }
            } else {
                die("<p>erreur dans la requete<p>");
            }
            return $theme;
        }
    }
?>