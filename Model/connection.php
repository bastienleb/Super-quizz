<?php
	class connection {
		public static function Connect() {
			$link = mysqli_connect("localhost","quintois","quintois","quintois");
			if(!$link)
				die("<p>connexion impossible</p>");
			return $link;
		}

		public function LogOut() {
			session_start();
			session_destroy();
			header('Location: login');
		}
	}
?>