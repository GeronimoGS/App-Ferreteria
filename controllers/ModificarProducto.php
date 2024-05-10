<?php
//		controllers/ModificaarProducto.php

require '../fw/fw.php';
require '../models/Productos.php';

require '../views/ModificarOk.php';
require '../views/ModificarProducto.php';



	
		
		
	
		if(count($_POST) > 0 ){

			
			if(!isset($_GET['id']))	  throw new ValidacionProducto("Error id 1");
			if(!isset($_POST['nombre']))	throw new ValidacionProducto("Error nom 2");  
			if(!isset($_POST['descripcion'])) throw new ValidacionProducto("Error descripcion 3");   
			if(!isset($_POST['monto']))	throw new ValidacionProducto("Error monto 4");	
			$c = $_GET['id'];
			$p = new Productos();
			$p->modificarProducto($c, $_POST['nombre'],$_POST['descripcion'],$_POST['monto']);
			$v = new ModificarOk();
			$v->render();
		}
		else{
		$p = new Productos();
		$c = $_GET['id'];
		$todos = $p->getProducto($c);

		$v = new ModificarProducto();
		$v->productos = $todos;
		$v->render();
		}


class ValidacionProducto extends Exception{}



