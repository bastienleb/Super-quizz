<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="https://dwarves.iut-fbleau.fr/~quintois/projet_wim/public/CSS/Room.css">
</head>
<body>
    <div class="all" id="test">
        
        <?php //require('../Model/Question.php'); ?>

        <div id="myProgress">
            <div id="myBar">0</div> 
        </div>        
        <br>

        <button onclick="test()" id="button">Commencer</button>
    </div>
</body>

<script>
var i = 0;
function move() {
  if (i == 0) {
    i = 1;
    var elem = document.getElementById("myBar");
    var width = 0;
    var id = setInterval(frame, 50 /*valeur a changer pour le temps*/);
    function frame() {
      if (width >= 100) {
        clearInterval(id);
        i = 0;
        move();

        /*location.replace("main.php");*/
      } else {
        width++;
        elem.style.width = width + "%";
        elem.innerHTML = width ;
      }
    }
  }
}
</script>
</html>