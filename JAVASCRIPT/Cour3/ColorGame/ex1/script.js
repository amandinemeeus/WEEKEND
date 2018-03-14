function trouveElementSelect (){
    var color = document.getElementsByName("color");
    for (var i = 0; i < color.length ; i++){
        if (color[i].checked==true){
            return color[i];
        }
    }
}


window.onload = function(){
    
    var button = document.getElementsByTagName("button")[0];

    function colorChange(){
        // Mot de passe de base de donnée: erfoiajzoeifjazeoj
        
        var select = trouveElementSelect();
        

        var color = ""; 
        if (select==null){
            alert("No color selected")
        }       
        else {
            switch (select.value){
                case "red" : 
                color="red";
                break;
                case "blue":
                color="blue";
                break;
                case "crimson":
                color="crimson";
                break;
                case "aqua":
                color="aqua";
                break;
            }
        }
        if (color!=""){
            document.body.style.backgroundColor=color;
        }
    };

    button.addEventListener("click", colorChange, true);

 
}

var x = document.getElementsByTagName("input")
x
for (var i = 0; i<x.length; i++){x[i].checked=true}
