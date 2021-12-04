<?php  
require('/Program Files/XAMPP/htdocs/sistema_purificadora/fpdf181/fpdf.php');
$pdf = new FPDF();

$pdf->AddPage();

$pdf->SetFont('Arial', 'B', 16);
$pdf->Cell(80,10, 'Esto es una celda de 80 x 10', 1);
$pdf->cell(50,10, ' celda de 50 x 10,1);
$pdf->Ln(10);
$pdf->SetFont('Arial', 'I','12');
$pdf->Cell(40,10, 'Esto es una celda de 40 x 10', 1);
$pdf->SetFont('Arial', ' ', 10);
$pdf->Cell(50,10, 'celda de 50 x 10', 1);
$pdf->Output();
?>