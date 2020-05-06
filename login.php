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
	else
		$Pseudo = "default";
		$MDP = "mdp";

	

	$resultat = mysqli_query($link,"SELECT pseudo, mdp FROM login WHERE pseudo = '".$Pseudo."'");

	// Comparaison du pass envoyé via le formulaire avec la base
	//$isPasswordCorrect = password_verify($_POST['Password'], $resultat['mdp']);

	if ($resultat)
	{		
 ?>
	    <table>
	    <?php
		
	    	
		while($article=mysqli_fetch_object($resultat)) {
			
			
			echo "le mot de passe est valide ou pas ? <br/>";
			$test=password_verify($MDP, $article->mdp);

			// Comparaison du pass envoyé via le formulaire avec la base
			if ($test)
				echo "le mot de passe est bon";
			else 
				echo "le mot de passe est pas bon";

			  //echo "<td>";
			echo "<tr>";
			echo "<td>".$article->pseudo."</td>";
            echo "<td>".$article->mdp."</td>";
			echo "</tr>";
			?>
			<?php
	      	/*if (($article->mdp == $MDP) && ($article->pseudo == $Pseudo)) {
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
				//echo "mot de passe incorrect";
				?>
		   		<script>
				function temporaire() {
				  alert("mot de passe incorrect");
				}
				</script>
				<?php
			}
			else if($article->pseudo!= $Pseudo){
				//echo "Pseudo incorrect";
				?>
		   		<script>
				function temporaire() {
				  alert("Pseudo incorrect");
				}
				</script>*/
				?>
				<?php
		}
		//echo "</td>";
    }

   	echo "</table>";


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


<!--
	if(!isset($_COOKIE['user'])) {
        if(isset($_POST['user'])) {
            setcookie('user', $_POST['user']);
            $user = json_decode($_POST['user']); //////////////// A METTRE DANS LA PAGE APRES CETTE PAGE 
        }
        else {
            header('Location: login.php');
        }
    } else {
        $user = json_decode($_COOKIE['user']);
    }
    -->