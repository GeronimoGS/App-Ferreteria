<?php
//		controllers/Fcaturas.php

require '../fw/fw.php';
require '../models/Facturas.php';
require '../views/ListadoFacturas.php';

		
		$p = new Facturas();
		$todos = $p->getTodos();
		
		$v = new ListadoFacturas();
		$v->facturas = $todos;
		$v->render();
	