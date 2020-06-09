<?php
	class QuestionsController {
		public function VerifierQuestions() {
			echo file_get_contents(__DIR__.'/../View/creation_questions.php');
			VerifQuestions::VerifQuestion();
		}
	}
?>