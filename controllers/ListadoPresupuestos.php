<?php
//		controllers/Fcaturas.php

require '../fw/fw.php';
require '../models/Presupuestos.php';
require '../views/ListadoPresupuestos.php';

		
		$p = new Presupuestos();
		$todos = $p->getTodos();
		
		$v = new ListadoPresupuestos();
		$v->presupuestos = $todos;
		$v->render();
	