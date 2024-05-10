
<!--	html/ListadoFacturas.<?php  ?> -->

<!DOCTYPE html>
<html>
<head>
	<title>Listado de Facturas</title>

	<link rel="stylesheet" type="text/css" href="static/css/ListaProducto.css">

</head>

<body>
	<h1 class="titulo">Listado de Facturas</h1>
	<div class="main-conteiner">
	

	<div class="barra-superior">
		<li><a href="home">Home</a></li>
		<li><a href="productos">Productos</a></li>
		<li><a href="categorias">Categorias</a></li>
				
			

	</div>
	
		<table class="list">
		
			<thead>
				<tr > <th>Id</th> <th>Cliente</th> 
					 <th>Metodo de pago</th> 
					  <th>Fecha</th> <th>Precio total</th> 
					  <th>Detalle</th>  <th>Imprimir Factura</th> 
				</tr>
			</thead>
			<tbody>
				<?php foreach($this->facturas as $p) { ?>
					<tr class="tr">

							        <td><?=$p['id_factura']?></td> 
									<td><?=$p['id_cliente']?></td> 
							        <td><?=$p['metodo_pago']?></td>
									<td><?=$p['fecha']?> </td>	
									<td><?=$p['precio_total']?> </td>	
									<td>										
										<center><a href="DetalleFacturas?id=<?=$p['id_factura']?>">
											<input name="fotoflecha" type="image" src="static/flecha.png" width="24" height="24" border="0">
										</a></center>
									</td>
									<td>										
										<center><a href="imprimir?id=<?=$p['id_factura']?>" target="_blank">
											<input name="fotoimpresora" type="image" src="static/impresora.png" width="24" height="24" border="0">
										</a></center>
									</td>
					</tr>
	</div>

				<?php } ?>
		
			</tbody>
	</table>

</body>
</html>