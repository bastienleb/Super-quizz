var i = 0;
var id = 0;
var conv= 0;

var reponses = document.getElementById('test');
var question = document.getElementById('question');
var repnse1 = document.getElementById('reponse1');
var repnse2 = document.getElementById('reponse2');
var repnse3 = document.getElementById('reponse3');
var repnse4 = document.getElementById('reponse4');
var bonrepnse = document.getElementById('bonnereponse');
var score = document.getElementById('demo')

var ContenuQuestion = question.textContent;
var ContenuReponse1 = reponse1.textContent;
var ContenuReponse2 = reponse2.textContent;
var ContenuReponse3 = reponse3.textContent;
var ContenuReponse4 = reponse4.textContent;
var ContenuBonreponse = bonrepnse.textContent;
var ContenuScore = score.textContent;

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
    console.log("\nScore =  "+ContenuScore)
    

    var time = setInterval(frame, 100 /*valeur a changer pour le temps*/);
    function frame() {
      if (width >= 100) {
        clearInterval(time);
        i = 0;
        verfication();
        reload_solo();
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
    const i = Number("1");
    const conv_score = Number(ContenuScore)
    const score_fin = (conv_score + i);
    console.log("\nscore =  "+ score_fin);
    alert("Victoire");
    update(score_fin)
  }
  else if (id== '0'){
    console.log("\n\nLe joueur n'a pas repondu");
    console.log("\n"+ ContenuScore);
    alert("Il faut repondre");
  }

  else{
    console.log("\nPerdu");
    console.log("\n"+ ContenuScore);
    alert("Perdu");
  }
}
/*------------------- function dpour changer la couleur au clique -----------------*/
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

function reload_tmp(){
  //window.location.replace('3'); 
  location.reload();
}

function reload_solo(){
  reload = setInterval(reload_tmp, 3000);
}

function update(score_fin){
	var score = document.getElementById('demo').value;
	document.getElementById('demo').value = "";
  t = document.getElementById("demo");
	var xhr = new XMLHttpRequest();
				
	xhr.addEventListener('readystatechange', function() {
		if (this.readyState == 4 && this.status == 200) {
			t.innerHTML = this.responseText;
		}
  });
  
  xhr.open('POST', 'http://dwarves.iut-fbleau.fr/~leblet/WIM/PROJET/Model/update.php', true);
  xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
	xhr.send("score="+score_fin);
};