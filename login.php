<?php

    setcookie("user", "", time()-1);

    $link=mysqli_connect("localhost","quintois","quintois","quintois");
    if(!$link){
        die("<p>connexion impossible</p>");
    }

    if (isset($_POST['Username']) && isset($_POST['Password'])) {
    	$Pseudo = mysqli_real_escape_string($link, $_POST['Username']);
    	$MDP = mysqli_real_escape_string($link, $_POST['Password']);
	}
	else{
		$Pseudo = " ";
		$MDP = "$$$$$$$$$$$$$";
	}
	
	$test = mysqli_query($link,"SELECT mdp FROM login WHERE pseudo = '".$Pseudo."'");
	$password = "Bon" . $Pseudo . "jour" . $MDP. "aussi";
	$password = hash('sha512', $password);
	$hache = mysqli_fetch_array($test);

	if($hache['mdp'] == $password){
		echo "Connection réussie" . "<br>";
		header('location: main.php');
		//echo $password . "<br>";
		//echo $hache['mdp'] . "<br>";
	} else {
		echo "Mauvais mot de passe <br>";
		//echo $password . "<br>";
		//echo $hache['mdp'] . "<br>";
	}

	mysqli_close($link);	
?>
<!DOCTYPE html>
<html lang="fr">
	<head>
	    <meta charset="utf-8">
	    <title>connection </title>
	    <link rel="stylesheet" href="login.css">
	</head>
	<body>
	<div class="picture">
		<img src='quizz_img.jpg'>
	</div>
	<div class="all">
		<form method = "post"action="login.php">
			<label>Username: </label><br/>
			<input type="text" name="Username" required>
		
			</br>
			</br>	
		
			<label>Password: </label><br/>
			<input type="password" name="Password" required>

			</br>
			</br>

			<button onclick="temporaire()">se connecter</button>
		</form>
		<a href="https://dwarves.iut-fbleau.fr/~quintois/projet_wim/new_compte.php">Crée un compte</a>

	</div>	
	</body>
</html>