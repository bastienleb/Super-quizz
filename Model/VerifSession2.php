<?php
    session_start(); 
      if(isset($_SESSION['Username'])){
        echo ("SESSION <br>" . " Pseudo : " . $_SESSION['Username'] . "<br>");
      }
      else if(isset($_POST['Username'])){
        $_SESSION['Username'] = $_POST['Username'];

        setcookie('pseudo', $_POST['Username']);

        echo("POST <br>" ." Pseudo : " . $_SESSION['Username'] . "<br>");
      }
      else{
        header('Location: ../View/login.php'  );
        //echo "redirect";
      }
?>