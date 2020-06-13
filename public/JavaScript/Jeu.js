var i = 0;
var xhr = new XMLHttpRequest();
var fenetre = document.getElementById(test);
var question = document.getElementById(question);

function move() {
  //var Questions = <?php echo json_encode(Question::AfficherQuestions()); ?>;
  if (i == 0) {
    i = 1;
    var elem = document.getElementById("myBar");
    var width = 0;
    //console.log(Questions);
    xhr.addEventListener('readystatechange', function() {
      if(this.readyState == 4 && this.status == 200) {
        fenetre.innerHTML = this.responseText;
      }
    });

    xhr.open('GET', 'Question.php?question='+question, true);
    xhr.send();

    var id = setInterval(frame, 50 /*valeur a changer pour le temps*/);
    function frame() {
      if (width >= 100) {
        clearInterval(id);
        i = 0;
        //move();

        /*location.replace("main");*/
      } else {
        width++;
        elem.style.width = width + "%";
        elem.innerHTML = width ;
      }
    }
  }
}