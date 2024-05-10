<?php
// 			controllers/compras.php
session_start();

require '../fw/fw.php';
require '../models/Detalle_Factura.php';
require '../models/Facturas.php';
require '../views/Compras.php';
		
	if(!$_SESSION['carrito'])throw new Validacion("Error carrito");

	$datos=$_SESSION['carrito'];
	$id_factura=0;
	$q = new Detalle_Facturas();
	$f = new Facturas();
	$re = $q->getIdFacturaDESC() ;




	for($i=0;$i<count($re);$i++){
		$id_factura=$re[$i]['id_factura'];
		
	}
	if($id_factura == 0){
		$id_factura=1;
	}else{
		$id_factura=$id_factura+1; 

	}
	$total=0;

	if(!isset($_POST['cliente']))throw new Validacion("Error id 1");
	$cliente = $_POST['cliente'];

	if(!isset($_POST['metodopago']))throw new Validacion("Error metodo de pago");
	$metodopago = $_POST['metodopago'];

	for($i=0;$i<count($datos);$i++){
		
	$q->setDetalleFactura($id_factura,$datos[$i]['Id_producto'],$datos[$i]['Nombre'],$datos[$i]['Cantidad'],$datos[$i]['Precio']);

	$total = $datos[$i]['Cantidad']*$datos[$i]['Precio'] + $total ;
	
	}
	$f->setFactura($id_factura,$metodopago,$cliente,$total);
 	unset($_SESSION['carrito']);

	 $v = new Compras();
	 $v->render();


class Validacion extends Exception{}	


  ?>