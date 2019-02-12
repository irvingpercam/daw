//Funcion para cambiar el color de la fuente
function cambiarFuente(){
    document.getElementById("cambioFuente").style.fontStyle = "italic";
}

function fuenteOriginal(){
    document.getElementById("cambioFuente").style.fontStyle = "initial";
}

//Funcion para obtener ayuda
function pedirAyuda(){
    setTimeout( function ( ) { alert( "Llena todos los campos con tu información personal :)" ); }, 5000 ); //displays msg in 5 seconds
}
function ayudaMostrada(){
    alert("Si necesita más ayuda, contacte al administrador :)");
}

//Funcion drag and drop
function allowDrop(ev) {
    ev.preventDefault();
  }
  
  function drag(ev) {
    ev.dataTransfer.setData("text", ev.target.id);
  }
  
  function drop(ev) {
    ev.preventDefault();
    var data = ev.dataTransfer.getData("text");
    ev.target.appendChild(document.getElementById(data));
  }

//Funcion que demuestra como trabaja SetInterval
var myVar = setInterval(myTimer, 1000);

function myTimer() {
  var d = new Date();
  document.getElementById("hora").innerHTML = d.toLocaleTimeString();
}
