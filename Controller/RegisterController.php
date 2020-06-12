<?php
   	class RegisterController {
/* ------------------Redirection vers new compte------------------ */
   		public function Register() {
   			require(__DIR__.'/../View/new_compte.php');
   			VerifNew_compte::VerifRegister();
   		}
   	}
?>