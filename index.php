<?php

include 'plantilla.php';
require 'conexion.php';

$query = "SELECT * FROM productos";
$resultado = $mysqli->query($query);

$pdf = new PDF('L','mm','A4');
$pdf->AliasNbPages();
$pdf->Addpage();

$pdf->SetFillColor(232,232,232);
$pdf->SetFont('Times','B',14);
$pdf->Cell(43);
$pdf->Cell(30, 6, 'ITEM', 1, 0, 'C', 1); 
$pdf->Cell(100, 6, 'DESCRIPTION', 1, 0, 'C', 1);
$pdf->Cell(20, 6, 'UOM', 1, 0, 'C', 1);
$pdf->Cell(20, 6, 'QTY', 1, 0, 'C', 1);
$pdf->Cell(30, 6, 'FROM LOC', 1, 1, 'C', 1);

$pdf->SetFont('Arial','',12);

/*while ($row = $resultado->fetch_assoc()) {
	   
	   $pdf->Cell(70,6,utf8_decode($row['nombre_producto']),1,0,'C');
	   $pdf->Cell(20,6,$row['precio_producto'],1,0,'C');
	   $pdf->Cell(70,6,utf8_decode($row['stock_producto']),1,1,'C');
}*/
$pdf->Output();

?>