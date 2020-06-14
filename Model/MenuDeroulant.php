<?php
    class MenuDeroulant {
/* ------------------Recupere et Affiche dzns un select les themes existant------------------ */
        public function AfficherMenu() {
            $link = connection::Connect();

            $resultat = mysqli_query($link,"SELECT nom_theme FROM Themes ");
            $nombreL = mysqli_query($link,"SELECT COUNT(*) FROM Themes");
            $nombreLigne = mysqli_fetch_array($nombreL);
            $retour["nombreLigne"] = $nombreLigne[0];
            if($resultat) {
                $i = 1;
                while($nom=mysqli_fetch_array($resultat)){
                    $retour["theme".$i] = $nom['nom_theme'];
                    $i++;
                }
            } else {
                die("<p>erreur dans la requete<p>");
            }
            return $retour;
        }
    }
?>