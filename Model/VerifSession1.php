<?php
		session_start();
		if(isset($_SESSION['Username']) && isset($_SESSION['Salon'])){
			header('Location: ../View/main.php');
		}
	?>