<?php
	session_start();
	if(isset($_SESSION['Username'])){
		header('Location: ../View/main.php');
	}
?>