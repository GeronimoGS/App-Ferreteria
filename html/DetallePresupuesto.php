
<!--	html/DetalleFacturas.<?php  ?> -->

<!DOCTYPE html>
<html>
<head>
	<title>Listado de Detalle</title>

	<link rel="stylesheet" type="text/css" href="static/css/ListaProducto.css">

</head>

<body>
	<h1 class="titulo">Detalle de Presupuesto</h1>
	<div class="main-conteiner">
	

	<div class="barra-superior">
		<li><a href="home">Home</a></li>
		<li><a href="productos">Productos</a></li>
		<li><a href="categorias">Categorias</a></li>

		<li><a href="presupuestos">Presupuestos</a></li>
				
			

	</div>
	
		<table class="list">
		
			<thead>
				<tr > <th>Id</th> <th>Productos</th> 
					  <th>Cantidad</th> <th>Precio</th> 
					  <th>Subtotal</th> 
				</tr>
			</thead>
			<tbody>
				<?php foreach($this->presupuesto as $p) { ?>
					<tr class="tr">

							        <td><?=$p['id_producto']?></td> 
									<td><?=$p['nombre']?></td> </td>
									<td><?=$p['cantidad']?> </td>	
									<td><?=$p['precio']?> </td>	
									<td><?=$p['subtotal']?> </td>	
									

									
					</tr>
	</div>

				<?php } ?>
		
			</tbody>
	</table>

	<table class="list">
		<tr>
			<td>
				<center><a href="imprimir-presupuesto?id=<?=$p['id_presupuesto']?>"  target="_blank">
				<input name="fotoimpresora" type="image" src="static/impresora.png"  width="24" height="24" border="0"></a>
				</center>
			</td>
		</tr>
	</table>

</body>
</html>