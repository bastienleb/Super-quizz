<?php
    session_start();
    

    $link = connection::Connect();

    if(isset($_POST['score_fin'])){
    	$score =  mysqli_real_escape_string($link, $_POST['score_fin']);
    	$nom = $_SESSION['Username'];

    	$update = "UPDATE Nombre_online SET Score = '".$score."' WHERE Pseudo = '".$nom."'";

    	$maj = mysqli_query($link, $update);
    }

?>