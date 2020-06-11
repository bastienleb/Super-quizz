<?php
	//require('connection.php');
	class VerifNew_compte {
		public function VerifRegister() {
			$link = connection::Connect();

			$interdiction1 = '<';
            $interdiction2 = '>';
            $interdiction3 = '/';

			if(isset($_POST['Username']) && isset($_POST['mdp']) && isset($_POST['confirmation'])){
				$Username = mysqli_real_escape_string($link, $_POST['Username']);
				$mdp = mysqli_real_escape_string($link, $_POST['mdp']);
				$confirmation = mysqli_real_escape_string($link, $_POST['confirmation']);

				$search = mysqli_query($link,"SELECT COUNT(*) AS existe_pseudo FROM login WHERE pseudo = '".$Username."'");
				$data = mysqli_fetch_assoc($search);

				$test1 = stripos($Username, $interdiction1);
                $test2 = stripos($Username, $interdiction2);
                $test3 = stripos($Username, $interdiction3);

				if(($data['existe_pseudo'] != '0'))
					echo "<div class='error'> Pseudo déjà utilisé !</div>";
				else if($confirmation != $mdp){
					echo "<div class='error'> les deux mots de passes entrés sont différents !</div>";
				}else if($confirmation == $Username){
					echo "<div class='error'> le mot de passe ne peut pas être le même que le pseudo !</div>";
				}else if($test1 == true || $test2 == true || $test3 == true)
                    echo "<div class='error'>  Votre Pseudo contient des caracteres interdits !</div>";
				else{
					echo "ok";				
				
					$pass_hache = "Bon" . $Username . "jour" . $confirmation . "aussi";
					$pass_hache = hash('sha512', $pass_hache);
					$stmt = mysqli_prepare($link,"INSERT INTO login (pseudo,mdp) VALUES (?,?)");
					mysqli_stmt_bind_param($stmt,"ss",$Username,$pass_hache);
					mysqli_execute($stmt);

					header('location: login');
				}
			}
		}
	}
?>