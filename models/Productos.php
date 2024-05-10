<?php
//		 models/Productos.php

class Productos {
	private $db;

//////////////////////////////////////////////////////////////////////////////////////////////////////////
	public function __construct() {
		$this->db = Database::getInstance();
	}
//////////////////////////////////////////////////////////////////////////////////////////////////////////
	public function getTodos(){
		$this->db->query("SELECT * FROM productos
							ORDER BY nombre");
		return $this->db->fetchAll();
	}
//////////////////////////////////////////////////////////////////////////////////////////////////////////
	public function getProductosxCat($id){
		
				// VALIDACIONESSS
		if(!isset($id)) throw new ValidacionProductos();
		if(!ctype_digit($id)) throw new ValidacionProductos();//die("error2");
		


		$this->db->query("SELECT * FROM productos
							WHERE id_categoria = '$id' AND estado = 0
							ORDER BY nombre");
		return $this->db->fetchAll();
	}
//////////////////////////////////////////////////////////////////////////////////////////////////////////
	public function getProductos(){

		$this->db->query("SELECT * FROM productos
							WHERE estado = 0
							ORDER BY nombre");
		return $this->db->fetchAll();
	}
//////////////////////////////////////////////////////////////////////////////////////////////////////////
	public function BuscarProducto($buscar){


		//               VALIDACIONES
			if(!isset($buscar)) throw new ValidacionProductos();
			if(strlen($buscar) > 100)  throw new ValidacionProductos();//die("Nombre muy largo");
			$buscar = $this->db->escape($buscar);
			$buscar = $this->db->escapeWildcards($buscar);



		$this->db->query("SELECT * FROM productos
							WHERE nombre LIKE '%$buscar%'
							ORDER BY nombre");
		return $this->db->fetchAll();
	}
//////////////////////////////////////////////////////////////////////////////////////////////////////////
	public function getProducto($id){

		
		if(!ctype_digit($id)) throw new ValidacionProductos();//die("error2");
		if(strlen($id) < 1 ) throw new ValidacionProductos();//die ("error3");
			
		
		$this->db->query("SELECT * FROM productos
							WHERE id_producto = '$id'
							ORDER BY nombre");
		return $this->db->fetchAll();
	}




//////////////////////////////////////////////////////////////////////////////////////////////////////////
	public function deleteProducto($id){

		
		if(!ctype_digit($id)) throw new ValidacionProductos();//die("error2");
		if(strlen($id) < 1 ) throw new ValidacionProductos();//die ("error3");
				// VALIDACIONESSS
		// FALTA VALIDAR
		$id = $id;
		$this->db->query("UPDATE productos
							SET estado = 1 
							WHERE id_producto = '$id'");
	}

public function setProducto($nom,$id_cat,$descrip,$monto){
		
			//	VALIDACION DE NOMBRE
			if(strlen($nom) < 3 )  throw new ValidacionProductos();//die("Nombre muy corto");
			if(strlen($nom) > 100)  throw new ValidacionProductos();//die("Nombre muy largo");
			$nom = $this->db->escape($nom);
			$nombre = $nom;

			//	VALIDACION DE CATEOGORIA

	

			if(!ctype_digit($id_cat)) throw new ValidacionProductos();//die("Error Categoria 1");
			$cantidad_cat = $this->db->query("SELECT id_categoria 
											FROM Categorias");

			$cantidad_cat = $this->db->numRows($cantidad_cat);

			if($id_cat > $cantidad_cat)  throw new ValidacionProductos();// die("Error Categoria 2");
			if($id_cat < 0)	 throw new ValidacionProductos();//	   die("Error Categoria 3");

			$id = $id_cat;


			//	VALIDACION DE DESCRIPCION

			if(strlen($descrip) < 3 ) throw new ValidacionProductos();// die("descripcion muy corta");
			if(strlen($descrip) > 100)  throw new ValidacionProductos();//die("descripcion muy larga");
			$descrip = $this->db->escape($descrip);

			//	VALIDACION DE PRECIO

			if(!ctype_digit($monto)) throw new ValidacionProductos();// die("Ingrese solo Numeros");
			if(strlen($monto) < 0.5) throw new ValidacionProductos();// die ("Precio muy bajo");
			if(strlen($monto) > 9999999999) throw new ValidacionProductos();// die("Precio muy alto");

			$precio = $monto;
		

			$this->db->query("INSERT INTO productos (nombre,id_categoria,descripcion,precio_unitario)
								VALUES ('$nombre','$id', '$descrip','$monto') ");

	}
//////////////////////////////////////////////////////////////////////////////////////////////////////////
		public function modificarProducto($id,$nom,$descrip,$monto){
		
			//	VALIDACION DE NOMBRE
			if(strlen($nom) < 3 )  throw new ValidacionProductos();//die("Nombre muy corto");
			if(strlen($nom) > 100)  throw new ValidacionProductos();//die("Nombre muy largo");
			$nom = $this->db->escape($nom);
			$nombre = $nom;


			//	VALIDACION DE DESCRIPCION

			if(strlen($descrip) < 1 ) throw new ValidacionProductos();// die("descripcion muy corta");
			if(strlen($descrip) > 100)  throw new ValidacionProductos();//die("descripcion muy larga");
			$descrip = $this->db->escape($descrip);

			//	VALIDACION DE PRECIO

			
			//if(!ctype_digit($monto)) throw new ValidacionProductos();// die("Ingrese solo Numeros");
			
			$monto= str_replace(",",".",$monto);
			if(strlen($monto) < 0.5) throw new ValidacionProductos();// die ("Precio muy bajo");
			if(strlen($monto) > 9999999999) throw new ValidacionProductos();// die("Precio muy alto");

			$precio = $monto;
		

			$this->db->query("UPDATE productos 
								SET nombre = '$nombre' , descripcion = '$descrip', precio_unitario = '$precio' 
								WHERE id_producto = $id");


	}

}

class ValidacionProductos extends Exception {}