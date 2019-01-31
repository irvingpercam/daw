function tabla() {
    
    let input = prompt("Límite : ");
	
	if(input >= 1){
		document.write("<table border='3'>");
		document.write("<tr>");
		document.write("<th>Numero</th> <th>Cuadrados</th> <th>Cubos</th>");
		document.write("</tr>");

		for(var i = 1; i <= input; i++){
			document.write("<tr>");
			document.write("<td>"+i+"</td>" + "<td>"+i*i+"</td>" + "<td>"+Math.pow(i,3)+"</td>");
			document.write("</tr>");
		}document.write("</table>");
    }
    else if(input < 0){
		alert("No se aceptan números negativos");
    }
    else{
		alert("Por favor ingrese un numero :)");
	}
}

function random(){
    
    let input = prompt("Adivina el resultado de la suma de 2 números generados de manera aleatoria : ");

	let num1 = Math.floor(Math.random()*10);
	let num2 = Math.floor(Math.random()*10);
	let sum = num1 + num2;

	if(input == sum){
		document.write("Ah prro, adivinadooor ;)");
		document.write("<br>"+"Resultado correcto : "+ sum);
        document.write("<br>"+"Resultado ingresado : "+ input);
        document.write("<br>"+"Eres muy bueno, sigue así :p");
    }
    else{
		document.write("Ha! Ha!, Fallaste :c");
		document.write("<br>"+"Resultado correcto : "+ sum);
        document.write("<br>"+"Resultado ingresado : "+ input);
        document.write("<br>"+"Suerte para la próxima compa :)");
	}
}

function contador(){
	let arg = new Array();
	let mayores = 0;
	let menores = 0;
	let ceros = 0;
    document.write("Arreglo de números random : "+"<br>");
	for(let i = 0; i < 10; i++){
		arg[i]= Math.floor((Math.random()*10)-5);
		document.write(arg[i]+" ");

		if(arg[i] < 0){
			menores += 1;
        }
        else if(arg[i] > 0){
			mayores += 1;
        }
        else{
			ceros += 1;
		}
	}
	document.write("<br>Números menores a 0 : " +menores);
	document.write("<br>Números mayores a 0 : " +mayores);
	document.write("<br>Ceros en el arreglo : " +ceros);
}

function promedio(){
    let lamatrix = [];
    let arg = new Array(10);
	let aux = 0;
	
	for(let i = 0; i < 10; i++) {
    	lamatrix[i] = [];
    	for(let j = 0; j < 10; j++) {
        	lamatrix[i][j] = Math.floor(Math.random()*10);
        	aux += lamatrix[i][j];
        	document.write(lamatrix[i][j]+" ");
    	}document.write("<br>");
    	arg[i] = aux/10;
	}document.write("<br>");
	for(i = 0; i < 10; i++){
		document.write(arg[i]+" ");
	}
}

function inverso(){
	let x = prompt("Dame un número : ");
	if(x >= 0){
		let y = x.toString();
		let z = y.split("").reverse().join("");
		let aa = Number(z);
		document.write("Numero invertido : "+aa);			
	}else{
		alert("Dame un número válido we :)");
	}
}

function binarial(){
    let contador = 0;
    let input = prompt("Ingresa un numero entero en decimal :");
    let num = input;
    let arg = new Array(1000);
    if(num == 0){
        alert("Este siempre va a ser cero :)");
    }
    else if(num < 0){
        alert("Oie no soy 100tifiko >:c");
    }
    else{
        var bin = (num >>> 0).toString(2);
        document.write("El número "+num+" en binario es : "+bin);
    }
    /*
    Este algoritmo funciona en C, pero aqui no :(
    else{
        while (num > 0) {
            arg[contador] = num%2;
            num/=2;
            ++contador;
        }
        document.write("El numero en binario es : ");
        for(contadorb = contador -1; contadorb >= 0; --contadorb){
            document.write(arg[contadorb]);
        }
        document.write("<br>");
    }
    
    document.write("<br>");
    */
}