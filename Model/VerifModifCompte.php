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
                header('Location: ../../login');
            }

			if(isset($_POST['ModifierPseudo'])){ //Verif changement pseudo
				$Pseudo = $_POST['ModifierPseudo'];

				$test1 = stripos($Pseudo, $interdiction1);
                $test2 = stripos($Pseudo, $interdiction2);
                $test3 = stripos($Pseudo, $interdiction3);

                if($test1 == true || $test2 == true || $test3 == true)
                    echo "Erreur : Votre nom de Salle contient des caracteres interdits !";
                else{
                	$update = "UPDATE login SET pseudo='$Pseudo' WHERE pseudo='$Username'";
                	$ModifPseudo = mysqli_query($link, $update);
                	if(!$ModifPseudo)
                		die("<p>Erreur Modification de pseudo</p>");
                	else{
                		echo "Pseudo mis à jour";
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

				if($hache['mdp'] != $Ancienpassword){
					echo "Ancien Mot de passe incorrect";
				}else if($ConfirmMDP != $NouveauMDP){
					echo "Confirmation de mot de passe incorrect";
				}else if($ConfirmMDP == $Username){
					echo "Erreur: le mot de passe ne peut pas être le même que le pseudo !";
				}else{
					$Nouveaupassword = "Bon" . $Username . "jour" . $ConfirmMDP. "aussi";
					$Nouveaupassword = hash('sha512', $Nouveaupassword);
					$update = "UPDATE login SET mdp='$Nouveaupassword' WHERE pseudo='$Username'";
					$hacheNew = mysqli_query($link, $update);
					if(!$hacheNew)
						die("<p>Erreur Modification de Mot de passe</p>");
					else
						echo "Mot de passe mis à jour !";
				}
			}
		}
	}
?>