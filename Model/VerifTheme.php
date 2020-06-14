<?php
	class VerifTheme {
		public function VerifierTheme() {
			$link = connection::Connect();

			$interdiction1 = '<';
            $interdiction2 = '>';
            $interdiction3 = '/';
            $interdiction4 = ' ';

			if(isset($_POST['theme'])){
				$theme = mysqli_real_escape_string($link, $_POST['theme']);
				$Username = $_SESSION['Username'];

				$search = mysqli_query($link,"SELECT COUNT(*) AS existe_theme FROM Themes WHERE nom_theme = '".$theme."'");
				$data = mysqli_fetch_array($search);

				$test1 = stripos($theme, $interdiction1);
                $test2 = stripos($theme, $interdiction2);
                $test3 = stripos($theme, $interdiction3);
                $test4 = stripos($theme, $interdiction4);

				if(($data['existe_theme'] != '0'))
					echo "<div class='error'> Theme déjà existant !</div>";
				else if($test1 == true || $test2 == true || $test3 == true || $test4 == true)
                    echo "<div class='error'>  Votre theme contient des caracteres interdits !</div>";
                else{
                	$add_theme = mysqli_prepare($link,"INSERT INTO Themes (Createur,nom_theme) VALUES (?,?)");
                mysqli_stmt_bind_param($add_theme,"ss",$Username,$theme);
                mysqli_execute($add_theme);
                }
			}
		}
	}
?>