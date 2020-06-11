<?php
	class LoginController {
		public function VerifLog() {
			require(__DIR__.'/../View/login.php');
			VerifLogin::Verif();
		}
	}
?>