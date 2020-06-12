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
                $resultat = mysqli_query($link,"SELECT * FROM Questions WHERE Theme= '$theme'"); 
                if($resultat) {
                    while($nom=mysqli_fetch_object($resultat)) {
                        /*echo "<b>".$nom->Theme;*/
                    
                        echo "<div class='question_class'>";
                        echo "<div class='question'><b>".$nom->Question."  </b></div></br>";
                        
                        echo "<div id='reponses' class='reponses'>";

                        echo "<div id='reponse1' class='reponse_1'>".$nom->Reponse_A."</div>";
                        echo "<div id='reponse1' class='reponse_2'>".$nom->Reponse_B."</div></br>";
                        echo "<div id='reponse1' class='reponse_3'>".$nom->Reponse_C."</div>";
                        echo "<div id='reponse1' class='reponse_4'>".$nom->Reponse_D."</div>";
                        echo "</div>";
                    }
                }else {
                    die("<p>erreur dans la requete<p>");
                }
            }
        }
    }
?>