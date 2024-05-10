<?php
//		 models/Facturas.php

class Facturas {
	private $db;

//////////////////////////////////////////////////////////////////////////////////////////////////////////
	public function __construct() {
		$this->db = Database::getInstance();
	}
//////////////////////////////////////////////////////////////////////////////////////////////////////////
	public function getTodos(){
		$this->db->query("SELECT * FROM facturas
			ORDER BY id_factura DESC");
		return $this->db->fetchAll();
	}
///////
		public function getDetalleFactura($id){

		if(!isset($id)) throw new ValidacionFacturas();
		if(!ctype_digit($id)) throw new ValidacionFacturas();


		$this->db->query("SELECT * FROM detalle_factura
									WHERE $id = id_factura");
		return $this->db->fetchAll();
	}
		public function getFactura($id){

		if(!isset($id)) throw new ValidacionFacturas();
		if(!ctype_digit($id)) throw new ValidacionFacturas();


		$this->db->query("SELECT * FROM facturas
									WHERE $id = id_factura");
		return $this->db->fetchAll();
	}
//////////////////////////////////////////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////////////////////////////////////////
		public function getFacturaDESC(){

		$this->db->query("SELECT id_factura FROM facturas ORDER BY id_factura DESC LIMIT 1");
		return $this->db->fetchAll();
	}
////////////////////////////////////////////////////////////////////////////////////////////////////////
	
//////////////////////////////////////////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////////////////////////////////////////
		

		public function setFactura(	$id_factura, $metodopago, $id_cliente, $precio_total ){

		//			VALIDACIONESSS
		//	VALIDACION DE ID
			if(!isset($id_factura))throw new ValidacionFacturas("Error id 1");
			if(!is_numeric($id_factura))throw new ValidacionFacturas("Error id 2");
			$numfac = $this->db->query("SELECT id_factura FROM facturas");
			$numfac = $this->db->numRows();
			if($id_factura < $numfac)throw new ValidacionFacturas("Error id 3");
		//	VALIDACION ID CLIENT
			if(!isset($id_cliente))throw new ValidacionFacturas("Error id cli 1");
			if(!is_numeric($id_cliente))throw new ValidacionFacturas("Error id cli 2");
		

		//	VALIDACION DE PRECIO
			if(!is_numeric($precio_total))throw new ValidacionFacturas("Error precio 1");// die("Ingrese solo Numeros");
			if($precio_total < 0)throw new ValidacionFacturas("Error precio 2");
			if($precio_total == 0)throw new ValidacionFacturas("Error precio 3");
			//    Validar metodo pago
			if(strlen($metodopago) < 3 )  throw new ValidacionFacturas();//die("Nombre muy corto");
			if(strlen($metodopago) > 15)  throw new ValidacionFacturas();//die("Nombre muy largo");
			$metodopago = $this->db->escape($metodopago);
			$metodopago = $metodopago;

		$this->db->query("INSERT INTO facturas (id_factura, metodo_pago, id_cliente, fecha, precio_total)
							VALUES ('$id_factura', '$metodopago','$id_cliente',NOW(),'$precio_total')");
		
	}
//////////////////////////////////////////////////////////////////////////////////////////////////////////
}
class ValidacionFacturas extends Exception{}