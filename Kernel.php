<?php
	class Kernel {
		public static function run() {
			// Autoload des classes
			spl_autoload_register('Kernel::autoload');
			// Analyser la requete
			$query = isset($_GET['query']) ? $_GET['query'] : "";
			$route = Routeur::analyze($query);
			// Instancier le controleur et executer l'action
			$class = $route['controller'];

			if(class_exists($class)) { 	
				$tmp = $route['controller'];

				if($tmp == 'LoginController'){
					$controller = new LoginController();
					$controller->VerifLog();
				}

				if($tmp == 'RegisterController'){
					$controller = new RegisterController();
					$controller->Register();
				}

				if($tmp == 'MainController'){
					$controller = new MainController();
					$controller->VerifMain();
				}

				if($tmp == 'QuestionsController'){
					$controller = new QuestionsController();
					$controller->VerifierQuestions();
				}

				if($tmp == 'SalleController'){
					$controller = new SalleController();
					$controller->VerificationSalle();
				}

				if($tmp == 'RoomController'){
					$controller = new RoomController();
					$controller->ControllerJeu();
				}

				if($tmp == 'LogoutController'){
					$controller = new LogoutController();
					$controller->Logout();
				}

				if($tmp == 'ControllerPersoCompte'){
					$controller = new ControllerPersoCompte();
					$controller->VerifCompte();
				}
			}
		}	

		public static function autoload($class) {
			if(file_exists("$class.php"))
				require_once("$class.php");
			else if(file_exists(__DIR__."/Controller/$class.php"))
				require_once(__DIR__."/Controller/$class.php");
			else if(file_exists(__DIR__."/Model/$class.php"))
				require_once(__DIR__."/Model/$class.php");
		}
	}
?>	