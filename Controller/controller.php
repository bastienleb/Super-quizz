<?php
	abstract class controller {
		public function render(string $fichier, array $data = []) {
			/*On récup les données et on les mets sous forme de variables*/
			extract($data);

			require_once(__DIR__.'/../View/'.$fichier.'.php');
		}
	}
?>