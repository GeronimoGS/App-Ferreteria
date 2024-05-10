
<!--	html/ListadoProductos.php  ?> -->

<!DOCTYPE html>
<html>
<head>
	<title>Listado de productos</title>

	<link rel="stylesheet" type="text/css" href="static/css/ListaProducto.css">
	<link rel="stylesheet" type="text/css" href="static/css/Buscar.css">
	<link rel="stylesheet" type="text/css" href="static/css/jquery.dataTables.min.css">
	<script type="text/javascript" src="static/js/jquery-3.5.1.min.js" ></script>
	<script type="text/javascript" src="static/js/jquery.dataTables.min.js"></script>
	<script type="text/javascript">
	$(document).ready( function () {
    $('#tabla').DataTable();
	} );
	</script>
</head>

<body>
	<h1 class="titulo">Listado de Productos</h1>
	<div class="main-conteiner">
	

	<div class="barra-superior">
		<li><a href="home">Home</a></li>
		<li><a href="categorias">Categorias</a></li>
		<li><a href="claveproduc">Agregar producto</a></li>
		<li><a href="carrito">Carrito</a></li>
	</div>
			
		<!--	<center >
					<form  action="buscar" method="POST" id="busc">
					
					<input type="text" id="buscar" maxlength="100" name="buscar" placeholder="Buscar producto...">

					<input class="busq" type="submit"  onclick="return validarForm();" value="Buscar" >
					<div id="error"></div>

				</form>
			</center> -->
			
		<table id="tabla" class="display">

		
			<thead>
				<tr > <th>Nombre</th> 
					  <th>Descripción</th> <th>Precio unitario</th> 
					   <th>Añadir al carrito</th>
					    <th>Modificar</th> 
					    <th>Eliminar</th>
					
				</tr>
			</thead>
			<tbody>


				<?php foreach($this->productos as $p) {  ?>
						<tr class="tr">
							        
							        <td class="nombre"><?=$p['nombre']?></td> 
									<td class="descrip" ><?=$p['descripcion']?></td>
									<td class="precio" ><?="$".$p['precio_unitario']?> </td>	
									
									<!--<td><a href="carrito?id=<?=$p['id_producto']?>"> <input class="boton" type="button" value="Añadir al carrito"></a></td> -->

									<td class="carrito">										
										<center><a href="carrito?id=<?=$p['id_producto']?>">
											<input name="fotocarrito" type="image" src="static/carrito.png" width="24" height="24" border="0">
										</a></center>
									</td>
									<td class="carrito">										
										<center><a href="clave-modificar-producto?id=<?=$p['id_producto']?>">
											<input name="fotoeditar" type="image" src="static/editar.svg" width="24" height="24" border="0">
										</a></center>
									</td>
									<td class="carrito">
									
										<center><a href="eliminarproducto?id=<?=$p['id_producto']?>" onclick="return confirm('¿Confirme para borrar?')">
									<input name="eliminarproduc" type="image" src="static/eliminar.png" width="24" height="24" border="0">
											</a></center>
									</td>


					</tr>

					
	</div>

				<?php } ?>
		
			</tbody>
	</table>


<script src="static/js/busquedaProducto.js"></script>



</body>
</html>