<?php
//		controllers/listaproductos.php

require '../fw/fw.php';
require '../models/Productos.php';
require '../views/ListadoProductos.php';


	if(isset($_GET['c'])){

	$p = new Productos();
	$c = $_GET['c'];
	$todos = $p->getProductosXcat($c);

	$v = new ListadoProductos();
	$v->productos = $todos;
	$v->render();
	
	}else{
		
		$p = new Productos();
		$todos = $p->getProductos();
		
		$v = new ListadoProductos();
		$v->productos = $todos;
		$v->render();
	}