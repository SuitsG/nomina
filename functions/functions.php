<?php
require_once ($_SERVER['DOCUMENT_ROOT']) . '/information/accessInformation.php';
ultimoCliente();


$precioHorasDiurnas = 1500;
$precioHorasNocturas = 2000;
$precioHorasDominicales = 2500;
$mes = 30;

function imprimirHoras()
{
    global $imprimirHorasDiurnas, $imprimirHorasNocturnas, $imprimirHorasDominicales, $horasDiurnas, $horasNocturnas, $horasDominicales, $precioHorasDiurnas, $precioHorasNocturas, $precioHorasDominicales;

    $imprimirHorasDiurnas = $horasDiurnas * $precioHorasDiurnas;
    $imprimirHorasNocturnas = $horasNocturnas * $precioHorasNocturas;
    $imprimirHorasDominicales = $horasDominicales * $precioHorasDominicales;
}

function salario()
{
    global $salarioMensual, $diasLaborados, $mes;

    $salarioDia = $salarioMensual / $mes;
    $salarioDiasTrabajados = $diasLaborados * $salarioDia;
    return round($salarioDiasTrabajados,0);
}


function precioHoras()
{
    global $horasDiurnas, $horasNocturnas, $horasDominicales, $precioHorasDiurnas, $precioHorasNocturas, $precioHorasDominicales;

    $precioTotalHoras = $horasDiurnas * $precioHorasDiurnas +
        $horasNocturnas * $precioHorasNocturas +
        $horasDominicales * $precioHorasDominicales;
    return $precioTotalHoras;
}

function totalDevengados()
{
    global $comision;

    $totalDevengados = precioHoras() + salario() + $comision;
    return round($totalDevengados,0);
}
function deducciones()
{
    global $salud, $pension, $sindicato, $totalDeducidos;

    $salud = round(totalDevengados() * 0.08,0);
    $pension = round(totalDevengados() * 0.04,0);
    $sindicato = round(totalDevengados() * 0.02,0);
    $totalDeducidos = round($salud + $pension + $sindicato,0);
}

function salarioNetoPagar(){
    global $totalDeducidos, $salarioNetoPagar;

    $salarioNetoPagar = totalDevengados() - $totalDeducidos;
    return round($salarioNetoPagar,0);
}