<?php
	class Routeur {
		public static function analyze($query) {
			// un extrait
			$parts = explode("/", $query);
			//var_dump ($parts);
			//echo $query;

			if((count($parts) == 1) && ($parts[0] == "login")){
				$result['controller'] = "LoginController";
				return $result;
			}

			if((count($parts) == 1) && ($parts[0] == "new_compte")){
				$result['controller'] = "RegisterController";
				return $result;
			}

			if((count($parts) == 1) && ($parts[0] == "main")){
				$result['controller'] = "MainController";
				return $result;
			}

		/*	if ((count($parts) == 3) && ($parts[1] == "afficher") && ($parts[0] == "contact")){
				$result['controller'] = "Contact";
				$result['action'] = "afficherContact";
				$result['params']['id'] = $parts[2];
			return $result;
			} */

			$result['controller'] = 'LoginController';
			return $result;
		}
	}
?>