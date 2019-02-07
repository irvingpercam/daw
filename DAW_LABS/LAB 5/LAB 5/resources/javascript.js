//Funcion para validar el password
function password() {
    
  var password = document.getElementById("password").value;
  var passwordB = document.getElementById("passwordB").value;
  var message;

  if(password==="" || passwordB===""){
    message = "Favor de llenar ambos campos";
  }else
  if(password === passwordB){
    message = "Ah prro, jakiaste la NASA!";
  }else
  if(password !== passwordB){
    message="Intentalo de nuevo";
    alert("Las contraseñas no coinciden");
  }
  document.getElementById("accessMessage").innerHTML = message;
}

function productos(){
    var panArtesanal = document.getElementById("panArtesanal").value;
    var carneExtra = document.getElementById("carneExtra").value;
    var tomateExtra = document.getElementById("tomateExtra").value;
    var aderezoExtra = document.getElementById("aderezoExtra").value;
    var cebollaExtra = document.getElementById("cebollaExtra").value;
    var lechugaExtra = document.getElementById("lechugaExtra").value;
    var tocino = document.getElementById("tocino").value;
    var guacamole = document.getElementById("guacamole").value;
    var pineapple = document.getElementById("pineapple").value;
    var iva = document.getElementById("iva").value;
    var total;

    total = 55 + panArtesanal * 5 + carneExtra * 10 + tomateExtra * 5 + aderezoExtra * 5 + cebollaExtra * 5 + lechugaExtra * 5 + tocino * 5 + guacamole * 10 + pineapple * 8;
    total = total + (total * iva)/100;
    document.getElementById("pago").innerHTML = total;
    alert("Gracias por tu orden :)");
}
function productosPoints(){
    var panArtesanal = document.getElementById("panArtesanal").value;
    var carneExtra = document.getElementById("carneExtra").value;
    var tomateExtra = document.getElementById("tomateExtra").value;
    var aderezoExtra = document.getElementById("aderezoExtra").value;
    var cebollaExtra = document.getElementById("cebollaExtra").value;
    var lechugaExtra = document.getElementById("lechugaExtra").value;
    var tocino = document.getElementById("tocino").value;
    var guacamole = document.getElementById("guacamole").value;
    var pineapple = document.getElementById("pineapple").value;
    var iva = document.getElementById("iva").value;
    var total;

    total = 55 + panArtesanal * 5 + carneExtra * 10 + tomateExtra * 5 + aderezoExtra * 5 + cebollaExtra * 5 + lechugaExtra * 5 + tocino * 5 + guacamole * 10 + pineapple * 8;
    total = total + (total * iva)/100;
    if(total <= 100){
        document.getElementById("pago").innerHTML = total;
        alert("Has pagado con puntos :)");
    }
    else{
        alert("No tienes puntos suficientes para completar la orden :(");
    }
}

function imc(){
    var altura = document.getElementById("altura").value;
    var peso = document.getElementById("peso").value;
    //var altura = document.getElementById("altura");
    //var peso = document.getElementById("peso");
    var imc;
    var alturaform = altura * altura;
    imc = peso/alturaform;
    //imc = imc.toString();
    document.getElementById("imc").innerHTML = imc.toString();
    if(imc < 16){
        document.getElementById("imc").innerHTML = imc;
        alert("Infrapeso: Delgadez Severa");
    }
    else if(imc >= 16 && imc <= 16.99){
        document.getElementById("imc").innerHTML = imc;
        alert("Infrapeso: Delgadez moderada");
    }
    else if(imc >= 17 && imc <= 18.49){
        document.getElementById("imc").innerHTML = imc;
        alert("Infrapeso: Delgadez aceptable");
    }
    else if(imc >= 18.50 && imc <= 24.99){
        document.getElementById("imc").innerHTML = imc;
        alert("Peso Normal");
    }
    else if(imc >= 25 && imc <= 29.99){
        document.getElementById("imc").innerHTML = imc;
        alert("Sobrepeso");
    }
    else if(imc >= 30 && imc <= 34.99){
        document.getElementById("imc").innerHTML = imc;
        alert("Obeso: Tipo I");
    }
    else if(imc >= 35 && imc <= 40){
        document.getElementById("imc").innerHTML = imc;
        alert("Obeso: Tipo II");
    }
    else if(imc > 40){
        document.getElementById("imc").innerHTML = imc;
        alert("Obeso: Tipo III")
    }
}