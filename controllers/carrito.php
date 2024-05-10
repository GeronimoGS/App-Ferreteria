<?php
//		controllers/carrito.php
session_start();
require '../fw/fw.php';
require '../models/Productos.php';
require '../views/carrito.php';
	

	
	if (isset($_SESSION['carrito'])) {
		if(isset($_GET['id'])){
		$datos=$_SESSION['carrito'];
		$encontro = false;
		$numero=0;

		for ($i=0; $i<count($datos) ; $i++) { 
			if($datos[$i]['Id_producto']==$_GET['id']){
				$encontro=true;
				$numero=$i;
			}
		}
		if($encontro==true){
			$datos[$numero]['Cantidad'] = $datos[$numero]['Cantidad']+1;
			$_SESSION['carrito'] = $datos;
		}else{

		$id=0;
				$nombre="";
				$id_categoria=0;
				$descripcion="";
				$precio=0;
			$p = new Productos();
			$producto = $p->getProducto($_GET['id']);	
			

		foreach ($producto as $p => $value) {
			
				$id = $value['id_producto'];
				$nombre = $value['nombre'];
				$id_categoria = $value['id_categoria'];
				$descripcion = $value['descripcion'];
				$precio = $value['precio_unitario'];
			}
			
			$datosNuevos=array( 'Id_producto'=>$id,
							'Nombre'=>$nombre,
							'Id_categoria'=>$id_categoria,
							'Descripcion'=>$descripcion,
							'Precio'=>$precio,
							'Cantidad'=>1);
			array_push($datos, $datosNuevos);
			$_SESSION['carrito']=$datos;
		}

}



	}else{
		if (isset($_GET['id'])) {
			$id=0;
			$nombre="";
			$id_categoria=0;
			$descripcion="";
			$precio=0;
		$p = new Productos();
		$producto = $p->getProducto($_GET['id']);	
		

	foreach ($producto as $p => $value) {
		
			$id = $value['id_producto'];
			$nombre = $value['nombre'];
			$id_categoria = $value['id_categoria'];
			$descripcion = $value['descripcion'];
			$precio = $value['precio_unitario'];
		}
		
		$datos[]=array( 'Id_producto'=>$id,
						'Nombre'=>$nombre,
						'Id_categoria'=>$id_categoria,
						'Descripcion'=>$descripcion,
						'Precio'=>$precio,
						'Cantidad'=>1);
		$_SESSION['carrito'] = $datos;
		$datos=$_SESSION['carrito'];
		}

	}


	$v = new carrito();
if (isset($_SESSION['carrito'])) {
	$v->producto = $_SESSION['carrito'];
	}
	$v->render();
	

?>