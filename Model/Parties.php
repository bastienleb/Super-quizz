<?php
    class Parties {
        public function AfficherParties() {
            $link = connection::Connect();
            $bpartie = mysqli_query($link, "SELECT * FROM  ListeTables");
            if($bpartie) {
                while($apartie=mysqli_fetch_object($bpartie)) {
                    echo "<tr>";
                    echo "<td>".$apartie->Nom."</td>";
                    echo "<td>".$apartie->nombre_joueurs."</td>";
                    echo "<td>".$apartie->theme."</td>";
                    echo "<td>";

                    $Nom = $apartie->Nom;

                    echo "<input type=\"button\" value=\"entrer\" onclick=\"window.location.href='Room/$Nom'\">";
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