
<!--	html/DetalleProducto.php  ?> -->
<!DOCTYPE html>
<html>
<head>
	<title>Detalle de productos</title>

	<link rel="stylesheet" type="text/css" href="static/css/DetalleProducto.css">

</head>
	
<body>
	<h1>Detalle de Producto</h1>

	
	<div class="barra-superior">
		<li><a href="home">Home</a></li>
		<li><a href="categorias">Categorias</a></li>
		<li><a href="alta-producto">Agregar producto</a></li>
		<li><a href="carrito">Carrito</a></li>
	</div>
	
<div class="main-conteiner">

	<table  class="list">
	
		<thead>
			<tr> 
				<th>Id</th><th>Nombre</th> <th>Categoria</th> 
				      <th>Descripcion</th><th>Precio</th> 
			</tr>
		</thead>

	<?php foreach($this->producto as $p) { ?>
		<tr class="tr">
						<td><?=$p['id_producto']?></td>
				        <td><?=$p['nombre']?></td> 
						<td><?=$p['id_categoria']?></td> </td>
						<td><?=$p['descripcion']?></td>
						<td><?="$".$p['precio_unitario']?> </td>	
						
		</tr>

	</div>

	<?php } ?>

	</table>
	<center><a href="carrito?id=<?=$p['id_producto']?>"> <input class="boton" type="button" value="Añadir al carrito de compras"></a></center>

	<center><a href="productos?c=<?=$p['id_categoria']?>"> <input class="boton" type="button" value="Volver">  </a></center>
	


</body>
</html>