<?php
	class VerifLogin {
		public function Verif() {
			$link = connection::Connect();

			session_start();
			if(isset($_SESSION['Username']))
				header('Location: main');

			if(isset($_POST['Username']) && isset($_POST['Password'])) {
				$Pseudo = mysqli_real_escape_string($link, $_POST['Username']);
    			$MDP = mysqli_real_escape_string($link, $_POST['Password']);
    		} else {
    			$Pseudo = "///";
    			$MDP = "$$$";
			}

/*--------------------On compare le mdp haché avec le mdp de la bdd----*/
			
			$test = mysqli_query($link,"SELECT mdp FROM login WHERE pseudo = '".$Pseudo."'");
			$password = "Bon" . $Pseudo . "jour" . $MDP. "aussi";
			$password = hash('sha512', $password);
			$hache = mysqli_fetch_array($test);
			if($hache['mdp'] == $password){
				$_SESSION['Username'] = $Pseudo;
				echo "<div class='bon'> Connection réussie <br></div>";
				header('Location: main');

			} else {
				echo "<div class='error'> Mauvais mot de passe <br></div>";
			}
		}
	}
?>