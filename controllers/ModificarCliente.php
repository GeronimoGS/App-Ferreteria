<?php
//		controllers/ModificaarProducto.php

require '../fw/fw.php';
require '../models/Clientes.php';
require '../views/ModificarClienteOk.php';
require '../views/ModificarCliente.php';



	
		
		
	
		if(count($_POST) > 0 ){
			echo($_POST['cuil']);
			if(!isset($_GET['id']))	  		 class ValidacionModifClie extends Exception{} 
			if(!isset($_POST['razon']))		 class ValidacionModifClie extends Exception{} 
			if(!isset($_POST['cuil'])) 		 class ValidacionModifClie extends Exception{} 
			if(!isset($_POST['direccion']))	 class ValidacionModifClie extends Exception{} 
			if(!isset($_POST['cp']))    	 class ValidacionModifClie extends Exception{} 
			if(!isset($_POST['provincia']))	 class ValidacionModifClie extends Exception{}
			if(!isset($_POST['telefono']))   class ValidacionModifClie extends Exception{} 
			if(!isset($_POST['email']))		 class ValidacionModifClie extends Exception{}
			$c = $_GET['id'];
			$p = new Clientes();
			$p->modificarCliente($c, $_POST['razon'],$_POST['cuil'],$_POST['direccion'], $_POST['cp'],$_POST['provincia'],$_POST['telefono'], $_POST['email']);
			
			echo "hokkkk";
			$v = new ModificarClienteOk();
			$v->render();
		}
		else{
		$p = new Clientes();
		$c = $_GET['id'];
		$todos = $p->getCliente($c);

		$v = new ModificarCliente();
		$v->clientes = $todos;
		$v->render();
		}



class ValidacionModifClie extends Exception{}


