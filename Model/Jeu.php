
<div class=donnee>
<link rel="stylesheet" type="text/css" href="../public/CSS/Room.css">
<?php
	class Jeu {
		public function Jouer() {
			$link = connection::Connect();

			$query = isset($_GET['query']) ? $_GET['query'] : "";
			$parts = explode("/", $query);			

			if(isset($parts[1]) && isset($parts[2])){
				$nom = $parts[1];
				$theme = $parts[2];
				//echo $nom;
				$search = mysqli_query($link,"SELECT COUNT(*) AS existe_salle FROM ListeTables WHERE Nom = '".$nom."'");
				$data = mysqli_fetch_assoc($search);
			
				/*$themes = $_GET['theme'];*/

				if(($data['existe_salle'] == '0')){
				//	header('Location:main');
				} else
					echo "Connecté dans la salle "."<b>".$nom."</b></br></br>";
					echo "Le thème de la salle est "."<b>".$theme."</b> </br></br>";

					/*echo "test theme : ".$themes;*/
			} else{
				echo "La salle n'existe pas, redirection";
				//header('Location:main');
			}
			/**session_start();
			if(isset($_SESSION['nom'])){
				$nom_salle = $_SESSION['nom'];
				echo $nom_salle; */
			//}
		}
	}
?>

<title>salle <?php// echo $nom?></title>
</div>
