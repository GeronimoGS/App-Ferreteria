<?php
//		 models/detalle_presupuesto.php

class Detalle_Presupuesto {
	private $db;

//////////////////////////////////////////////////////////////////////////////////////////////////////////
	public function __construct() {
		$this->db = Database::getInstance();
	}
//////////////////////////////////////////////////////////////////////////////////////////////////////////
	public function getTodos(){
		$this->db->query("SELECT * FROM detalle_presupuesto");
		return $this->db->fetchAll();
	}
///////
//////////////////////////////////////////////////////////////////////////////////////////////////////////
		public function getIdPresupuestoDESC(){

		$this->db->query("SELECT id_presupuesto FROM detalle_presupuesto ORDER BY id_presupuesto DESC LIMIT 1");
		return $this->db->fetchAll();
	}
////////////////////////////////////////////////////////////////////////////////////////////////////////
	public function getDetalles_Presupuestos(){

		$this->db->query("SELECT * FROM detalle_presupuesto");
		return $this->db->fetchAll();
	}
//////////////////////////////////////////////////////////////////////////////////////////////////////////
	public function getDetallePresupuesto($id){

		// VALIDACIONESSS
		if(!isset($id))throw new ValidacionDetalle("Error 1");
		if(!ctype_digit($id)) throw new ValidacionDetalle("error2");//die("error2");
		if(strlen($id) < 1 ) throw new ValidacionDetalle("error3");//die ("error3");
		

		$this->db->query("SELECT * FROM detalle_presupuesto
							WHERE id_presupuesto = '$id'");
		return $this->db->fetchAll();
	}
//////////////////////////////////////////////////////////////////////////////////////////////////////////
		

		public function setDetalle_Presupuesto($id_presupuesto, $id, $nombre, $cantidad, $precio){


		// VALIDACIONESSS

				//	VALIDACION DE ID
			$numpre = 0;
			if(!isset($id_presupuesto))throw new ValidacionDetalle("Error id pre 1");
			if(!is_numeric($id_presupuesto)) throw new ValidacionDetalle("Error id pre 2");
			$numpre =$this->db->query("SELECT id_presupuesto FROM Presupuestos");
			$numpre = $this->db->numRows();
			
			if($id_presupuesto < $numpre) throw new ValidacionDetalle("Error id fac 3");


			//	VALIDACION DE ID PRODUCTO

	

			if(!isset($id))throw new ValidacionDetalle("Error id producto 1");
			if(!ctype_digit($id)) throw new ValidacionDetalle("Error id producto 2");//die("Error Categoria 1");
			$idmax = $this->db->query("SELECT id_producto FROM productos");
			$idmax = $this->db->numRows();
			if($id > $idmax)  throw new ValidacionDetalle("Error id producto 3");// die("Error Categoria 2");
			if($id < 0)	 throw new ValidacionDetalle("Error id producto 4");//	   die("Error Categoria 3");

			

			//	VALIDACION DE NOMBRE

			if(!isset($nombre))throw new ValidacionDetalle("Error descripcion 1");
			if(strlen($nombre) < 3 ) throw new ValidacionDetalle("descripcion muy corta");// die("descripcion muy corta");
			if(strlen($nombre) > 100)  throw new ValidacionDetalle("descripcion muy larga");//die("descripcion muy larga");
			$nombre = $this->db->escape($nombre);

			//	VALIDACION DE CANTIDAD

			if(!isset($cantidad))throw new ValidacionDetalle("Error cant 1");
			if(!is_numeric($cantidad)) throw new ValidacionDetalle("Ingrese solo Numeros");// die("Ingrese solo Numeros");
			if($cantidad < 0) throw new ValidacionDetalle("Precio muy bajo");// die ("Precio muy bajo");
			
			//  VALIDACION DE PRECIO

			if(!isset($precio))throw new ValidacionDetalle("Error precio 1");
			if(!is_numeric($precio)) throw new ValidacionDetalle("Ingrese solo Numeros");// die("Ingrese solo Numeros");
			if($precio < 0) throw new ValidacionDetalle();
			if($precio == 0) throw new ValidacionDetalle();
			
		$subtotal = $precio*$cantidad;
				
		$this->db->query("INSERT INTO detalle_presupuesto (num_detalle,id_presupuesto, id_producto, nombre, cantidad, precio, subtotal)
													VALUES ('$id_presupuesto','$id_presupuesto','$id','$nombre','$cantidad','$precio','$subtotal')");
		
	}
//////////////////////////////////////////////////////////////////////////////////////////////////////////
}

class ValidacionDetalle extends Exception{}