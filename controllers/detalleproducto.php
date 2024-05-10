<?php
//		controllers/detalleproducto.php

require '../fw/fw.php';
require '../models/Productos.php';
require '../views/DetalleProducto.php';

	if(isset($_GET['e'])){
	
	$p = new Productos();
	$id=$_GET['e'];
	$datos = $p->getProducto($id);


	$v = new DetalleProducto();
	$v->producto = $datos;
	$v->render();
	}