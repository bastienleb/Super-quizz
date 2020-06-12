<?php
   	class MainController {
/* ------------------Redirection vers main------------------ */
   		public function VerifMain() {
   			echo file_get_contents(__DIR__.'/../View/main.php');
   			//MenuDeroulant::AfficherMenu();
   			Parties::AfficherParties();
   		}
   	}
?>