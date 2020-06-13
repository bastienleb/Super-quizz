<?php
	class QuestionsController extends controller {
/*--------------Redirection vers création de questions-----------*/
		public function VerifierQuestions() {
			require(__DIR__.'/../View/creation_questions.php');
			//$data = MenuDeroulant::AfficherMenu();
			VerifQuestions::VerifQuestion();
			//$this->render('creation_questions', ['creation_questions' => $data]);
		}
	}
?>