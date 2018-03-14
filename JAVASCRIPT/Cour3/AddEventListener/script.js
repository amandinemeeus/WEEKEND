function Hello (){alert("hello")};

window.onload = function(){

var bouton = document.getElementsByTagName("button")[0];
bouton.addEventListener("click", Hello, true);

}
