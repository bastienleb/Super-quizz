var i = 0;
var xhr = new XMLHttpRequest();
var reponses = document.getElementById(test);
var question = document.getElementById(question);
var repnse1 = document.getElementById(reponse1);
var repnse2 = document.getElementById(reponse2);
var repnse3 = document.getElementById(reponse3);
var repnse4 = document.getElementById(reponse4);
var ContenuQuestion = question.textContent;
var ContenuReponse1 = reponse1.textContent;
var ContenuReponse2 = reponse2.textContent;
var ContenuReponse3 = reponse3.textContent;
var ContenuReponse4 = reponse4.textContent;


function move() {
  if (i == 0) {
    i = 1;
    var elem = document.getElementById("myBar");
    var width = 0;
    console.log("Question = "+ContenuQuestion);
    console.log("reponse1 = "+ContenuReponse1);
    console.log("reponse2 = "+ContenuReponse2);
    console.log("reponse3 = "+ContenuReponse3);
    console.log("reponse4 = "+ContenuReponse4);

    xhr.addEventListener('readystatechange', function() {
      if(this.readyState == 4 && this.status == 200) {
       // reponses.innerHTML = this.responseText;
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