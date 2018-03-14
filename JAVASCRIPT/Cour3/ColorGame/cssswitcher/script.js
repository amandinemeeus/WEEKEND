function setStyle(style, link){
    
    link.setAttribute("href", style); 
}

function changeColor(){
    var color = document.getElementsByTagName("select")[0];
    var link = document.getElementsByTagName("link")[0];
    
    if (color.value == "crimson"){
        setStyle("style1.css", link);
    }
    else if (color.value == "aqua"){
        setStyle("style2.css", link);
    }
    else {alert("Choose a color")}
}

function saveStyle(){
    var link = document.getElementsByTagName("link")[0];
    var href = link.getAttribute("href");
    sessionStorage.setItem("href", href);
}

function deleteChoice(){
    if (sessionStorage.getItem("href")!=null){
        sessionStorage.removeItem("href");
    }
}

window.onload = function(){
  var color = document.getElementsByTagName("select")[0];
  color.addEventListener("change", changeColor, true);

  var save = document.getElementsByTagName("button")[0];
  save.addEventListener("click", saveStyle, true);

  var del = document.getElementsByTagName("button")[1];
  del.addEventListener("click", deleteChoice, true);

  if (sessionStorage.getItem("href")!=null){
    var link = document.getElementsByTagName("link")[0];
    var href= sessionStorage.getItem("href");
      setStyle(href, link);
  }
}

/* document.createElement("p")
<p>​</p>​
var p = document.createElement("p")
undefined
p
<p>​</p>​
p.innerText
""
p.innerText = "hello"
"hello"
document.body.appendChild(p)
<p>​hello​</p>​
document.body.removeChild(p)
<p>​hello​</p>​ */