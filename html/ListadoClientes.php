
<!--	html/ListadoClientes.<?php  ?> -->

<!DOCTYPE html>
<html>
<head>
	<title>Listado de Clientes</title>

	<link rel="stylesheet" type="text/css" href="static/css/ListaProducto.css">

</head>

<body>
	<h1 class="titulo">Listado de Clientes</h1>
	<div class="main-conteiner">
	

	<div class="barra-superior">
		<li><a href="home">Home</a></li>
		<li><a href="productos">Productos</a></li>
		<li><a href="categorias">Categorias</a></li>
		<li><a href="alta-cliente">Agregar cliente</a></li>	
				
			

	</div>
	
		<table class="list">
		
			<thead>
				<tr > <th>Razon Social</th> <th>Cuil</th> 
					  <th>Direccion</th> <th>Cod.Postal</th> 
					  <th>Provincia</th> <th>Telefono</th> 
					  <th>Email</th>  <th>Modificar</th>
			</thead>
			<tbody>
				<?php foreach($this->clientes as $p) { ?>
					<tr class="tr">

							        <td><?=$p['razon_social']?></td> 
									<td><?=$p['cuil']?></td> </td>
									<td><?=$p['direccion']?> </td>	
									<td><?=$p['c_postal']?> </td>	
									<td><?=$p['provincia']?> </td>	
									<td><?=$p['telefono']?> </td>	
									<td><?=$p['email']?> </td>	
									<td>
										<center><a href="modificarcliente?id=<?=$p['id_cliente']?>">
									<input name="modificarclien" type="image" src="static/editar.svg" width="24" height="24" border="0">
											</a></center>
									</td>
											
					</tr>
	</div>

				<?php } ?>
		
			</tbody>
	</table>

</body>
</html>