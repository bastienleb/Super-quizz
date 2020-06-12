<?php
   	class RoomController {
/* ------------------Redirection vers room------------------ */
   		public function ControllerJeu() {
   			echo file_get_contents(__DIR__.'/../View/Room.php');
   			Jeu::Jouer();
   			Question::AfficherQuestions();
   		}
   	}
?>