<?php
// 			controllers/Generarpresupuesto.php
session_start();

require '../fw/fw.php';
require '../models/Detalle_Presupuesto.php';
require '../models/Presupuestos.php';
require '../views/PresupuestoFin.php';
		
	if(!$_SESSION['carrito']) throw new ValidacionCarrito("Error carrito");

	$datos=$_SESSION['carrito'];
	$id_presupuesto=0;
	$q = new Detalle_Presupuesto();
	$f = new Presupuestos();
	$re = $q->getIdPresupuestoDESC() ;




	for($i=0;$i<count($re);$i++){
		$id_presupuesto=$re[$i]['id_presupuesto'];
		
	}
	if($id_presupuesto == 0){
		$id_presupuesto=1;
	}else{
		$id_presupuesto=$id_presupuesto+1; 

	}
	$total=0;

	
	for($i=0;$i<count($datos);$i++){
		
	$q->setDetalle_Presupuesto($id_presupuesto,$datos[$i]['Id_producto'],$datos[$i]['Nombre'],$datos[$i]['Cantidad'],$datos[$i]['Precio']);

	$total = $datos[$i]['Cantidad']*$datos[$i]['Precio'] + $total ;
	
	}
	
	$f->setPresupuesto($id_presupuesto,$total);
 	unset($_SESSION['carrito']);

	 $v = new PresupuestoFin();
	 $v->render();



class ValidacionCarrito extends Exception{}	


  ?>