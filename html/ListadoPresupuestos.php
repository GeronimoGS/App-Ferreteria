
<!--	html/ListadoPresupuestos.<?php  ?> -->

<!DOCTYPE html>
<html>
<head>
	<title>Listado de Presupuestos</title>

	<link rel="stylesheet" type="text/css" href="static/css/ListaProducto.css">

</head>

<body>
	<h1 class="titulo">Listado de Presupuestos</h1>
	<div class="main-conteiner">
	

	<div class="barra-superior">
		<li><a href="home">Home</a></li>
		<li><a href="productos">Productos</a></li>
		<li><a href="categorias">Categorias</a></li>
				
			

	</div>
	
		<table class="list">
		
			<thead>
				<tr > <th>Id</th><
					  <th>Fecha</th> <th>Precio total</th> 
					  <th>Detalle</th>  <th>Imprimir Presupuesto</th> 
				</tr>
			</thead>
			<tbody>
				<?php foreach($this->presupuestos as $p) { ?>
					<tr class="tr">

							        <td><?=$p['id_presupuesto']?></td> 
									<td><?=$p['fecha']?> </td>	
									<td><?=$p['precio_total']?> </td>	
									<td>										
										<center><a href="detallepresupuesto?id=<?=$p['id_presupuesto']?>">
											<input name="fotoflecha" type="image" src="static/flecha.png" width="24" height="24" border="0">
										</a></center>
									</td>
									<td>										
										<center><a href="imprimir-presupuesto?id=<?=$p['id_presupuesto']?>" target="_blank">
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