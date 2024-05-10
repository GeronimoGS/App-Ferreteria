<?php
//				html/AltaCategoria.php
?>
<!DOCTYPE html>
<html>
<head>
	<title>Alta de Categoria</title>

<link rel="stylesheet" type="text/css" href="static/css/AltaProducto.css">



</head>
<body>
			<div class="logo">
				<img src="static/css/logo.png" alt="">
			</div>


	<div class="barra-superior">
				<li><a href="home">Home</a></li>
				<li><a href="productos">Productos</a></li>
				<li><a href="categorias">Categorias</a></li>
				<li><a href="clientes">Clientes</a></li>		
	</div>


	<form class="form" action="" method="POST">

		
		<label for="nombre">(*)Nombre: </label>
		<input type="text" name="nombre" id="nombre" class="input" >
			<br/><br/>

		
		<br/><br/>
		<div>(*) Campos obligatorios</div>
		<div class="center">
		<input class="center"  type="submit" onclick="return validarForm();" value="Crear">

		<a href="categorias"><input type="button" value="Cancelar" name=""></a>

		<div id="error"></div>
		</div>
	</form>

<script src="static/js/formcate.js"></script>

</body>
</html>