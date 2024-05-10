<?php
//		controllers/Clientes.php

require '../fw/fw.php';
require '../models/Clientes.php';
require '../views/ListadoClientes.php';

		
		$p = new Clientes();
		$todos = $p->getTodos();
		
		$v = new ListadoClientes();
		$v->clientes = $todos;
		$v->render();
	