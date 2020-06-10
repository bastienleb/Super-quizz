<?php
	class SalleController {
		//public $Modele;
		//public $resultat;
		public function VerificationSalle() {
			//$this->Modele = new MenuDeroulant;
			//$this->Modele->AfficherMenu();
			require(__DIR__.'/../View/creation_salle.php');
			VerifSalle::VerificSalle();
			//MenuDeroulant::AfficherMenu();
		}
	}
?>