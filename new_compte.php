<!DOCTYPE html>
<html lang="fr">
<head>
	<title>Création de Compte</title>
	<meta charset="utf-8">
</head>
<body>
	<?php
		$link=mysqli_connect("localhost","quintois","quintois","quintois");
		if(!$link){
			die("<p>connexion impossible</p>");
		}
	?>

	<form method="POST">
		<p>Pseudo : </p><br/>
		<input type="text" name="Username" required>
		<br/><br/>
		<p>Mot de passe : </p><br/>
		<input type="password" name="mdp" required>
		<br/><br/>
		<p>Confirmer le mot de passe : </p><br/>
		<input type="password" name="confirmation" required>
		<br/><br/>
		<input type="submit" name="nouveau_compte">
	</form>
	
	<?php
		if(isset($_POST['Username']) && isset($_POST['mdp']) && isset($_POST['confirmation'])){
			$Username = mysqli_real_escape_string($link, $_POST['Username']);
			$mdp = mysqli_real_escape_string($link, $_POST['mdp']);
			$confirmation = mysqli_real_escape_string($link, $_POST['confirmation']);

			$search = mysqli_query($link,"SELECT '$Username' FROM login");

			if($search)
				echo "Erreur: Pseudo déjà utilisé !";
			else if($confirmation != $mdp){
				echo "Erreur: les deux mots de passes entrés sont différents !";
			}
			else if($confirmation == $Username){
				echo "Erreur: le mot de passe ne peut pas être le même que le pseudo !";
			}
			else{
				echo "ok";				
				
				$pass_hache = password_hash($confirmation, PASSWORD_DEFAULT);
				$stmt = mysqli_prepare($link,"INSERT INTO login (pseudo,mdp) VALUES (?,?)");
				mysqli_stmt_bind_param($stmt,"ss",$Username,$pass_hache);
				mysqli_execute($stmt);

				header('Location: https://dwarves.iut-fbleau.fr/~leblet/WIM/PROJET/login.php');
			}
		}
	?>
</body>
</html>