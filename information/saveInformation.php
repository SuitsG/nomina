<?php

require_once($_SERVER['DOCUMENT_ROOT'] . '/information/accessInformation.php');



// Verificar si se ha enviado el formulario
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Capturar los datos del formulario
    $nombre = $_POST['nombre'];
    $salarioMensual = $_POST['salarioMensual'];
    $diasLaborados = $_POST['diasLaborados'];
    $horasDiurnas = $_POST['horasDiurnas'];
    $horasNocturnas = $_POST['horasNocturnas'];
    $horasDominicales = $_POST['horasDominicales'];
    $comision = $_POST['comision'];


    // Generar un identificador único para el nuevo cliente

    // Crear un nuevo cliente
    $clientes = [
        "nombre" => $nombre,
        "salarioMensual" => $salarioMensual,
        "diasLaborados" => $diasLaborados,
        "horasDiurnas" => $horasDiurnas,
        "horasNocturnas" => $horasNocturnas,
        "horasDominicales" => $horasDominicales,
        "comision" => $comision
    ];


    file_put_contents($archivoClientes, json_encode($clientes));

    header('Location: /nomina.php');
    exit();
} else {
    echo "No se ha enviado ningún dato.";
}
