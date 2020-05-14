<!DOCTYPE html>
<html lang="fr">
<head>
	<title>Création de Compte</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="new_compte.css">
</head>
<body>
	<?php
		$link=mysqli_connect("localhost","quintois","quintois","quintois");
		if(!$link){
			die("<p>connexion impossible</p>");
		}
	?>
	<div class="picture">
		<img src='quizz_img.jpg'>
	</div>
	
	<div class="all">
	<form method="POST">
		<b><label>Pseudo : </label></b><br/>
		<b><input type="text" name="Username" required></b>
		<br/><br/>
		<b><label>Mot de passe : </label></b><br/>
		<input type="password" name="mdp" required>
		<br/><br/>
		<b><label>Confirmer le mot de passe : </label></b><br/>
		<input type="password" name="confirmation" required>
		<br/><br/>
		<button name="nouveau_compte"><b>Envoyer</b></button>
	</form>
	</div>
	
	<?php
		if(isset($_POST['Username']) && isset($_POST['mdp']) && isset($_POST['confirmation'])){
			$Username = mysqli_real_escape_string($link, $_POST['Username']);
			$mdp = mysqli_real_escape_string($link, $_POST['mdp']);
			$confirmation = mysqli_real_escape_string($link, $_POST['confirmation']);

			$search = mysqli_query($link,"SELECT COUNT(*) AS existe_pseudo FROM login WHERE pseudo = '".$Username."'");
			$data = mysqli_fetch_assoc($search);

			if(($data['existe_pseudo'] != '0'))
				echo "Erreur: Pseudo déjà utilisé !";
			else if($confirmation != $mdp){
				echo "Erreur: les deux mots de passes entrés sont différents !";
			}
			else if($confirmation == $Username){
				echo "Erreur: le mot de passe ne peut pas être le même que le pseudo !";
			}
			else{
				echo "ok";				
				
				$pass_hache = "Bon" . $Username . "jour" . $confirmation . "aussi";
				$pass_hache = hash('sha512', $pass_hache);
				$stmt = mysqli_prepare($link,"INSERT INTO login (pseudo,mdp) VALUES (?,?)");
				mysqli_stmt_bind_param($stmt,"ss",$Username,$pass_hache);
				mysqli_execute($stmt);

				header('Location: https://dwarves.iut-fbleau.fr/~leblet/WIM/PROJET/login.php');
			}
		}
	?>
</body>
</html>