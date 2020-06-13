<?php
   	class RoomController extends controller {
/* ------------------Redirection vers room------------------ */
   		public function ControllerJeu() {
   			//require(__DIR__.'/../View/Room.php');
   			Jeu::Jouer();
   			$data = Question::AfficherQuestions();
   			$this->render('Room', ['questions' => $data]);
   		}
   	}
?>