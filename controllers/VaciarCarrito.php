<?php
// 			controllers/VaciarCarrito.php
session_start();

require '../fw/fw.php';
require '../views/VaciarCarrito.php';
		
	if(!$_SESSION['carrito']) throw new ValidacionCarrito("Error Carrito");	

 	unset($_SESSION['carrito']);

 	header("location:carrito" );

 

class ValidacionCarrito extends Exception{}

 ?>