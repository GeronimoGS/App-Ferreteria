<?php
//		controllers/eliminarproducto.php

require '../fw/fw.php';
require '../models/Productos.php';
require '../views/EliminarProductoOk.php';


	if(isset($_GET['id'])){
		
		$p = new Productos();
		$c = $_GET['id'];
		$todos = $p->deleteProducto($c);

		$v = new EliminarProductoOk();
		$v->render();
		}else{
			
		}

	




