<?php
   	class ControllerPersoCompte {
/* ------------------Redirection vers perso------------------ */
   		public function VerifCompte() {
   			require(__DIR__.'/../View/perso.php');
   			VerifModifCompte::VerifModif();
   		}
   	}
?>
