
<div class=donnee>
<link rel="stylesheet" type="text/css" href="../public/CSS/Room.css">
	<?php	
		require('connection.php');
		$nom = $_GET['nom'];
		
		if(isset($_GET['nom'])){
			$search = mysqli_query($link,"SELECT COUNT(*) AS existe_salle FROM ListeTables WHERE Nom = '".$nom."'");
			$data = mysqli_fetch_assoc($search);
			
			/*$themes = $_GET['theme'];*/

			if(($data['existe_salle'] == '0')){
				header('Location:../View/main.php');
			} else
				echo "Connecter dans la salle "."<b>".$nom."</b></br></br>";
				echo "Le theme de la salle est "."<b>"."A MODIFIER"."</b> </br></br>";

				/*echo "test theme : ".$themes;*/
		} else{
			echo "La salle n'existe pas, redirection";
			header('Location: ../View/main.php');
		}
		/**session_start();
		if(isset($_SESSION['nom'])){
			$nom_salle = $_SESSION['nom'];
			echo $nom_salle; */
		//}
	?>

<title>salle <?php echo $nom?></title>
</div>
