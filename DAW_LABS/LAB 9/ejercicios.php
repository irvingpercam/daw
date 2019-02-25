<?php
//Arreglo definido por el usuario
print "<h1>Introduce 5 numeros: </h1>";
    print "<form method=post action=ejercicios.php>";
    for ($i = 0; $i < 5; $i++){
        print "<input type=text name=txt$i />";
    }
        print "<input type=submit value=Submit />";
    print "</form>";
    $arr = array();
    if(isset($_POST['txt0'])){
        for ($i = 0; $i < 5; $i++){
            $arr[$i] = $_POST['txt'.$i];
        }
        print "<pre>";
        print_r($arr);
        print "</pre>";
    }
print "<h2>Primera funcion: </h2>";
imprimePromedio($arr);
print "<h2>Segunda funcion: </h2>";
imprimeMediana($arr);
print "<h2>Tercera funcion: </h2>";
listas($arr);
print "<form method=get action=ejercicios.php>";
print "Cantidad (numero 'n' entre 1 and 100): <input name=number min=1 max=5>";
print "<input type=submit>";
print "</form>";
$limit = 0;
    if(isset($_GET['number0'])){
        $limit = $_GET['number'];
    }
tabla($limit);
//FUNCIONES

function imprimePromedio($arr){
    if(count($arr)) {
        $arr = array_filter($arr);
        $average = array_sum($arr)/count($arr);
        print "<p>El promedio es: $average </p>";
    }
}
function imprimeMediana($arr){
    if(isset($_POST['txt0'])){
    sort($arr);
    $cantidad = count($arr);
    $posMediana = ($cantidad + 1) / 2;
    $mediana = $cantidad % 2 != 0 ? $arr[$posMediana - 1] : ($arr[$posMediana - 1] + $arr[$posMediana]) / 2;
    print "<p>La mediana es: $mediana </p>";
    }
}
function listas($arr){
    if(isset($_POST['txt0'])){
    print "
    <ul>
        <li>1. Promedio: </li>
    </ul>
    ";
imprimePromedio($arr);
print "
    <ul>
        <li>2. Mediana: </li>
    </ul>
    ";
imprimeMediana($arr);
print "
    <ul>
        <li>3. Arreglo Ascendente: </li>
    </ul>
    ";
arrAscendent($arr);
print "
    <ul>
        <li>4. Arreglo Descendente: </li>
    </ul>
    ";
arrDescendent($arr);
    }
}
function arrAscendent($arr){
    asort($arr);
    for ($i = 0; $i < 5; $i++){
        $arr[$i] = $_POST['txt'.$i];
    }
    print "<pre>";
    print_r($arr);
    print "</pre>";
}
function arrDescendent($arr){
    rsort($arr);
    for ($i = 0; $i < 5; $i++){
        $arr[$i] = $_POST['txt'.$i];
    }
    print "<pre>";
    print_r($arr);
    print "</pre>";
}
function tabla($limit){
    if(isset($_POST['txt0'])){
    if ($limit >= 1){
        print "<table border='3'>";
        print "<tr>";
        print "<th>Numero</th> <th>Cuadrados</th> <th>Cubos</th>";
        print "</tr>";
    }
    for ($i = 0; $i <= $limit; $i++){
        print "<tr>";
        print "<td>"+$i+"</td>" + "<td>"+$i*$i+"</td>" + "<td>"+pow($i,3)+"</td>";
        print "</tr>";
    }
    print "</table>";
}
}
/*
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
*/
/*
REFERENCIAS

Input definido por el usuario: https://www.youtube.com/watch?v=3OHacobPfzc
Función para la mediana: http://www.forosdelweb.com/f18/moda-mediana-php-1086004/

*/
?>
