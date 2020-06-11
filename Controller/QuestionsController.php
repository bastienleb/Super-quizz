<?php
	class QuestionsController {
		public function VerifierQuestions() {
			require(__DIR__.'/../View/creation_questions.php');
			VerifQuestions::VerifQuestion();
		}
	}
?>