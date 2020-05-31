<?php

	require('../Model/login.php'); /* require model login */
	

	if (isset($_POST['Username']) && isset($_POST['Password'])) {
    	$valide = login($_POST['Username'], $_POST['Password']);
    	require('../View/login.php'); /*require vue Login */
	}	
?>