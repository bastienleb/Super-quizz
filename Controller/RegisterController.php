<?php
	class RegisterController {
		public function Register() {
			echo file_get_contents(__DIR__.'/../View/new_compte.php');
			VerifNew_compte::VerifRegister();
		}
	}
?>