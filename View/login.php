<?php require('../Model/VerifLogin.php'); ?>

<!DOCTYPE html>
<html lang="fr">
	<head>
	    <meta charset="utf-8">
	    <title>connection </title>
	    <link rel="stylesheet" href="../public/CSS/login.css">
	</head>
	<body>
	<div class="all">
		<img src='../public/Images/quizz_img.jpg'>
		<form method = "post" action="">
			<label>Username: </label><br/>
			<input type="text" name="Username" required>
		
			</br>
			</br>	
		
			<label>Password: </label><br/>
			<input type="password" name="Password" required>

			</br>
			</br>

			<button>se connecter</button>
		</form>
		<a href="new_compte.php">Crée un compte</a>
	</div>	
	</body>
</html>