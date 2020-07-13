<?php

require 'fpdf/fpdf.php';

class PDF extends FPDF
{
function Header()
{
	$this->Image('images/logoImpresion.jpg', 10, 10, 70);
	$this->SetFont('Times', '', 18);
	$this->Cell(70);
	$this->Cell(130, 10, 'MATERIAL TRANSFER SHEET', 0, 0, 'C');
	$this->Ln(13);
	$this->SetFont('Times', '', 13);
	$this->Cell(230, 10, 'CUSTOMER: WOOD', 0, 0, 'C');
	$this->Cell(-85);
	$this->Cell(0, 10, 'TRANSFERRED TO DEPARTAMENT:WOOD DEPARTAMENT', 0, 1, 'C');
	
	 	

	$this->Ln(20);
}

function Footer(){
      
      date_default_timezone_set("America/Lima");

    $this->SetY(-15);
    $this->SetFont('Times','', 13);
    $this->Cell(130, 10, 'SIGNATURE OF THE WAREHOUSE RESPONSIBLE:_______________ ', 0, 0, 'C');
    $this->Cell(8);
    $this->Cell(105, 10, 'SIGNATURE OF RECEIVING_______________', 0, 1, 'L');
    $this->Cell(138);
    $this->Cell(0, 0, 'JOSE A. BONILLAS', 0, 0, 'L');
    $this->Cell(-35);
    $this->Cell(0,-22,'HORA: ' . date('h:i: ' . 'A' ),0,0,'L');
    $this->Cell(-35);
    $this->Cell(0,-10,'DATE: ' . date('d/m/Y'),0,0,'L');
    //$this->Cell(,10, 'Pagina '.$this->PageNo().'/{nb}',0,0,'C' );   

}
}
?>