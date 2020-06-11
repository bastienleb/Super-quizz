<?php
	class Routeur {
		public static function analyze($query) {
			$parts = explode("/", $query);

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

			if((count($parts) == 1) && ($parts[0] == "creation_questions")){
				$result['controller'] = "QuestionsController";
				return $result;
			}

			if((count($parts) == 1) && ($parts[0] == "creation_salle")){
				$result['controller'] = "SalleController";
				return $result;
			}

			if((count($parts) == 4) && ($parts[0] == "Room")){
				$result['controller'] = 'RoomController';
				$result['action'] = $parts[1];
				return $result;
			}

			if((count($parts) == 1) && ($parts[0] == "logout")){
				$result['controller'] = "LogoutController";
				return $result;
			}

			if((count($parts) == 1) && ($parts[0] == "options")){
				$result['controller'] = "ControllerPersoCompte";
				return $result;
			}
			
			$result['controller'] = 'MainController';
			return $result;
		}
	}
?>