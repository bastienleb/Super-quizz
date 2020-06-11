<?php
   	class VerifModifCompte {
   		public function VerifModif() {
   			$link = connection::Connect();
   			$interdiction1 = '<';
            $interdiction2 = '>';
            $interdiction3 = '/';

   			session_start(); //Vérif connection
            if(isset($_SESSION['Username']))
                $Username = $_SESSION['Username'];
            else if(isset($_POST['Username'])){
                $_SESSION['Username'] = $_POST['Username'];

                setcookie('pseudo', $_POST['Username']);
            } else {
                header('Location: login');
            }

  			if(isset($_POST['ModifierPseudo'])){ //Verif changement pseudo
  				$Pseudo = $_POST['ModifierPseudo'];

  				$test1 = stripos($Pseudo, $interdiction1);
                $test2 = stripos($Pseudo, $interdiction2);
                $test3 = stripos($Pseudo, $interdiction3);

                if($test1 == true || $test2 == true || $test3 == true)
 					echo "<div class='error'> Votre Pseudo contient des caracteres interdits !</div>";
   				else if ($Pseudo = "")
   					echo "<div class='error'> Veuillez rentrer un pseudo ! </div>";
                else{
                  	$update = "UPDATE login SET pseudo='$Pseudo' WHERE pseudo='$Username'";
                   	$ModifPseudo = mysqli_query($link, $update);
                   	if(!$ModifPseudo)
                   		die("<div class='error'> Modification de pseudo</div>");
                   	else{
                   		echo "<div class='bon'>Pseudo mis à jour</div>";
                   		$_SESSION['Username'] = $Pseudo;
                   	}
                }
  			}

   			if(isset($_POST['AncienMDP']) && isset($_POST['NouveauMDP']) && isset($_POST['ConfirmMDP'])){ //Verif Changement MDP
   				$AncienMDP = $_POST['AncienMDP'];
   				$NouveauMDP = $_POST['NouveauMDP'];
   				$ConfirmMDP = $_POST['ConfirmMDP'];

   				$VerifAncienMDP = mysqli_query($link,"SELECT mdp FROM login WHERE pseudo = '".$Username."'");
   				$Ancienpassword = "Bon" . $Username . "jour" . $AncienMDP. "aussi";
   				$Ancienpassword = hash('sha512', $Ancienpassword);
   				$hache = mysqli_fetch_array($VerifAncienMDP);

   				if($hache['mdp'] != $Ancienpassword)
   					echo "<div class='error'> Ancien Mot de passe incorrect</div>";
   				else if($ConfirmMDP == "" || $NouveauMDP == "")
   					echo "<div class='error'> Veuillez rentrer un mot de passe!</div>";
   				else if($ConfirmMDP != $NouveauMDP)
   					echo "<div class='error'> Confirmation de mot de passe incorrect</div>";
   				else if($ConfirmMDP == $Username)
   					echo "<div class='error'> le mot de passe ne peut pas être le même que le pseudo !</div>";
   				else{
   					$Nouveaupassword = "Bon" . $Username . "jour" . $ConfirmMDP. "aussi";
   					$Nouveaupassword = hash('sha512', $Nouveaupassword);
   					$update = "UPDATE login SET mdp='$Nouveaupassword' WHERE pseudo='$Username'";
   					$hacheNew = mysqli_query($link, $update);
   					if(!$hacheNew)
   						die("<div class='error'>Modification de Mot de passe</div>");
   					else 
   						echo "<div class='bon'> Mot de passe mis à jour ! </div>";
   				}
   			}
   		}
   	}
?>