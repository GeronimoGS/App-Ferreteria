
<!--	html/ListaCategorias.php  ?> -->

<!DOCTYPE html>
<html>
<head>
	<title>Lista de Categorias</title>

	<link rel="stylesheet" type="text/css" href="static/css/ListaCategorias.css">

</head>
	
<body>
	<h1>Lista de Categorias</h1>
<div class="main-conteiner">


	<div class="barra-superior">
		<li><a href="home">Home</a></li>
		<li><a href="productos">Productos</a></li>
		<li><a href="alta-categoria">Agregar categoria</a></li>
		<li><a href="carrito">Carrito</a></li>
	</div>

	<table  class="list">	
		<thead>
			<tr > 
				<th>Nombre</th> 
				    
			</tr>
		</thead>

	<?php foreach($this->Categorias as $p) { ?>
		<tr class="tr">
				        <td> <a href="productos?c=<?=$p['id_categoria']?>"><?=$p['nombre']?></a></td> 	
		</tr>
	</div>

	<?php } ?>

	</table>
	
	
		

</body>
</html>