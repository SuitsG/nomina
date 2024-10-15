<?php
require_once ($_SERVER['DOCUMENT_ROOT']) . '/information/accessInformation.php';
require_once ($_SERVER['DOCUMENT_ROOT']) . '/functions/functions.php';
require('fpdf/fpdf.php');  // Asegúrate de que la ruta es correcta para tu estructura de proyecto

ultimoCliente();
imprimirHoras();
deducciones();

// Inicia la creación del PDF
class PDF extends FPDF
{
    // Cabecera de página
    function Header()
    {
        // Título
        $this->SetFont('Arial','B',12);
        $this->Cell(0,10,'Resumen de Nomina',0,1,'C');
        $this->Ln(5);
    }

    // Pie de página
    function Footer()
    {
        // Posición a 1.5 cm del final
        $this->SetY(-15);
        // Arial italic 8
        $this->SetFont('Arial','I',8);
        // Número de página
        $this->Cell(0,10,'Pagina '.$this->PageNo(),0,0,'C');
    }
}

// Crear el PDF
$pdf = new PDF();
$pdf->AddPage();

// Definir la fuente y agregar contenido
$pdf->SetFont('Arial','',12);

// Añadir los datos al PDF
$pdf->Cell(0,10,"Nombre: $nombre",0,1);
$pdf->Cell(0,10,"Salario Mensual: $salarioMensual pesos",0,1);
$pdf->Cell(0,10,"Dias Laborados: $diasLaborados",0,1);
$pdf->Cell(0,10,"Total salario: " . salario() . " pesos",0,1);
$pdf->Cell(0,10,"Horas Diurnas: $horasDiurnas",0,1);
$pdf->Cell(0,10,"Horas Nocturnas: $horasNocturnas",0,1);
$pdf->Cell(0,10,"Horas Dominicales: $horasDominicales",0,1);
$pdf->Cell(0,10,"Total Horas Extras Diurnas: $imprimirHorasDiurnas pesos",0,1);
$pdf->Cell(0,10,"Total Horas Extras Nocturnas: $imprimirHorasNocturnas pesos",0,1);
$pdf->Cell(0,10,"Total Horas Extras Dominicales: $imprimirHorasDominicales pesos",0,1);
$pdf->Cell(0,10,"Comisiones: $comision pesos",0,1);
$pdf->Cell(0,10,"Total Devengados: " . totalDevengados() . " pesos",0,1);
$pdf->Cell(0,10,"Salud: $salud pesos",0,1);
$pdf->Cell(0,10,"Pension: $pension pesos",0,1);
$pdf->Cell(0,10,"Sindicato: $sindicato pesos",0,1);
$pdf->Cell(0,10,"Total Deducidos: $totalDeducidos pesos",0,1);
$pdf->Cell(0,10,"Salario Neto a Pagar: " . salarioNetoPagar() . " pesos",0,1);

// Descargar el PDF
$pdf->Output('I', 'nomina_resumen.pdf');
?>
