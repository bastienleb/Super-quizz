<?php
	
	require('connection.php');

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

			header('../View/login.php');
			}
		}
?>