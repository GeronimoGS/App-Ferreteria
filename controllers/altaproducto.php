<?php
//		controllers/detalleproducto.php

require '../fw/fw.php';
require '../models/Categorias.php';
require '../models/Productos.php';
require '../views/AltaProducto.php';
require '../views/AltaProductoOk.php';

$c = new Categorias();

if(count($_POST) > 0 ){
	
	
	if(!isset($_POST['nombre']))	  throw new ValidacionProducto("Error nombre 1");
	if(!isset($_POST['categoria']))	  throw new ValidacionProducto("Error cat 2");
	if(!isset($_POST['descripcion'])) throw new ValidacionProducto("Error descripcion 3");
	if(!isset($_POST['monto']))		  throw new ValidacionProducto("Error monto 4");
	
	$p = new Productos();
	$p->setProducto($_POST['nombre'],$_POST['categoria'],$_POST['descripcion'],$_POST['monto']);
	$v = new AltaProductoOk();
	$v->render();
}
else{

	$datos = $c->getTodos();
	$v = new AltaProducto();
	$v->categoria = $datos ;
	$v->render();
}


class ValidacionProducto extends Exception{}	