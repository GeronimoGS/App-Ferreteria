
<!--	html/Busqueda.php  ?> -->

<!DOCTYPE html>
<html>
<head>
	<title>Listado de productos</title>

	<link rel="stylesheet" type="text/css" href="static/css/ListaProducto.css">

<link rel="stylesheet" type="text/css" href="static/css/Buscar.css">

</head>

<body>
	<h1 class="titulo">Listado de Productos</h1>
	<div class="main-conteiner">
	

	<div class="barra-superior">
		<li><a href="home">Home</a></li>
		<li><a href="productos">Productos</a></li>
		<li><a href="categorias">Categorias</a></li>
		<li><a href="claveproduc">Agregar producto</a></li>
		<li><a href="carrito">Carrito</a></li>
	</div>
			<center>
				
			<form action="buscar" method="POST" id="busc">
					
					<input type="text" id="buscar" maxlength="100" name="buscar">

					
					<input class="busq"  type="submit" onclick="return validarForm();" value="Buscar">
					<div id="error"></div>
				
			</form>

		


			</center>
		<table class="list">
		
			<thead>
				<tr > <th>Codigo</th> <th>Nombre</th> 
					  <th>Descripción</th> <th>Precio unitario</th> 
					   <th WIDTH="130" >Añadir al carrito</th>
					    <th WIDTH="130" >Modificar precio</th>
				</tr>
			</thead>
			<tbody>


			<?php foreach($this->productos as $p) { ?>
					<tr class="tr">
							        <td><?=$p['id_producto']?></td>
							        <td><?=$p['nombre']?></td> 
									<td><?=$p['descripcion']?></td>
									<td><?="$".$p['precio_unitario']?> </td>	
									
									<!--<td><a href="carrito?id=<?=$p['id_producto']?>"> <input class="boton" type="button" value="Añadir al carrito"></a></td> -->

									<td>										
										<center><a href="carrito?id=<?=$p['id_producto']?>">
											<input name="fotocarrito" type="image" src="static/carrito.png" width="24" height="24" border="0">
										</a></center>
									</td>
									<td>										
										<center><a href="modificar-producto?id=<?=$p['id_producto']?>">
											<input name="fotoeditar" type="image" src="static/editar.svg" width="24" height="24" border="0">
										</a></center>
									</td>
					</tr>
				
	</div>

				<?php }	?>
		
			</tbody>
	</table>


<script src="static/js/busquedaProducto.js"></script>


</body>
</html>