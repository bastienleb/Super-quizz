<link rel="stylesheet" type="text/css" href="../public/CSS/Room.css">
<?php

require('connection.php');


$resultat = mysqli_query($link,"SELECT * FROM Questions WHERE Theme= 'sneacker' "); 
    if($resultat) {
        while($nom=mysqli_fetch_object($resultat)) {
            /*echo "<b>".$nom->Theme;*/
            ?>

            <div class="question">
                <?php echo "<b>".$nom->Question." ? </b>"?>
            </div>
            </br>
            <div id="reponses" class="reponses">

                <div id="reponse1" class="reponse_1" href="#">
                    <?php echo $nom->Reponse_A; ?>
                </div>

                <div id="reponse2" class="reponse_2">
                    <?php echo $nom->Reponse_B; ?>
                </div>
                </br>
                <div id="reponse3" class="reponse_3">
                    <?php echo $nom->Reponse_C; ?>
                </div>

                <div id="reponse4" class="reponse_4">
                    <?php echo $nom->Reponse_D;?>
                </div>
            </div>
            <?php
        }
    } else {
        die("<p>erreur dans la requete<p>");
    }
?>