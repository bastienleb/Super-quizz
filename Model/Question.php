<?php
    class Question {
        public function AfficherQuestions() {
            $link = connection::Connect();

            $resultat = mysqli_query($link,"SELECT * FROM Questions WHERE Theme= 'sneacker' "); 
            if($resultat) {
                while($nom=mysqli_fetch_object($resultat)) {
                    /*echo "<b>".$nom->Theme;*/
            
            
                    echo "<div class='question'><b>".$nom->Question." ? </b></div></br>";
            
                    echo "<div id='reponses' class='reponses'>";

                    echo "<div id='reponse1' class='reponse_1'>".$nom->Reponse_A."</div>";
                    echo "<div id='reponse1' class='reponse_2'>".$nom->Reponse_B."</div></br>";
                    echo "<div id='reponse1' class='reponse_3'>".$nom->Reponse_C."</div>";
                    echo "<div id='reponse1' class='reponse_4'>".$nom->Reponse_D."</div>";
                }
            }else {
                die("<p>erreur dans la requete<p>");
            }
        }
    }
?>