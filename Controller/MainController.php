<?php
	class MainController {
		public function VerifMain() {
			echo file_get_contents(__DIR__.'/../View/main.php');
			MenuDeroulant::AfficherMenu();
			Parties::AfficherParties();
		}
	}
?>