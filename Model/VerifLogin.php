<?php
		//require('../View/login.php');
	class VerifLogin {
		public function Verif() {
			$link = connection::Connect();
			if(isset($_POST['Username']) && isset($_POST['Password'])) {
				$Pseudo = mysqli_real_escape_string($link, $_POST['Username']);
    			$MDP = mysqli_real_escape_string($link, $_POST['Password']);
    		} else {
    			$Pseudo = "Arnaud";
    			$MDP = "$$$";
			}

			$test = mysqli_query($link,"SELECT mdp FROM login WHERE pseudo = '".$Pseudo."'");
			$password = "Bon" . $Pseudo . "jour" . $MDP. "aussi";
			$password = hash('sha512', $password);
			$hache = mysqli_fetch_array($test);

			if($hache['mdp'] == $password){
				echo "Connection réussie" . "<br>";
				header('Location: main');

			} else {
				echo "Mauvais mot de passe <br>";
			}
		}
	}
?>