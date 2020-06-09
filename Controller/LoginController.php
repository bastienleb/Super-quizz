<?php
	class LoginController {
		public function VerifLog() {
			echo file_get_contents(__DIR__.'/../View/login.php');
			VerifLogin::Verif();
		}
	}
?>