<?php
//		controllers/eliminarproducto.php

require '../fw/fw.php';
require '../models/Clientes.php';
require '../views/EliminarClienteOk.php';


	if(isset($_GET['id'])){
		
		$p = new Clientes();
		$c = $_GET['id'];
		$todos = $p->deleteCliente($c);

		$v = new EliminarClienteOk();
		$v->render();
		}else{
			
		}

	




