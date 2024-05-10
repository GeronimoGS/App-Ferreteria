<?php
//		 models/Detalle_Facturas.php

class Detalle_Facturas {
	private $db;

//////////////////////////////////////////////////////////////////////////////////////////////////////////
	public function __construct() {
		$this->db = Database::getInstance();
	}
//////////////////////////////////////////////////////////////////////////////////////////////////////////
	public function getTodos(){
		$this->db->query("SELECT * FROM detalle_factura");
		return $this->db->fetchAll();
	}
///////
//////////////////////////////////////////////////////////////////////////////////////////////////////////
		public function getIdFacturaDESC(){

		$this->db->query("SELECT id_factura FROM detalle_factura ORDER BY id_factura DESC LIMIT 1");
		return $this->db->fetchAll();
	}
////////////////////////////////////////////////////////////////////////////////////////////////////////
	public function getDetalles_Facturas(){

		$this->db->query("SELECT * FROM detalle_factura");
		return $this->db->fetchAll();
	}
//////////////////////////////////////////////////////////////////////////////////////////////////////////
	public function getDetalle_Factura($id){

		// VALIDACIONESSS

		if(!isset($id))throw new ValidacionDetalle("Error  1");
		if(!ctype_digit($id)) throw new ValidacionDetalle("error2");//die("error2");
		if(strlen($id) < 1 ) throw new ValidacionDetalle("error3");//die ("error3");
		

		$this->db->query("SELECT * FROM detalle_factura
							WHERE id_factura = '$id'");
		return $this->db->fetchAll();
	}
//////////////////////////////////////////////////////////////////////////////////////////////////////////
		

		public function setDetalleFactura($id_factura, $id, $nombre, $cantidad, $precio){


		// VALIDACIONESSS

				//	VALIDACION DE ID
			$numfac = 0;

			if(!isset($id_factura))throw new ValidacionDetalle("Error  1");
			if(!is_numeric($id_factura)) throw new ValidacionDetalle("Error id fac 2");
			$numfac =$this->db->query("SELECT id_factura FROM facturas");
			$numfac = $this->db->numRows();
			
			if($id_factura < $numfac) throw new ValidacionDetalle("Error id fac 3");


			//	VALIDACION DE ID PRODUCTO

	
			if(!isset($id))throw new ValidacionDetalle("Error  1");
			if(!ctype_digit($id)) throw new ValidacionDetalle("Error id producto 2");//
			$idmax = $this->db->query("SELECT id_producto FROM productos");
			$idmax = $this->db->numRows();
			if($id > $idmax)  throw new ValidacionDetalle("Error id producto 3");// 
			if($id < 0)	 throw new ValidacionDetalle("Error id producto 4");//

			

			//	VALIDACION DE NOMBRE

			if(!isset($nombre))throw new ValidacionDetalle("Error nom 1");
			if(strlen($nombre) < 3 ) throw new ValidacionDetalle("descripcion muy corta");// die("descripcion muy corta");
			if(strlen($nombre) > 100)  throw new ValidacionDetalle("descripcion muy larga");//die("descripcion muy larga");
			$nombre = $this->db->escape($nombre);

			//	VALIDACION DE CANTIDAD

			if(!isset($cantidad))throw new ValidacionDetalle("Error cant 1");
			if(!is_numeric($cantidad)) throw new ValidacionDetalle("Ingrese solo Numeros");// die("Ingrese solo Numeros");
			if($cantidad < 0) throw new ValidacionDetalle("Precio muy bajo");// die ("Precio muy bajo");
			
			//  VALIDACION DE PRECIO

			if(!isset($precio))throw new ValidacionDetalle("Error  precio 1");
			if(!is_numeric($precio)) throw new ValidacionDetalle("Ingrese solo Numeros");// die("Ingrese solo Numeros");
			if($precio < 0) throw new ValidacionDetalle();
			if($precio == 0) throw new ValidacionDetalle();
			
		$subtotal = $precio*$cantidad;
		
		$this->db->query("INSERT INTO detalle_factura (num_detalle,id_factura, id_producto, nombre, cantidad, precio, subtotal)
							VALUES ('$id_factura','$id_factura','$id','$nombre','$cantidad','$precio','$subtotal')");
		
	}
//////////////////////////////////////////////////////////////////////////////////////////////////////////
}

class ValidacionDetalle extends Exception{}