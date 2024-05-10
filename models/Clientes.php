<?php
//		 models/Clientes.php

class Clientes {
	private $db;

//////////////////////////////////////////////////////////////////////////////////////////////////////////
	public function __construct() {
		$this->db = Database::getInstance();
	}
//////////////////////////////////////////////////////////////////////////////////////////////////////////
	public function getTodos(){
		$this->db->query("SELECT * FROM Clientes");
		return $this->db->fetchAll();
	}
////////////////////////////////////////////////////////////////////////////////////////////////////////
	public function getCliente($id){
		$this->db->query("SELECT * FROM Clientes
							WHERE id_cliente = $id");
		return $this->db->fetchAll();
	}	
//////////////////////////////////////////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////////////////////////////////////////
		

	public function setCliente(	$razon_social ,$cuil,$direccion,$c_postal,$provincia,$telefono,$email){

		//			VALIDACIONESSS
		//	VALIDACION DE RAZON SOCIAL
			if(!isset($razon_social))throw new ValidacionCliente();
			if(strlen($razon_social)> 100 )throw new ValidacionCliente("Error razon_social 1");
			if(strlen($razon_social)< 3 )throw new ValidacionCliente("Error razon_social 2");
			$razon_social = $this->db->escape($razon_social);
		//	VALIDACION DE CUIL

			if(!isset($cuil))throw new ValidacionCliente();
			if(!is_numeric($cuil))throw new ValidacionCliente("Error cuil 1");
			if(strlen($cuil)!= 11)throw new ValidacionCliente("Error cuil 2");
		
		//	VALIDACION DE DIRECCION
			if(!isset($direccion))throw new ValidacionCliente();
			if(strlen($direccion)> 100 )throw new ValidacionCliente("Error direc 1");
			if(strlen($direccion)< 3 )throw new ValidacionCliente("Error direc 2");
			$direccion = $this->db->escape($direccion);
		//	VALIDACION DE COD_POSTAL.

			if(!isset($c_postal))throw new ValidacionCliente();
			if(!is_numeric($c_postal))throw new ValidacionCliente("Error c_postal 1");
			if(strlen($c_postal) < 3)throw new ValidacionCliente("Error c_postal 2");
			if(strlen($c_postal) > 6)throw new ValidacionCliente("Error c_postal 3");
		
		//	VALIDACION DE PROVINCIA

			if(!isset($provincia))throw new ValidacionCliente();
			if(strlen($provincia) > 50 )throw new ValidacionCliente("Error prov 1");
			if(strlen($provincia) < 4 )throw new ValidacionCliente("Error prov 2");
			$provincia = $this->db->escape($provincia);
					
		//	VALIDACION DE TELEFONO.

			if(!isset($telefono))throw new ValidacionCliente();
			if(!is_numeric($telefono))throw new ValidacionCliente("Error telefono 1");
			if(strlen($telefono) < 8)throw new ValidacionCliente("Error telefono 2");
			if(strlen($telefono) > 13)throw new ValidacionCliente("Error telefono 3");
		//	VALIDACION DE EMAIL

			if(!isset($email))throw new ValidacionCliente();
			if(strlen($email)> 100 )throw new ValidacionCliente("Error email 1");
			if(strlen($email)< 10 )throw new ValidacionCliente("Error email 2");
			$email = $this->db->escape($email);


		$this->db->query("INSERT INTO clientes (razon_social, cuil, direccion, c_postal,provincia,telefono,email)
							VALUES ('$razon_social','$cuil','$direccion','$c_postal','$provincia','$telefono','$email')");
		
	}




//////////////////////////////////////////////////////////////////////////////////////////////////////////
		public function deleteCliente($id){

		if(!isset($id))throw new ValidacionCliente();
		if(!ctype_digit($id)) throw new ValidacionCliente();//die("error2");
		if(strlen($id) < 1 ) throw new ValidacionCliente();//die ("error3");
		$id = $this->db->escape($id);

		$this->db->query("DELETE FROM clientes
							WHERE id_cliente = '$id'");
	}


//////////////////////////////////////////////////////////////////////////////////////////////////////////
		public function modificarCliente($id,$razon,$cuil,$direccion,$cp,$provincia,$telefono,$email){
		
			//	VALIDACION DE RAZON SOCIAL
			if(!isset($razon))throw new ValidacionCliente();
			if(strlen($razon) < 3 )  throw new ValidacionCliente();//die("Nombre muy corto");
			if(strlen($razon) > 100)  throw new ValidacionCliente();//die("Nombre muy largo");
			$razon = $this->db->escape($razon);
			$razon = $razon;

		
			//	VALIDACION DE CUIL
			if(!isset($cuil))throw new ValidacionCliente();
			if(!ctype_digit($cuil)) throw new ValidacionCliente();//die("");
			if(strlen($cuil) < 11 ) throw new ValidacionCliente();// die("descripcion muy corta");
			if(strlen($cuil) > 11 ) throw new ValidacionCliente();// die("descripcion muy corta");
			$cuil = $this->db->escape($cuil);

			//	VALIDACION DE direc
			if(!isset($direccion))throw new ValidacionCliente();
			if(strlen($direccion) < 3 )  throw new ValidacionCliente();//die("Nombre muy corto");
			if(strlen($direccion) > 100)  throw new ValidacionCliente();//die("Nombre muy largo");
			$direccion = $this->db->escape($direccion);
			$direccion = $direccion;

			//	VALIDACION DE CP
			if(!isset($cp))throw new ValidacionCliente();
			if(!ctype_digit($cp)) throw new ValidacionCliente();//die("");
			if(strlen($cp) < 3 )  throw new ValidacionCliente();//die("Nombre muy corto");
			if(strlen($cp) > 6)  throw new ValidacionCliente();//die("Nombre muy largo");
			$cp = $this->db->escape($cp);
			$cp = $cp;
			// valdiacion de telefono

			if(!isset($id))throw new ValidacionCliente();
			if(!ctype_digit($telefono)) throw new ValidacionCliente();//die("");
			if(strlen($telefono) < 6 )  throw new ValidacionCliente();//die("Nombre muy corto");
			if(strlen($telefono) > 14)  throw new ValidacionCliente();//die("Nombre muy largo");
			$telefono = $this->db->escape($telefono);
			$telefono = $telefono;

			//validacion email

			if(!isset($email))throw new ValidacionCliente("Error email 1");
			if(strlen($email)> 100 )throw new ValidacionCliente("Error email 2");
			if(strlen($email)< 10 )throw new ValidacionCliente("Error email 3");
			$email = $this->db->escape($email);






			$this->db->query("UPDATE clientes 
								SET razon_social = '$razon' , cuil = '$cuil', direccion = '$direccion'  , 	c_postal = '$cp', provincia = '$provincia' , 	telefono = '$telefono', email = '$email'
								WHERE id_cliente = $id");


	}
//////////////////////////////////////////////////////////////////////////////////////////////////////////
}
class ValidacionCliente extends Exception{}