<?php
	class RegisterController {
		public function Register() {
			require(__DIR__.'/../View/new_compte.php');
			VerifNew_compte::VerifRegister();
		}
	}
?>