<?php
//		controllers/listacategorias.php

require '../fw/fw.php';
require '../models/Categorias.php';
require '../Views/ListaCategoria.php';


$p = new Categorias();


$datos = $p->getTodos();

$v = new ListaCategoria();
$v->Categorias = $datos;
$v->render();