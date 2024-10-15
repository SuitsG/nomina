<?php

$archivoClientes = ($_SERVER['DOCUMENT_ROOT'] . '/json/information.json');

if (!file_exists($archivoClientes)) {
    die("Error: El archivo $archivoClientes no existe.");
}
// Leer el contenido del archivo JSON
$jsonContenido = file_get_contents($archivoClientes);
$clientes = json_decode($jsonContenido, true);

/*Funciones*/

function ultimoCliente()
{
    global $clientes, $nombre, $salarioMensual, $diasLaborados, $horasDiurnas, $horasNocturnas, $horasDominicales, $comision, $subsidio;
    
    $nombre = $clientes['nombre'];
    $salarioMensual = $clientes['salarioMensual'];
    $diasLaborados = $clientes['diasLaborados'];
    $horasDiurnas = $clientes['horasDiurnas'];
    $horasNocturnas = $clientes['horasNocturnas'];
    $horasDominicales = $clientes['horasDominicales'];
    $comision = $clientes['comision'];
    $subsidio = $clientes['subsidio'];

}

?>
