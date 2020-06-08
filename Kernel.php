<?php
	//require('Routeur.php');
	class Kernel {
		public static function run() {
			// Autoload des classes
			spl_autoload_register('Kernel::autoload');
			// Analyser la requete
			$query = isset($_GET['query']) ? $_GET['query'] : "";
			$route = Routeur::analyze($query);
			echo ($_GET['query']);
			// Instancier le controleur et
			// executer l'action
			$class = $route['controller'];
			//echo $class;
			if(class_exists($class)) { 	
				$tmp = $route['controller'];
				//echo $tmp;
				if($tmp == 'LoginController'){
					$controller = new LoginController();
					$controller->VerifLog();
				}

				if($tmp == 'RegisterController'){
					$controller = new RegisterController();
					$controller->Register();
				}

				/*if(isset($route['action'])){
					$model = $route['action'];
					$controller->$model();
				} */
				else{
					$controller->VerifLog()/*Register()*/;
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