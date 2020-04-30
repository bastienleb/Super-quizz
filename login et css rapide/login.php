<!DOCTYPE html>
<html lang="fr">
	<head>
	    <meta charset="utf-8">
	    <title>connection </title>
	    <link rel="stylesheet" href="login.css">
	</head>
	<body>
	<div class="all">
		<form method = "post"action="login.php">
		<label>Username: </label>	
		<input type="text" name="Username" required>
		
		</br>
		</br>	
		
		<label>Password: </label>
		<input type="password" name="Password" required>

		</br>
		</br>

		<button onclick="temporaire()">se connecter</button>
		</form>

	</div>
		
	</body>
</html>

<?php

    $link=mysqli_connect("localhost","quintois","quintois","quintois");
    if(!$link){
        die("<p>connexion impossible</p>");
    }

    if(isset($_POST['Username']) && isset($_POST['POST'])){
    $Pseudo = mysqli_real_escape_string($link, $_POST['Username']);
    $MDP = mysqli_real_escape_string($link, $_POST['Password']);
    }

?>

<?php
	$resultat = mysqli_query($link,"SELECT pseudo, mdp FROM login WHERE pseudo = '.$Pseudo.'");

	// Comparaison du pass envoyé via le formulaire avec la base
	//$isPasswordCorrect = password_verify($_POST['Password'], $resultat['mdp']);

	if ($resultat)
	{		
?>
    <table>
    <?php
    
    	
	while($article=mysqli_fetch_object($resultat)) {

      	echo "<td>";
      	if (($article->mdp == $MDP) && ($article->pseudo == $Pseudo)) {
	   		//echo "C BO";
	   		?>
	   		<script>
			function temporaire() {
			  alert("C BO!");
			}
			</script>
			<?php
		}
		else if($article->mdp!= $MDP){
			//echo "Pseudo ou mot de passe incorrect";
			?>
	   		<script>
			function temporaire() {
			  alert("Pseudo ou mot de passe incorrect");
			}
			</script>
			<?php
		}
		else if($article->pseudo!= $Pseudo){
			//echo "Pseudo ou mot de passe incorrect";
			?>
	   		<script>
			function temporaire() {
			  alert("Pseudo ou mot de passe incorrect");
			}
			</script>
			<?php
		}
		echo "</td>";
    }

   	echo "</table>";

}


mysqli_close($link);
	

?>
