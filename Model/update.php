<?php
    session_start();
   // echo "<p>test</p>";
    $link = mysqli_connect("localhost","quintois","quintois","quintois");
        
    if(isset($_POST['score'])){
    //echo "test dans if ";
	$score =  mysqli_real_escape_string($link, $_POST['score']);
    $nom = $_SESSION['Username'];
            

	$update = "UPDATE Nombre_online SET Score = '".$score."' WHERE Pseudo = '".$nom."'";
    
    $maj = mysqli_query($link, $update);
    echo $score;
}
?>