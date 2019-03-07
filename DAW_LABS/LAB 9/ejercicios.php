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
$limit = 0;
print "<form method=get action=ejercicios.php>";
print "Cantidad (numero 'n' entre 1 and 100): <input type=number name=number min=1 max=100>";
print "<input type=submit>";
print "</form>";
    //if(isset($_GET['number0'])){
        $limit = $_GET['number'];
    //}
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
function tabla ($limit){
    $cuadrados = array();
    $cubos = array();
    echo "<table border='1'>";
    for ($tr = 0; $tr < 2; $tr++){
        echo "<tr>";
        for($td = 0; $td < $limit; $td++){
            if($tr == 0)
                echo "<td>".pow($td,2)."</td>";
            else
                echo "<td>".pow($td,3)."</td>";
        }
        echo "</tr>";
    }
    echo "</table>";
}
//}
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
<article>
		  	<h2>¿Qué hace la función phpinfo()? Describe y discute 3 datos que llamen tu atención.</h2>
		    <p>
		    	Muestra información sobre la configuración de PHP<br>
		    	Muestra gran cantidad de información sobre el estado actual de PHP. Incluye información sobre las opciones de compilación y extensiones de PHP, versión de PHP, información del servidor y entorno (si se compiló como módulo), entorno PHP, versión del OS, rutas, valor de las opciones de configuración locales y generales, cabeceras HTTP y licencia de PHP.<br>
		    	Como cada sistema se instala diferente phpinfo() se usa comúnmente para revisar opciones de configuración y variables predefinidas disponibles en un sistema dado<br>
		    	phpinfo() también es una valiosa herramienta de depuración ya que contiene todos valores EGPCS (Environment, GET, POST, Cookie, Server).
		    </p>
		    <h2>¿Qué cambios tendrías que hacer en la configuración del servidor para que pudiera ser apto en un ambiente de producción?</h2>
		    <p>
		    	Sin tener que instalar un servidor de Windows, que es bastante costoso, puede instalar una de las varias aplicaciones de terceros a las que podrá acceder el entorno de su servidor.
				Algunas de estas aplicaciones son XAMPP y WAMP. Estas aplicaciones de terceros instalan Apache, MySQL y PHP dentro del programa.<br>
		    </p>
		    <h2>¿Cómo es que si el código está en un archivo con código html que se despliega del lado del cliente, se ejecuta del lado del servidor? Explica.</h2>
		    <p>
		    	Cuando accedemos a un enlace de hipertexto, en realidad estamos estableciendo una petición de un archivo HTML residente en el servidor (un ordenador que se encuentra continuamente conectado a la red) el cual es enviado e interpretado por nuestro navegador (el cliente). 
		    </p>
            <p>
            Referencias: http://php.net/manual/es/function.phpinfo.php
            </p>
		  </article>
