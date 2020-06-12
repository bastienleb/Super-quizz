<?php

   	class connection {
/* ------------------connection  la BDD------------------ */
   		public static function Connect() {
   			$link = mysqli_connect("localhost","quintois","quintois","quintois");
   			if(!$link)
   				die("<p>connexion impossible</p>");
   			return $link;
   		}
/* ------------------détruire les sessions------------------ */
   		public function LogOut() {
   			session_start();
   			session_destroy();
   			header('Location: login');
   		}
   	}
?>