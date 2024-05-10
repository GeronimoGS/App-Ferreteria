<?php
//		controllers/AltaCliente.php

require '../fw/fw.php';
require '../views/AltaCliente.php';
require '../models/Clientes.php';
require '../views/AltaClienteOk.php';


if(count($_POST) > 0 ){

	if(!isset($_POST['razon_social']))	  throw new ValidacionClientes("Error 1");
	if(!isset($_POST['cuil']))	  	      throw new ValidacionClientes("Error 2");
	if(!isset($_POST['direccion'])) 	  throw new ValidacionClientes("Error 3");
	if(!isset($_POST['codigo_postal']))	  throw new ValidacionClientes("Error 4");
	if(!isset($_POST['provincia']))		  throw new ValidacionClientes("Error 5");
	if(!isset($_POST['telefono']))		  throw new ValidacionClientes("Error 6");
	if(!isset($_POST['email']))		 	  throw new ValidacionClientes("Error 7"); 
	$c = new clientes();
	$c->setCliente($_POST['razon_social'],$_POST['cuil'],$_POST['direccion'],$_POST['codigo_postal'],$_POST['provincia'],$_POST['telefono'],$_POST['email']);
	$v = new AltaClienteOk();
  	$v->render();
}
else{
	$v = new AltaCliente();
	$v->render();
}

class ValidacionClientes extends Exception{}	