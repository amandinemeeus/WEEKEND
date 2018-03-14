/* var secret = "utilisateur";

var mot = Array(secret.length).join("*");
console.log(mot);

var essai = prompt ("Ecris une lettre");
console.log(essai);

function controlerLettre (secret, essai, mot){
    var nouveauMot = "";
    console.log (secret + " " + mot + " " + essai);
    for (let i = 0; i<secret.length ;i++){
        if (secret[i]==essai){
            nouveauMot+=essai;
        } else { nouveauMot + mot [i]}
    
    } console.log ("test" + " " + nouveauMot); return nouveauMot;
}

mot = controlerLettre (secret, essai, mot);
console.log(mot); */

function bonjour () {
    alert ("bonjour");
}

function temps(){
    var temps = new Date ();
    alert ("il est " + temps.getHours() + ":" + temps.getMinutes() + ":" + temps.getSeconds());
}

function doubler(){
    var choix = prompt("quel chiffre?");
    if (!isNaN (choix)){
        alert (choix *2);
    } else {alert ("Mets un chiffre");
        }     
}

function superficie(){
    /* var hauteur = prompt ("Quel est la hauteur du rectangle?");
    var largeur = prompt ("Quel est la largeur du rectangle?");
    var result = hauteur * largeur;
    alert (result); */
    alert (prompt ("Quel est la hauteur du rectangle?")*prompt ("Quel est la largeur du rectangle?"));
}