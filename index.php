<?php

require "xajax/xajax.inc.php";

// Devuelve un array con el contenido de las filas del fichero en cada posición de este

function getData() {

    $prueba = file("Agenda.txt");
    return $prueba;
}

function autocompletar($value){
    
    $array_datos = getData();
    
    for ($index = 0; $index < count($array_datos); $index++) {
        
        if(strpos($array_datos[$index], $value) == true){
            
            
            
        }
        
    }
    
    
}

$xajax = new xajax();
$xajax->setCharEncoding("iso-8859-1");
$xajax->decodeUTF8InputOn();
$xajax->registerFunction("autocompletar");
$xajax->processRequests();

?>

<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" /> 
        <title>Buscador de contactos</title>
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    <body>
        
        <h1>Buscador de contactos</h1>
        
        <form id="formulario">
            
            <label for="campoTLF">Introduzca un número de contacto</label><br>
                <input type="text" name="campoTLF" onchange="xajax_autocompletar(document.formulario.campoTLF.value)" 
                       onkeyup="xajax_autocompletar(document.formulario.campoTLF.value)"/>
                        
        </form>
        
        <table id="tablaContactos">
            <tr>
                <th>Contacto</th>
                <th>Número de teléfono</th>
            </tr>
        </table>

    </body>
</html>





