<?php
//		controllers/DetallePresupuesto.php

require '../fw/fw.php';
require '../models/Presupuestos.php';
require '../views/DetallePresupuesto.php';


	if(isset($_GET['id'])){
	
	$p = new Presupuestos();
	$id=$_GET['id'];
	$datos = $p->getDetallePresupuesto($id);

	$v = new DetallePresupuesto();
	$v->presupuesto = $datos;
	$v->render();
	}