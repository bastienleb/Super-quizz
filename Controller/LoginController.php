<?php
   	class LoginController {
/* ------------------Redirection vers login------------------ */
   		public function VerifLog() {
   			require(__DIR__.'/../View/login.php');
   			VerifLogin::Verif();
   		}
   	}
?>