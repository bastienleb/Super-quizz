<?php
	class SalleController {
		public function VerificationSalle() {
			echo file_get_contents(__DIR__.'/../View/creation_salle.php');
			VerifSalle::VerificSalle();
			MenuDeroulant::AfficherMenu();
		}
	}
?>