<?php
   	class SalleController {
/* ------------------Redirection vers creation salle------------------ */
   		public function VerificationSalle() {
   			require(__DIR__.'/../View/creation_salle.php');
   			VerifSalle::VerificSalle();
   		}
   	}
?>