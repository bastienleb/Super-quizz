var i = 0;
var id = 0;
var conv= 0;
var score=0;


var xhr = new XMLHttpRequest();
var reponses = document.getElementById('test');
var question = document.getElementById('question');
var repnse1 = document.getElementById('reponse1');
var repnse2 = document.getElementById('reponse2');
var repnse3 = document.getElementById('reponse3');
var repnse4 = document.getElementById('reponse4');
var bonrepnse = document.getElementById('bonnereponse');

var ContenuQuestion = question.textContent;
var ContenuReponse1 = reponse1.textContent;
var ContenuReponse2 = reponse2.textContent;
var ContenuReponse3 = reponse3.textContent;
var ContenuReponse4 = reponse4.textContent;
var ContenuBonreponse = bonrepnse.textContent;
/*------------------↑ Recup valeur et initialisation ↑------------------*/

document.getElementById('reponses').style.display = 'none';
document.getElementById('question').style.display = 'none';
/*------------------- function de la bar -----------------*/
function move() {
  document.getElementById('reponses').style.display = 'none';
  document.getElementById('question').style.display = 'none';
  document.getElementById('reponses').style.display = 'block';
  document.getElementById('question').style.display = 'inline-block';
  document.getElementById('button').style.display = 'none';
  ChangeColor();
  Affichage_score();

  if (i == 0) {
    i = 1;
    var elem = document.getElementById("myBar");
    var width = 0;

    console.log("Question = "+ContenuQuestion);
    console.log("\nreponse1 = "+ContenuReponse1);
    console.log("reponse2 = "+ContenuReponse2);
    console.log("reponse3 = "+ContenuReponse3);
    console.log("reponse4 = "+ContenuReponse4);
    console.log("la bonne reponse est la : "+ContenuBonreponse);
    console.log("\nscore = "+score)
    

    xhr.addEventListener('readystatechange', function() {
      if(this.readyState == 4 && this.status == 200) {
       // reponses.innerHTML = this.responseText;
      }
    });

    xhr.open('GET', 'Question.php?question='+question, true);
    xhr.send();

    var time = setInterval(frame, 50 /*valeur a changer pour le temps*/);
    function frame() {
      if (width >= 100) {
        clearInterval(time);
        i = 0;
        Affichage_score();
        verfication();
        reload_tmp();
        //reload();
      } else {
        width++;
        elem.style.width = width + "%";
        elem.innerHTML = width ;
      }
    }
  }
}
/*------------------- function de recuperation de l'id -----------------*/
function getId(monId){
  id=monId.id;
  ChangeColor();
}
/*------------------- function de verifaction -----------------*/
function verfication(getId){
  if(id == "reponse1" ){
    console.log("\nle joueur clique sur  la reponse A ");
    conv= "A";
  }

  else if(id == "reponse2"){
    console.log("\nle joueur clique sur  la reponse B ");
    conv= "B";
  }

  else if(id == "reponse3"){
    console.log("\nle joueur clique sur  la reponse C ");
    conv= "C";
  }

  else if(id == "reponse4"){
    console.log("\nle joueur clique sur  la reponse D ");
    conv= "D";
  }

  if (conv == ContenuBonreponse) {
    console.log("\n\nVictoire");
    score = score+1;
    console.log("\nscore = "+ score);
    alert("Victoire");
  }
  else if (id== '0'){
    console.log("\n\nLe joueur n'a pas repondu");
    console.log("\nscore = "+ score);
    alert("Il faut repondre");
  }

  else{
    console.log("\n\Perdu");
    console.log("\nscore = "+ score);
    alert("Perdu");
  }
}
/*------------------- function pour changer la couleur au clique  -----------------*/
function ChangeColor(getId){
  if(id == "reponse1" ){
    document.getElementById('reponse1').style.backgroundColor = 'chartreuse';
    document.getElementById('reponse2').style.backgroundColor = 'white';
    document.getElementById('reponse3').style.backgroundColor = 'white';
    document.getElementById('reponse4').style.backgroundColor = 'white';
  }

  else if(id == "reponse2"){
    document.getElementById('reponse1').style.backgroundColor = 'white';
    document.getElementById('reponse2').style.backgroundColor = 'chartreuse';
    document.getElementById('reponse3').style.backgroundColor = 'white';
    document.getElementById('reponse4').style.backgroundColor = 'white';
  }

  else if(id == "reponse3"){
    document.getElementById('reponse1').style.backgroundColor = 'white';
    document.getElementById('reponse2').style.backgroundColor = 'white';
    document.getElementById('reponse3').style.backgroundColor = 'chartreuse';
    document.getElementById('reponse4').style.backgroundColor = 'white';
  }

  else if(id == "reponse4"){
    document.getElementById('reponse1').style.backgroundColor = 'white';
    document.getElementById('reponse2').style.backgroundColor = 'white';
    document.getElementById('reponse3').style.backgroundColor = 'white';
    document.getElementById('reponse4').style.backgroundColor = 'chartreuse';
  }
}

/*------------------- function recharger page -----------------*/
function reload_tmp(){
  //window.location.replace('3'); 
  rest = setInterval(location.reload, 1000);
}

/*------------------- function Affichage score -----------------*/
function Affichage_score(){
  var x = document.getElementById("carre").innerHTML;
  document.getElementById("demo").innerHTML = x+score;
  console.log("\nAffichage du score");
  console.log("\nscore = "+ score);
}

/*
function reload(){
  document.getElementById('question').style.display = 'none';
        document.getElementById('reponses').style.display = 'none';
        console.log("ID avant le RAZ : "+id);
        id=0;
        console.log("\nID apres le RAZ : "+id);
        $("body").load("../test.php");
        document.getElementById('button').style.display = 'inline-block';
}
*/