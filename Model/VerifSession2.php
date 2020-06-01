<?php
	if(!isset($_COOKIE['Username'])) {
       	if(isset($_POST['Username'])) {
       	    setcookie('Username', $_POST['Username']);
       	    $Username = json_decode($_POST['Username']); //////////////// A METTRE DANS LA PAGE APRES CETTE PAGE 
       	}
       	else {
       	    header('Location: ../View/login.php');
       	}
   	} else {
       	$Username = json_decode($_COOKIE['Username']);
   	}
?>