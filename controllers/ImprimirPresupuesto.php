<?php
//		controllers/ImprimirPresupuesot.php

require '../fw/fw.php';
require '../models/Presupuestos.php';
require '../models/pdf/fpdf.php';

class PDF extends FPDF
{
// Cabecera de página
function Header()
{
  
    // Arial bold 15
    $this->SetFont('Arial','B',15);
    // Movernos a la derecha
    $this->Cell(75);
    // Título
    $this->Cell(40,10,'Ferreteria GS',1,0,'C');
    // Salto de línea
    $this->Ln(20);
}

// Pie de página
function Footer()
{
    // Posición: a 1,5 cm del final
    $this->SetY(-15);
    // Arial italic 8
    $this->SetFont('Arial','I',8);
    // Número de página
    $this->Cell(0,10,utf8_decode('Pagina ').$this->PageNo().'/{nb}',0,0,'C');
}
}

if(isset($_GET['id'])){
	
	$p = new Presupuestos();
	$id=$_GET['id'];
	$datos = $p->getDetallePresupuesto($id);

	$id=$_GET['id'];
	$datospre = $p->getPresupuesto($id);

	$pdf = new PDF();
	$pdf->AliasNbPages();
	$pdf->AddPage();
	$pdf->SetFont('Arial','',13);

	foreach ($datospre as $p ) {
				$fecha = $p['fecha'];
				$idpre = $p['id_presupuesto'];
			}

	
				$razon = "-";
				$cuil = "-";
				$direc = "-";
				$email = "-";
				$tel = "-";
			

	


	
	

	$pdf->cell(120,05,'Direccion: Mitre 1234', 100 , 0, '', 0);
	$pdf->cell(95,05,'FECHA: '.$fecha, 100 , 1, '', 0);
	$pdf->cell(120,05,'Moreno, Buenos Aires', 100 , 0, '', 0);
	$pdf->cell(95,05,'PRESUPUESTO 000-'.$idpre, 100 , 1, '', 0);
	$pdf->cell(95,05,'Telefono: 11-2345-1234', 100 , 1, '', 0);
	$pdf->cell(95,05,'', 100 , 1, '', 0);
	$pdf->cell(95,05,'FACTURAR A:', 100 , 1, '', 0);
	$pdf->cell(95,05,'Razon Social: '.$razon, 100 , 1, '', 0);
	$pdf->cell(95,05,'Cuit/l:'.$cuil, 100 , 1, '', 0);
	$pdf->cell(95,05,'Direccion: '.$direc, 100 , 1, '', 0);
	$pdf->cell(95,05,'Telefono: '.$tel, 100 , 1, '', 0);
	$pdf->cell(95,05,'Email: '.$email, 100 , 1, '', 0);
	$pdf->cell(190,15,'   ', 100 , 1, 'C', 0);
	$pdf->cell(10,10,'Id', 1 , 0, 'C', 0);
	$pdf->cell(60,10,'Producto', 1 , 0, 'C', 0);
	$pdf->cell(40,10,'Cantidad', 1 , 0, 'C', 0);
	$pdf->cell(40,10,'precio', 1 , 0, 'C', 0  );
	$pdf->cell(40,10,'subtotal', 1 , 1, 'C', 0);
	$total=0;
	foreach($datos as $p){
		$pdf->cell(10,10,$p['id_producto'], 1 , 0, 'C', 0);
		$pdf->cell(60,10,$p['nombre'], 1 , 0, 'C', 0);
		$pdf->cell(40,10,$p['cantidad'], 1 , 0, 'C', 0);
		$pdf->cell(40,10,$p['precio'], 1 , 0, 'C', 0);
		$pdf->cell(40,10,$p['subtotal'], 1 , 1, 'C', 0);
		
		$total= $total + $p['subtotal'];
	}
	$pdf->cell(70,10,'Total', 1 , 0, 'C', 0);

	$pdf->cell(80,10,"", 1 , 0, 'C', 0);
	$pdf->cell(40,10,"$".$total, 1 , 1, 'C', 0);


$pdf->Output();
}
?>

