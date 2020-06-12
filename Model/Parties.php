<?php
    class Parties {
        public function AfficherParties() {
            $link = connection::Connect();
/* ------------------ouverture de session------------------*/
            session_start();
            if(isset($_SESSION['Username']))
                $Username = $_SESSION['Username'];
            else if(isset($_POST['Username'])){
                $_SESSION['Username'] = $_POST['Username'];

                setcookie('pseudo', $_POST['Username']);
            } else {
                header('Location: login');
            }
/* ------------------Recuperation de la BDd et affichage dans une table------------------ */
            $bpartie = mysqli_query($link, "SELECT * FROM  ListeTables");
            if($bpartie) {
                while($apartie=mysqli_fetch_object($bpartie)) {
                    echo "<tr>";
                    echo "<td>".$apartie->Nom."</td>";
                    echo "<td>".$apartie->nombre_joueurs."</td>";
                    echo "<td>".$apartie->theme."</td>";
                    echo "<td>";

                    $Nom = $apartie->Nom;
                    $theme = $apartie->theme;
                    $nombre_joueurs = $apartie->nombre_joueurs;

                    echo "<input type=\"button\" value=\"entrer\" onclick=\"window.location.href='Room/$Nom/$theme/$nombre_joueurs'\">";
                    echo "</td>";
                    echo "</tr>";
                }
                echo "</table>";
            } else {
                die("<p>erreur dans la requete<p>");
            }
        }
    }
?>	