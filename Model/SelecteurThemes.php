<?php
    require('connection.php');

    $bpartie = mysqli_query($link, "SELECT * FROM  ListeTables");
    if($bpartie) {
?>
<table>
<tr>
<th>nom</th>
<th>nombre de joueurs max</th>
<th>theme</th>
<th>entrer</th>
</tr>

<?php
    while($apartie=mysqli_fetch_object($bpartie)) {
        echo "<tr>";
        echo "<td>".$apartie->Nom."</td>";
        echo "<td>".$apartie->nombre_joueurs."</td>";
        echo "<td>".$apartie->theme."</td>";
        echo "<td>";
?>

<input type="button" value="entrer">
<?php
    echo "</td>";
?>
               
<?php
    echo "</tr>";
	}
    echo "</table>";
    } else {
	die("<p>erreur dans la requete<p>");
    }
?>	