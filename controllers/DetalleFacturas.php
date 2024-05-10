<?php
//		controllers/DetalleFcaturas.php

require '../fw/fw.php';
require '../models/Facturas.php';
require '../views/DetalleFacturas.php';


	if(isset($_GET['id'])){
	
	$p = new Facturas();
	$id=$_GET['id'];
	$datos = $p->getDetalleFactura($id);

	$v = new DetalleFacturas();
	$v->facturas = $datos;
	$v->render();
	}