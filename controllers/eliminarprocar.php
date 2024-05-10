<?php
//		controllers/eliminarprocar.php
session_start();
require '../fw/fw.php';
require '../models/Productos.php';
require '../views/carrito.php';
	
	
	if (isset($_SESSION['carrito'])) {
		
		if(isset($_GET['id'])){
			
			$borrar=$_GET['id'];
			
			$datos = $_SESSION['carrito'];
			
			unset($datos[$borrar]);

			$_SESSION['carrito']=$datos;
			}
		}
		header("location: carrito");


?>