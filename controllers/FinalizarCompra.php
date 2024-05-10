<?php
//		controllers/FinalizarCompra.php
session_start();
require '../fw/fw.php';
require '../views/FinalizarCompra.php';
require '../models/clientes.php';

	if(!$_SESSION['carrito'])  throw new ValidacionSession("Error Carrito");	


	$c = new clientes();


	$datos = $c->getTodos();
	$v = new FinalizarCompra();
	$v->clientes = $datos ;
	$v->render();


class ValidacionSession extends Exception{}
