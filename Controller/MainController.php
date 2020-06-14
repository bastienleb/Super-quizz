<?php
   	class MainController extends controller {
/* ------------------Redirection vers main------------------ */
   		public function VerifMain() {
   			//echo file_get_contents(__DIR__.'/../View/main.php');
   			$data = MenuDeroulant::AfficherMenu();
   			$this->render('main', ['main' => $data]);
   			Parties::AfficherParties();
   			VerifTheme::VerifierTheme();
   		}
   	}
?>