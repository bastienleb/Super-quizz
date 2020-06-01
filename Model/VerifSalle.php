<?php
    
  require('connection.php');

	if(isset($_POST['nom']) && isset($_POST['nombre_joueurs']) && isset($_POST['nombre_questions']) && isset($_POST['nom_theme'])){
		$user = 'test';	
		$nom = mysqli_real_escape_string($link, $_POST['nom']);
		$nombre_joueurs = mysqli_real_escape_string($link, $_POST['nombre_joueurs']);
		$nombre_questions = mysqli_real_escape_string($link, $_POST['nombre_questions']);
		$nom_theme = mysqli_real_escape_string($link, $_POST['nom_theme']);

  	/*$salle = mysqli_prepare($link,"INSERT INTO ListeTables (Createur,Nom,nombre_joueurs,nombre_questions,theme) VALUES (?,?,?,?,?)");
  	mysqli_stmt_bind_param($salle,"ssdds",$user,$nom,$nombre_joueurs,$nombre_questions,$nom_theme);
  	mysqli_execute($salle); */
  	//header("location: room.php");
  }
?>