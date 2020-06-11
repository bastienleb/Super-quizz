<?php
	class ControllerPersoCompte {
		public function VerifCompte() {
			require(__DIR__.'/../View/perso.php');
			VerifModifCompte::VerifModif();
		}
	}
?>