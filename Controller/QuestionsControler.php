<?php
   	class QuestionsController {
/* ------------------Redirection vers creation question------------------ */
   		public function VerifierQuestions() {
   			require(__DIR__.'/../View/creation_questions.php');
   			VerifQuestions::VerifQuestion();
		}
  	}
?>