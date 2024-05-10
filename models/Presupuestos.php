<?php
//		 models/Presupuestos.php

class Presupuestos {
	private $db;

//////////////////////////////////////////////////////////////////////////////////////////////////////////
	public function __construct() {
		$this->db = Database::getInstance();
	}
//////////////////////////////////////////////////////////////////////////////////////////////////////////
	public function getTodos(){
		$this->db->query("SELECT * FROM presupuestos
			ORDER BY id_presupuesto DESC");
		return $this->db->fetchAll();
	}
///////
		public function getDetallePresupuesto($id){

		if(!isset($id)) throw new ValidacionPresupuesto();
		if(!ctype_digit($id)) throw new ValidacionPresupuesto();



		$this->db->query("SELECT * FROM detalle_presupuesto
									WHERE $id = id_presupuesto");
		return $this->db->fetchAll();
	}
		public function getPresupuesto($id){

		if(!isset($id)) throw new ValidacionPresupuesto();
		if(!ctype_digit($id)) throw new ValidacionPresupuesto();


		$this->db->query("SELECT * FROM presupuestos
									WHERE $id = id_presupuesto");
		return $this->db->fetchAll();
	}
//////////////////////////////////////////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////////////////////////////////////////
		public function getPresupuestoDESC(){

		$this->db->query("SELECT id_presupuesto FROM presupuestos ORDER BY id_presupuesto DESC LIMIT 1");
		return $this->db->fetchAll();
	}
////////////////////////////////////////////////////////////////////////////////////////////////////////
	
//////////////////////////////////////////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////////////////////////////////////////
		

		public function setPresupuesto(	$id_presupuesto , $precio_total ){

		//			VALIDACIONESSS
		//	VALIDACION DE ID
			if(!is_numeric($id_presupuesto))throw new ValidacionPresupuesto("Error id 1");
			$numpre = $this->db->query("SELECT id_presupuesto FROM presupuestos");
			$numpre = $this->db->numRows();
			if($id_presupuesto < $numpre)throw new ValidacionPresupuesto("Error id 2");
	
		//	VALIDACION DE PRECIO
			if(!is_numeric($precio_total))throw new ValidacionPresupuesto("Error precio 1");// die("Ingrese solo Numeros");
			if($precio_total < 0)throw new ValidacionPresupuesto("Error precio 2");
			if($precio_total == 0)throw new ValidacionPresupuesto("Error precio 3");

		$this->db->query("INSERT INTO presupuestos (id_presupuesto, fecha, precio_total)
							VALUES ('$id_presupuesto',NOW(),'$precio_total')");
		
	}
//////////////////////////////////////////////////////////////////////////////////////////////////////////
}
class ValidacionPresupuesto extends Exception{}