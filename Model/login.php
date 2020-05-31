<?php

require('connection.php');

function login($Pseudo, $MDP) {
	$link = get_connect();

	$Pseudo = mysqli_real_escape_string($link, $_POST['Username']);
    $MDP = mysqli_real_escape_string($link, $_POST['Password']);


	$test = mysqli_query($link,"SELECT mdp FROM login WHERE pseudo = '".$Pseudo."'");
	$password = "Bon" . $Pseudo . "jour" . $MDP. "aussi";
	$password = hash('sha512', $password);
	$hache = mysqli_fetch_array($test);


	if($hache['mdp'] == $password){
		echo "Connection réussie" . "<br>";
		header('location: ../../Backup_pr_wim/main.php');

	} else {
		echo "Mauvais mot de passe <br>";
	}
}
?>