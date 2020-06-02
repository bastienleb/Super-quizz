<?php
	
	require('connection.php');
	if(isset($_GET['nom'])){
		$search = mysqli_query($link,"SELECT COUNT(*) AS existe_salle FROM ListeTables WHERE Nom = '".$_GET['nom']."'");
    	$data = mysqli_fetch_assoc($search);

    	if(($data['existe_salle'] == '0')){
    		header('Location:../View/main.php');
    	} else
			echo $_GET['nom'];
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