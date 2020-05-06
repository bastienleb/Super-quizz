<!DOCTYPE html>
<html lang="fr">
<head>
	<title>Créations questions</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="https://dwarves.iut-fbleau.fr/~leblet/WIM/PROJET/creation_questions.css">
</head>
<body>
	<?php
		/*if(!isset($_COOKIE['user'])) {
        	if(isset($_POST['user'])) {
        	    setcookie('user', $_POST['user']);
        	    $user = json_decode($_POST['user']); //////////////// A METTRE DANS LA PAGE APRES CETTE PAGE 
        	}
        	else {
        	    header('Location: https://dwarves.iut-fbleau.fr/~leblet/WIM/PROJET/login.php');
        	}
    	} else {
        	$user = json_decode($_COOKIE['user']);
    	} */

    	 $link=mysqli_connect("localhost","quintois","quintois","quintois");
    	if(!$link){
        	die("<p>connexion impossible</p>");
    	}
    ?>
    <form method="POST">
    	<input type="text" name="theme" placeholder="nom du thème:" required>
    	<br/><br/>

    	<div class="question1">
    		<input type="text" name="question1" placeholder="Question 1:" required>
    		<br/>
    		<input type="text" name="reponse_1_a" placeholder="Reponse A:" required>
    		<input type="radio" name="reponse1">
    		<input type="text" name="reponse_1_b" placeholder="Reponse B:" required>
    		<input type="radio" name="reponse1">
    		<br/>
    		<input type="text" name="reponse_1_c" placeholder="Reponse C:" required>
    		<input type="radio" name="reponse1">
    		<input type="text" name="reponse_1_d" placeholder="Reponse D:" required>
    		<input type="radio" name="reponse1">
    		<br/>
    	</div>

    	<div class="question2">
	    	<input type="text" name="question2" placeholder="Question 2:" required>
	    	<br/>
	    	<input type="text" name="reponse_2_a" placeholder="Reponse A:" required>
	    	<input type="radio" name="reponse2">
	    	<input type="text" name="reponse_2_b" placeholder="Reponse B:" required>
	    	<input type="radio" name="reponse2">
	    	<br/>
	    	<input type="text" name="reponse_2_c" placeholder="Reponse C:" required>
	    	<input type="radio" name="reponse2">
	    	<input type="text" name="reponse_2_d" placeholder="Reponse D:" required>
	    	<input type="radio" name="reponse2">
	    	<br/>
		</div>

    	<div class="question3">
    		<input type="text" name="question3" placeholder="Question 3:" required>
    		<br/>
    		<input type="text" name="reponse_3_a" placeholder="Reponse A:" required>
    		<input type="radio" name="reponse3">
    		<input type="text" name="reponse_3_b" placeholder="Reponse B:" required>
    		<input type="radio" name="reponse3">
    		<br/>
    		<input type="text" name="reponse_3_c" placeholder="Reponse C:" required>
    		<input type="radio" name="reponse3">
    		<input type="text" name="reponse_3_d" placeholder="Reponse D:" required>
    		<input type="radio" name="reponse3">
    		<br/>
    	</div>

    	<div class="question4">
    		<input type="text" name="question4" placeholder="Question 4:" required>
    		<br/>
    		<input type="text" name="reponse_4_a" placeholder="Reponse A:" required>
    		<input type="radio" name="reponse4">
    		<input type="text" name="reponse_4_b" placeholder="Reponse B:" required>
    		<input type="radio" name="reponse4">
    		<br/>
    		<input type="text" name="reponse_4_c" placeholder="Reponse C:" required>
    		<input type="radio" name="reponse4">
    		<input type="text" name="reponse_4_d" placeholder="Reponse D:" required>
    		<input type="radio" name="reponse4">
    		<br/>
    	</div>

    	<div class="question5">
    		<input type="text" name="question5" placeholder="Question 5:" required>
    		<br/>
    		<input type="text" name="reponse_5_a" placeholder="Reponse A:" required>
    		<input type="radio" name="reponse5">
    		<input type="text" name="reponse_5_b" placeholder="Reponse B:" required>
    		<input type="radio" name="reponse5">
    		<br/>
    		<input type="text" name="reponse_5_c" placeholder="Reponse C:" required>
    		<input type="radio" name="reponse5">
    		<input type="text" name="reponse_5_d" placeholder="Reponse D:" required>
    		<input type="radio" name="reponse5">
    		<br/>
    	</div>

    	<div class="question6">
    		<input type="text" name="question6" placeholder="Question 6:" required>
    		<br/>
    		<input type="text" name="reponse_6_a" placeholder="Reponse A:" required>
    		<input type="radio" name="reponse6">
    		<input type="text" name="reponse_6_b" placeholder="Reponse B:" required>
    		<input type="radio" name="reponse6">
    		<br/>
    		<input type="text" name="reponse_6_c" placeholder="Reponse C:" required>
    		<input type="radio" name="reponse6">
    		<input type="text" name="reponse_6_d" placeholder="Reponse D:" required>
    		<input type="radio" name="reponse6">
    		<br/>
    	</div>

    	<div class="question7">
    		<input type="text" name="question7" placeholder="Question 7:" required>
    		<br/>
    		<input type="text" name="reponse_7_a" placeholder="Reponse A:" required>
    		<input type="radio" name="reponse7">
    		<input type="text" name="reponse_7_b" placeholder="Reponse B:" required>
    		<input type="radio" name="reponse7">
    		<br/>
    		<input type="text" name="reponse_7_c" placeholder="Reponse C:" required>
    		<input type="radio" name="reponse7">
    		<input type="text" name="reponse_7_d" placeholder="Reponse D:" required>
    		<input type="radio" name="reponse7">
    		<br/>
    	</div>

    	<div class="question8">
    		<input type="text" name="question8" placeholder="Question 8:" required>
    		<br/>
    		<input type="text" name="reponse_8_a" placeholder="Reponse A:" required>
    		<input type="radio" name="reponse8">
    		<input type="text" name="reponse_8_b" placeholder="Reponse B:" required>
    		<input type="radio" name="reponse8">
    		<br/>
    		<input type="text" name="reponse_8_c" placeholder="Reponse C:" required>
    		<input type="radio" name="reponse8">
    		<input type="text" name="reponse_8_d" placeholder="Reponse D:" required>
    		<input type="radio" name="reponse8">
    		<br/>
    	</div>

    	<button type="submit" name="créer">Créer</button> 
    </form>

    <?php
    	if(isset($_POST['theme']) && isset($_POST['question1']) && isset($_POST['reponse_1_a']) && isset($_POST['reponse_1_b']) && isset($_POST['reponse_1_c']) && isset($_POST['reponse_1_d']) && isset($_POST['reponse1']) && isset($_POST['question2']) && isset($_POST['reponse_2_a']) && isset($_POST['reponse_2_b']) && isset($_POST['reponse_2_c']) && isset($_POST['reponse_2_d']) && isset($_POST['reponse2']) && isset($_POST['question3']) && isset($_POST['reponse_3_a']) && isset($_POST['reponse_3_b']) && isset($_POST['reponse_3_c']) && isset($_POST['reponse_3_d']) && isset($_POST['reponse3']) && isset($_POST['question4']) && isset($_POST['reponse_4_a']) && isset($_POST['reponse_4_b']) && isset($_POST['reponse_4_c']) && isset($_POST['reponse_4_d']) && isset($_POST['reponse4']) && isset($_POST['question5']) && isset($_POST['reponse_5_a']) && isset($_POST['reponse_5_b']) && isset($_POST['reponse_5_c']) && isset($_POST['reponse_5_d']) && isset($_POST['reponse5']) && isset($_POST['question6']) && isset($_POST['reponse_6_a']) && isset($_POST['reponse_6_b']) && isset($_POST['reponse_6_c']) && isset($_POST['reponse_6_d']) && isset($_POST['reponse6']) && isset($_POST['question7']) && isset($_POST['reponse_7_a']) && isset($_POST['reponse_7_b']) && isset($_POST['reponse_7_c']) && isset($_POST['reponse_7_d']) && isset($_POST['reponse7']) && isset($_POST['question8']) && isset($_POST['reponse_8_a']) && isset($_POST['reponse_8_b']) && isset($_POST['reponse_8_c']) && isset($_POST['reponse_8_d']) && isset($_POST['reponse8'])){

    		$theme = mysqli_real_escape_string($link, $_POST['theme']);

    		$question1 = mysqli_real_escape_string($link, $_POST['question1']);
    		$reponse_1_a = mysqli_real_escape_string($link, $_POST['reponse_1_a']);
    		$reponse_1_b = mysqli_real_escape_string($link, $_POST['reponse_1_b']);
    		$reponse_1_c = mysqli_real_escape_string($link, $_POST['reponse_1_c']);
    		$reponse_1_d = mysqli_real_escape_string($link, $_POST['reponse_1_d']);
    		$reponse1 = mysqli_real_escape_string($link, $_POST['reponse1']);

    		$question2 = mysqli_real_escape_string($link, $_POST['question2']);
    		$reponse_2_a = mysqli_real_escape_string($link, $_POST['reponse_2_a']);
    		$reponse_2_b = mysqli_real_escape_string($link, $_POST['reponse_2_b']);
    		$reponse_2_c = mysqli_real_escape_string($link, $_POST['reponse_2_c']);
    		$reponse_2_d = mysqli_real_escape_string($link, $_POST['reponse_2_d']);
    		$reponse2 = mysqli_real_escape_string($link, $_POST['reponse2']);

    		$question3 = mysqli_real_escape_string($link, $_POST['question3']);
    		$reponse_3_a = mysqli_real_escape_string($link, $_POST['reponse_3_a']);
    		$reponse_3_b = mysqli_real_escape_string($link, $_POST['reponse_3_b']);
    		$reponse_3_c = mysqli_real_escape_string($link, $_POST['reponse_3_c']);
    		$reponse_3_d = mysqli_real_escape_string($link, $_POST['reponse_3_d']);
    		$reponse3 = mysqli_real_escape_string($link, $_POST['reponse3']);

    		$question4 = mysqli_real_escape_string($link, $_POST['question4']);
    		$reponse_4_a = mysqli_real_escape_string($link, $_POST['reponse_4_a']);
    		$reponse_4_b = mysqli_real_escape_string($link, $_POST['reponse_4_b']);
    		$reponse_4_c = mysqli_real_escape_string($link, $_POST['reponse_4_c']);
    		$reponse_4_d = mysqli_real_escape_string($link, $_POST['reponse_4_d']);
    		$reponse4 = mysqli_real_escape_string($link, $_POST['reponse4']);

    		$question5 = mysqli_real_escape_string($link, $_POST['question5']);
    		$reponse_5_a = mysqli_real_escape_string($link, $_POST['reponse_5_a']);
    		$reponse_5_b = mysqli_real_escape_string($link, $_POST['reponse_5_b']);
    		$reponse_5_c = mysqli_real_escape_string($link, $_POST['reponse_5_c']);
    		$reponse_5_d = mysqli_real_escape_string($link, $_POST['reponse_5_d']);
    		$reponse5 = mysqli_real_escape_string($link, $_POST['reponse5']);

    		$question6 = mysqli_real_escape_string($link, $_POST['question6']);
    		$reponse_6_a = mysqli_real_escape_string($link, $_POST['reponse_6_a']);
    		$reponse_6_b = mysqli_real_escape_string($link, $_POST['reponse_6_b']);
    		$reponse_6_c = mysqli_real_escape_string($link, $_POST['reponse_6_c']);
    		$reponse_6_d = mysqli_real_escape_string($link, $_POST['reponse_6_d']);
    		$reponse6 = mysqli_real_escape_string($link, $_POST['reponse6']);

    		$question7 = mysqli_real_escape_string($link, $_POST['question7']);
    		$reponse_7_a = mysqli_real_escape_string($link, $_POST['reponse_7_a']);
    		$reponse_7_b = mysqli_real_escape_string($link, $_POST['reponse_7_b']);
    		$reponse_7_c = mysqli_real_escape_string($link, $_POST['reponse_7_c']);
    		$reponse_7_d = mysqli_real_escape_string($link, $_POST['reponse_7_d']);
    		$reponse7 = mysqli_real_escape_string($link, $_POST['reponse7']);

    		$question8 = mysqli_real_escape_string($link, $_POST['question8']);
    		$reponse_8_a = mysqli_real_escape_string($link, $_POST['reponse_8_a']);
    		$reponse_8_b = mysqli_real_escape_string($link, $_POST['reponse_8_b']);
    		$reponse_8_c = mysqli_real_escape_string($link, $_POST['reponse_8_c']);
    		$reponse_8_d = mysqli_real_escape_string($link, $_POST['reponse_8_d']);
    		$reponse8 = mysqli_real_escape_string($link, $_POST['reponse8']);
    		
    		$add_theme = mysqli_prepare($link,"INSERT INTO Themes (Createur,nom_theme) VALUES (?,?)");
			mysqli_stmt_bind_param($add_theme,"ss",$user,$theme);
			mysqli_execute($add_theme); 

			$i = 1;
			/*for($i = 1;i<8;i++){
				$question = mysqli_prepare($link,"INSERT INTO Questions (Theme,Question,num_Question,Reponse_A,Reponse_B,Reponse_C,Reponse_D,Bonne_reponse) VALUES (?,?,?,?,?,?,?,?)");
			mysqli_stmt_bind_param($question,"ssdsssss",$theme,$question+$i,$i,$reponse_+$i+_a,$reponse_+$i+_b,$reponse_+$i+_c,$reponse_+$i+_d,$reponse+$i);
			mysqli_execute($question); 
				}*/ 
    	}	
    ?>
</body>
</html>