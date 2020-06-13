<?php
   	class Jeu {
   		public function Jouer() {
			$link = connection::Connect();
			   
/* ------------------verification joueur connecte------------------ */
			session_start();
            if(isset($_SESSION['Username']))
                $Username = $_SESSION['Username'];
            else if(isset($_POST['Username'])){
                $_SESSION['Username'] = $_POST['Username'];

                setcookie('pseudo', $_POST['Username']);
            } else {
                header('Location: ../../../login');
			}
			
/* ------------------Recuperation de donnee de l'URL------------------ */
			$query = isset($_GET['query']) ? $_GET['query'] : "";
   			$parts = explode("/", $query);			

			if(isset($parts[1]) && isset($parts[2]) && isset($parts[3])){
   				$nom = $parts[1];
   				$theme = $parts[2];
				$nombre_joueurs = $parts[3];
				   
/* ------------------Recuperation et modification de la BDD------------------ */
				$search = mysqli_query($link,"SELECT COUNT(*) AS existe_salle FROM ListeTables WHERE Nom = '".$nom."' AND theme = '".$theme."'");
   				$data = mysqli_fetch_assoc($search);
    				
   				$retour = mysqli_query($link,'SELECT COUNT(*) AS nbre_entrees FROM Nombre_online WHERE ip=\''.$_SERVER['REMOTE_ADDR'].'\'');
   				$donnees = mysqli_fetch_array($retour);

/*-----------------------------Récupération du nombre de connectés-------------*/

					if ($donnees['nbre_entrees'] == 0){
       				$add = mysqli_query($link,"INSERT INTO Nombre_online VALUES ('".$Username."', '".$nom."', '".$_SERVER['REMOTE_ADDR']."', '".time()."')");
   				}else{
       				$update = "UPDATE Nombre_online SET timestamp='".time()."' WHERE ip='".$_SERVER['REMOTE_ADDR']."'";
       				mysqli_query($link, $update);
       			}
       			$timestamp_15min = time() - (60 * 15);//nombre secondes
   				$del = mysqli_query($link,"DELETE FROM Nombre_online WHERE timestamp<'".$timestamp_15min."'");
    				
   				$nombre_co = mysqli_query($link,"SELECT COUNT(*) AS nombre_co FROM Nombre_online WHERE NomTable='".$nom."'");
				$nombre_connecte = mysqli_fetch_array($nombre_co);
				   
/* ------------------Affichage des donnee ------------------ */    				
   				if($nombre_connecte['nombre_co'] > $nombre_joueurs)
   					header('Location: ../../../main');

					echo "<p>Il y a actuellement ".$nombre_connecte['nombre_co']." / ".$nombre_joueurs." joueurs dans la salle</p>";

					if(($data['existe_salle'] == '0')){
   					header('Location: ../../../main');
   				} else{
   					echo "<div class='test'>"."<div class='donnee'>"; 
   					echo "<p>Connecté dans la salle "."<b>".$nom."</b></br></br></p>";
   					echo "<p>Le thème de la salle est "."<b>".$theme."</b> </br></p>";
   					echo "</div>"."</div>";
   				}
   			} else{
   				echo "La salle n'existe pas, redirection";
   				header('Location: ../../../main');
   			}
        echo "<script type=\"text/javascript\" src=\"https://dwarves.iut-fbleau.fr/~quintois/projet_wim/public/JavaScript/Jeu.js\"></script>";
   		}
   	}
?>