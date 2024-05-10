<?php
//		controllers/Buscar.php

require '../fw/fw.php';
require '../models/Productos.php';
require '../views/Busqueda.php';

$c = new Productos();

if(count($_POST) > 0 ){
	
	
	if(!isset($_POST['buscar'])) throw new Validacion("Error buscar 1");
	
	
	$p = new Productos();
	$b = $_POST['buscar'];
	$busq = $p->BuscarProducto($b);
	
	$v = new Busqueda();
	$v->productos = $busq ;
	$v->render();

}
class Validacion extends Exception{}	