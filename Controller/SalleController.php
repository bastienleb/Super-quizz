<?php
	class SalleController {
		public function VerificationSalle() {
			require(__DIR__.'/../View/creation_salle.php');
			VerifSalle::VerificSalle();
		}
	}
?>