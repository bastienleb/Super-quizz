<?php
    class VerifSalle {
        public function VerificSalle() {

            $link = connection::connect();

            session_start();
            if(isset($_SESSION['Username']))
                $Username = $_SESSION['Username'];
            else if(isset($_POST['Username'])){
                $_SESSION['Username'] = $_POST['Username'];

                setcookie('pseudo', $_POST['Username']);
            } else {
                header('Location: login');
            }

            if(isset($_POST['nom']) && isset($_POST['nombre_joueurs']) && isset($_POST['nombre_questions']) && isset($_POST['nom_theme'])){
                $user = $Username; 
                $NomSalle = mysqli_real_escape_string($link, $_POST['nom']);
                $nombre_joueurs = mysqli_real_escape_string($link, $_POST['nombre_joueurs']);
                $nombre_questions = mysqli_real_escape_string($link, $_POST['nombre_questions']);
                $nom_theme = mysqli_real_escape_string($link, $_POST['nom_theme']);
                $interdiction1 = '<';
                $interdiction2 = '>';
                $interdiction3 = '/';

                $search = mysqli_query($link,"SELECT COUNT(*) AS existe_salle FROM ListeTables WHERE Nom = '".$NomSalle."'");
                $data = mysqli_fetch_assoc($search);

                if(($data['existe_salle'] != '0')){
                    echo "Erreur: Nom de table déjà utilisé !";
                }else{

                    $test1 = stripos($NomSalle, $interdiction1);
                    $test2 = stripos($NomSalle, $interdiction2);
                    $test3 = stripos($NomSalle, $interdiction3);

                    if($test1 == true || $test2 == true || $test3 == true)
                        echo "Erreur : Votre nom de Salle contient des caracteres interdits !";
                    else if($nom_theme == 'selection')
                        echo "Erreur : Veuillez selectionner un thème";
                    else{

                        $salle = mysqli_prepare($link,"INSERT INTO ListeTables (Createur,Nom,nombre_joueurs,nombre_questions,theme) VALUES (?,?,?,?,?)");
                        mysqli_stmt_bind_param($salle,"ssdds",$user,$NomSalle,$nombre_joueurs,$nombre_questions,$nom_theme);
                        mysqli_execute($salle);

                        header("location: Room/$NomSalle[0]/$nom_theme");
                    }
                }
            }
        } 
    }
?>