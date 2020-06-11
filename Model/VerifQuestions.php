<?php
  class VerifQuestions {
    public function VerifQuestion() {

        $link = connection::Connect();

        session_start();
        if(isset($_SESSION['Username']))
            $Username = $_SESSION['Username'];
        else if(isset($_POST['Username'])){
            $_SESSION['Username'] = $_POST['Username'];
            setcookie('pseudo', $_POST['Username']);
        } else {
            header('Location: login');
        }

        if(isset($_POST['theme']) && isset($_POST['question1']) && isset($_POST['reponseA']) && isset($_POST['reponseB']) && isset($_POST['reponseC']) && isset($_POST['reponseD']) && isset($_POST['reponse1'])){
            $theme = mysqli_real_escape_string($link, $_POST['theme']);
            $question1 = mysqli_real_escape_string($link, $_POST['question1']);
            $reponseA = mysqli_real_escape_string($link, $_POST['reponseA']);
            $reponseB = mysqli_real_escape_string($link, $_POST['reponseB']);
            $reponseC = mysqli_real_escape_string($link, $_POST['reponseC']);
            $reponseD = mysqli_real_escape_string($link, $_POST['reponseD']);
            $reponse1 = mysqli_real_escape_string($link, $_POST['reponse1']);
        
            $i = 1;

            if($theme == 'selection')
                echo "Veuillez sélectionner un thème !";
            else{
                /*$add_theme = mysqli_prepare($link,"INSERT INTO Themes (Createur,nom_theme) VALUES (?,?)");
                mysqli_stmt_bind_param($add_theme,"ss",$user,$theme);
                mysqli_execute($add_theme); */
    
                $question = mysqli_prepare($link,"INSERT INTO Questions (Theme,Question,num_Question,Reponse_A,Reponse_B,Reponse_C,Reponse_D,Bonne_reponse) VALUES (?,?,?,?,?,?,?,?)");
                mysqli_stmt_bind_param($question,"ssdsssss",$theme,$question1,$i,$reponseA,$reponseB,$reponseC,$reponseD,$reponse1);
                //mysqli_execute($question);
            }
        }
    }
  } 
?>