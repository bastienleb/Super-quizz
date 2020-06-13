<?php
    class Question {
        public function AfficherQuestions() {
            $link = connection::Connect();

/*------------------ Recueperation de donnee de l'URL------------------ */

            $query = isset($_GET['query']) ? $_GET['query'] : "";
    		$parts = explode("/", $query);			

			if(isset($parts[2])){
                $theme = $parts[2];

/*------------------ recuperation de la BDD theme et affichage de la question et des reponses------------------ */ 
                $nombre = 1;
                $resultat = mysqli_query($link,"SELECT * FROM Questions WHERE Theme= '$theme' ORDER BY rand() LIMIT $nombre"); 
                if($resultat) {
                    $nom=mysqli_fetch_array($resultat);
                    $question = $nom['Question'];
                    $reponseA = $nom['Reponse_A'];
                    $reponseB = $nom['Reponse_B'];
                    $reponseC = $nom['Reponse_C'];
                    $reponseD = $nom['Reponse_D'];
                    $BonneReponse = $nom['Bonne_reponse'];
                } else {
                    die("<p>erreur dans la requete<p>");
                }
                $envoi = array(
                    "question"=>$question,
                    "reponseA"=>$reponseA,
                    "reponseB"=>$reponseB,
                    "reponseC"=>$reponseC,
                    "reponseD"=>$reponseD,
                );
                return $envoi;
            }
        }
    }
?>