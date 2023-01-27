<h1> Prueba 1: HTML aprobada</h1>

<?php
    /*
        Se comenta igual que en c pero incluye # tambien
    */
    #IMPRIMIR
    echo "<h1> Prueba 2: PHP </h1>";
    print("Otro tipo de escribir");

    #LEER

    #CRUD
    //C

    //Crear variables ($):

    $texto = "No es necesario indicar que es string";

    //imprimir una variable
    echo $texto;

    //Se pueden utilizar las comillas para agregar código html

    //Concatenación (.):
    //Se le concatena una etiqueta html para poder usar texto como tal
    echo "<h1>".$texto."</h1>";


    //ej.: 
    $altura = "187 cm";
    echo "<h1>"."su altura es ".$altura."</h1>";

    /*Si se desea usar un código html con un estilo en particular, como style requiere de comillas dobles,
      las comillas para agregar el código html deben ser simples, no es recomendable eso si*/

    echo '<h3 style="background:green;color:white;">Estilo HTML</h3>';
    

    //Utilizar variables dentro de un texto a imprimir

    $variable = "variable";
    echo "<h1>"."Se puede utilizar una $variable dentro de un texto a imprimir"."</h1>";

    //Lo bueno de php es que se pueden utilizar las variables miles de veces y el código queda más ordenado

    //Ej.:
    $variable1 = "se pueden colocar varias variables ";
    $variable2 = "juntas en un mismo texto concatenandolas ";
    $variable3 = "e imprimir todo como una variable ";

    $variablesconcatenadas = "<h1>".$variable1.$variable2.$variable3."</h1>";

    /*Si a esta variable, se le quiere agregar algo se utiliza similar a += pero
    como se concatena con . es .=*/

    $variablesconcatenadas .= "<h1>"."a la que se le puede concatenar más texto "."</h1>";
    $variable4 = "o más variables";
    $variablesconcatenadas .= "<h1>".$variable4."</h1>";

    //al imprimir una variable, no se usan comillas
    echo $variablesconcatenadas;

    //GET 
    /*Variables super globales que llegan por la url, es decir al ingresar en una url
     "http://localhost/intento/?variable=Valor Variable"*/

    echo "<hr>"."Valores por URl"; //salto de línea + linea separadora                       -
    //echo $_GET["variable"];                               -> Descomentar para probar               

    /*En el caso anterior "variable" se pudo obtener e imprimir ya que fue declarada previamente
    en la linea 35 con el valor "variable"*/

    //si se desea declarar la variable y obtener su valor de la URL automáticamente:

    $variableurl = $_GET["variableurl"];                          //->Se imprime en la línea 100         

    /*para leer más de una variable (variable y variableurl), colocar un &:
     "http://localhost/intento/?variable=Valor Variable&variableurl=Valor Variable URL" */

    /*Si no se ingresan los valores de las variables por la URL pero hay un GET en el código
      aparecerá un error (ya que el GET estaría esperando estos valores), estos se pueden evitar*/
    //agregando condiciones:

    //Primero se confirma si la variable existe con la función isset()
    if (isset($_GET["variable"])) {
        $variable = $_GET["variable"];
    } else {
        $variable = "se le asigna otro valor";
    }

    if (isset($_GET["variableurl"])) {
        $variableurl = $_GET["variableurl"];
    } else {
        $variableurl = "se le asigna otro valor";

        //tal vez también podría mandarse un mensaje por no ingresar el valor en la url
    }

    echo $variableurl;
    echo "<hr>";
    
    #FUNCIONES

    nombrefuncion();
    function nombrefuncion() {
        echo "funciona";
    }

    //R
    //U
    //D

    //Se pueden hacer comentarios html, pero no se verán en local host:
    echo "<!--Comentario HTML-->";
?>