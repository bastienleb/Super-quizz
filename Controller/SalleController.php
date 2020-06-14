<?php
   	class SalleController extends controller {
/* ------------------Redirection vers creation salle------------------ */
   		public function VerificationSalle() {
   			//require(__DIR__.'/../View/creation_salle.php');
   			$data = MenuDeroulant::AfficherMenu();
   			VerifSalle::VerificSalle();
   			$this->render('creation_salle', ['creation_salle' => $data]);
   		}	
   	}
?>