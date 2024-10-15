<?php
require_once ($_SERVER['DOCUMENT_ROOT']) . '/functions/functions.php';
ultimoCliente();
imprimirHoras();
deducciones();
subsidio();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nómina</title>
    <link rel="stylesheet" href="/css/nomina.css">
    <link rel="icon" type="image/x-icon" href="assets/nomina.png">

</head>

<body>
    <header class="header">
        <h1 class="header__h1">NÓMINA</h1>

    </header>
    <main class="main">
        <section class="main__section">
            <div class="main__section__div">
                <p class="main__section__div__p1">Nombre</p>
                <p class="main__section__div__p"><?= $nombre; ?></p>
            </div>
            <div class="main__section__div">
                <p class="main__section__div__p1">Salario mensual</p>
                <p class="main__section__div__p"><?= $salarioMensual ?> pesos</p>
            </div>
            <div class="main__section__div">
                <p class="main__section__div__p1">Días laborados</p>
                <p class="main__section__div__p"><?= $diasLaborados; ?></p>
            </div>
            <div class="main__section__div">
                <p class="main__section__div__p1">Total salario</p>
                <p class="main__section__div__p"><?= salario(); ?> pesos</p>
            </div>
            <div class="main__section__div">
                <p class="main__section__div__p1">Horas diurnas</p>
                <p class="main__section__div__p"><?= $horasDiurnas ?></p>
            </div>
            <div class="main__section__div">
                <p class="main__section__div__p1">Horas nocturnas</p>
                <p class="main__section__div__p"><?= $horasNocturnas ?></p>
            </div>
            <div class="main__section__div">
                <p class="main__section__div__p1">Horas dominicales</p>
                <p class="main__section__div__p"><?= $horasDominicales ?></p>
            </div>
            <div class="main__section__div">
                <p class="main__section__div__p1">Valor total horas extras diurnas</p>
                <p class="main__section__div__p"><?= $imprimirHorasDiurnas; ?> pesos</p>
            </div>
            <div class="main__section__div">
                <p class="main__section__div__p1">Valor total horas extras nocturnas</p>
                <p class="main__section__div__p"><?= $imprimirHorasNocturnas; ?> pesos</p>
            </div>
            <div class="main__section__div">
                <p class="main__section__div__p1">Valor total horas extras dominicales</p>
                <p class="main__section__div__p"><?= $imprimirHorasDominicales; ?> pesos</p>
            </div>
            <div class="main__section__div">
                <p class="main__section__div__p1">Valor total horas extras</p>
                <p class="main__section__div__p"><?= precioHoras(); ?> pesos</p>
            </div>
            <div class="main__section__div">
                <p class="main__section__div__p1">Comisiones</p>
                <p class="main__section__div__p"><?= $comision; ?> pesos</p>
            </div>
            <div class="main__section__div">
                <p class="main__section__div__p1">Total devengados</p>
                <p class="main__section__div__p"><?= totalDevengados(); ?> pesos</p>
            </div>
            <div class="main__section__div">
                <p class="main__section__div__p1">Salud</p>
                <p class="main__section__div__p"><?= $salud ?> pesos</p>
            </div>
            <div class="main__section__div">
                <p class="main__section__div__p1">Pensión</p>
                <p class="main__section__div__p"><?= $pension ?> pesos</p>
            </div>
            <div class="main__section__div">
                <p class="main__section__div__p1">Sindicato</p>
                <p class="main__section__div__p"><?= $sindicato ?> pesos</p>
            </div>
            <div class="main__section__div">
                <p class="main__section__div__p1">Total deducidos</p>
                <p class="main__section__div__p"><?= $totalDeducidos ?> pesos</p>
            </div>
            <div class="main__section__div">
                <p class="main__section__div__p1"><?=$mensaje; ?></p>
                <p class="main__section__div__p"><?= $subsidioTransporte."".$pesos?> </p>
            </div>
            <div class="main__section__div">
                <p class="main__section__div__p1">Salario neto a pagar</p>
                <p class="main__section__div__p"><?= salarioNetoPagar(); ?> pesos</p>
            </div>
            
            <div class="main__section__div__b">
                <form action="/descargarDatos.php" method="POST">
                <button class="main__section__div__button">Descargar datos</button>
                </form>
            </div>
        </section>
    </main>
</body>

</html>