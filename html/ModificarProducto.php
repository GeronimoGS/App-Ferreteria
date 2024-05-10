
<!--	html/ModificarProducto.php  ?> -->

<!DOCTYPE html>
<html>
<head>
	<title>Modificar Producto</title>

	<link rel="stylesheet" type="text/css" href="static/css/Modificarproducto.css">
	
</head>

<body>
	<h1 class="titulo">Modificar producto</h1>
	<div class="main-conteiner">
	

	<div class="barra-superior">
		<li><a href="home">Home</a></li>
		<li><a href="categorias">Categorias</a></li>
		<li><a href="claveproduc">Agregar producto</a></li>
		<li><a href="carrito">Carrito</a></li>
	</div>
			
		
		<table class="list">
		
			<thead>
				<tr > <th>Codigo</th> <th>Nombre</th> 
					  <th>Descripción</th> <th>Precio unitario</th> 
					
				</tr>
			</thead>
			<tbody>


				<?php foreach($this->productos as $p) { ?>
						<tr class="tr">
							        <td><?=$p['id_producto']?></td>
							        <td><?=$p['nombre']?></td> 
									<td><?=$p['descripcion']?></td>
									<td><?="$".$p['precio_unitario']?> </td>	
						</tr>

	</div>

				<?php } ?>
		
		
			</tbody>
	</table>
		<br/><br/>

	<br/><br/>

<form class="form"  action="" method="POST">

		
		<label  for="producto">(*)Nuevo nombre: </label>
		<textarea class="nom" type="text" name="nombre" value="<?=$p['nombre']?> " id="nombre"> <?=$p['nombre']?> </textarea>
		
			<br/><br/>	
		
		<label for="descripcion">(*)Nueva descripcion: </label>
		<textarea class="descrip"  type="text" maxlength="200" name="descripcion"  value="<?=$p['descripcion']?>" id="descripcion" > <?=$p['descripcion']?> </textarea>
		
		<br/><br/>
		<br/>
		<label for="monto">(*)Nuevo precio: </label>
		<input class="mon" type="number" maxlength="10" min="0"  value="<?=$p['precio_unitario']?>"  pattern="[0-9]+(\.[0-9][0-9]?)?" name="monto" id="monto" class="precio"></input>
		<br/><br/>

		<center><label>(*)Datos obligatorios</label>
		<br/><br/>
		<div class="center">
		<input class="center"  type="submit" onclick="return validarForm();" value="Modificar">


		<a href="productos"><input type="button" value="Cancelar" name=""></a>

		<div id="error"></div>
		</div>

	</form>


<script src="static/js/modificarproducto.js"></script>

</body>
</html>