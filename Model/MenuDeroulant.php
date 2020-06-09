<?php
    class MenuDeroulant {
        function AfficherMenu() {
            $link = connection::Connect();

            $resultat = mysqli_query($link,"SELECT * FROM Themes ");
            if($resultat) {
                while($nom=mysqli_fetch_object($resultat)) {
                    /*echo "<script type='text/javascript'>
                        var newOption = document.createElement('option');
                        newOption.value = '<?php echo $nom->nom_theme; ?>'
                        newOption.innerHTML = '<?php echo $nom->nom_theme; ?>'
                        document.getElementById('selecte').appendChild(newOption);
                    </script>"; */
                    echo "<option>";
                    echo $nom->nom_theme;
                    echo "</option>";
                }
                echo "</select>";
            } else {
                die("<p>erreur dans la requete<p>");
            } 
        }
    }
?>