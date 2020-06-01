<?php
	if(!isset($_COOKIE['user'])) {
       	if(isset($_POST['user'])) {
       	    setcookie('user', $_POST['user']);
       	    $user = json_decode($_POST['user']); //////////////// A METTRE DANS LA PAGE APRES CETTE PAGE 
       	}
       	else {
       	    header('Location: https://dwarves.iut-fbleau.fr/~leblet/WIM/PROJET/login.php');
       	}
   	} else {
       	$user = json_decode($_COOKIE['user']);
   	}
?>