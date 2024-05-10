<?php
//		 models/Categorias.php

class Categorias {
	private $db;


	public function __construct() {
		$this->db = Database::getInstance();
	}

	public function getTodos(){
		$this->db->query("SELECT * FROM categorias");
		return $this->db->fetchAll();

	}
	
	public function setCategoria($nom){
		
			//	VALIDACION DE NOMBRE
			if(!isset($id))throw new ValidacionCategoria();
			if(strlen($nom) < 3 )  throw new ValidacionCategoria();//die("Nombre muy corto");
			if(strlen($nom) > 100)  throw new ValidacionCategoria();//die("Nombre muy largo");
			$nom = $this->db->escape($nom);
			$nombre = $nom;

		

			$this->db->query("INSERT INTO categorias (nombre)
								VALUES ('$nombre') ");

	}
	

}
class ValidacionCategoria extends Exception{}