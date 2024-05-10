<?php
//		controllers/AltaCategoria.php

require '../fw/fw.php';
require '../models/Categorias.php';
require '../views/AltaCategoria.php';
require '../views/AltaCategoriaOk.php';

$c = new Categorias();

if(count($_POST) > 0 ){
	
	
	if(!isset($_POST['nombre']))   throw new ValidacionCategorias("Error 1"); 
	
	$p = new Categorias();
	$p->setCategoria($_POST['nombre']);
	$v = new AltaCategoriaOk();
	$v->render();
}
else{

	$datos = $c->getTodos();
	$v = new AltaCategoria();
	$v->categoria = $datos ;
	$v->render();
}


class ValidacionCategorias extends Exception{}	