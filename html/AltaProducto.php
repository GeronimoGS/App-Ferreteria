<?php
//				html/AltaProducto.php
?>
<!DOCTYPE html>
<html>
<head>
	<title>Alta de producto</title>

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
	</div>



	<form class="form" action="" method="POST">

		
		<label for="producto">(*)Categoria: </label>

		<select class="input" name="categoria" id="categoria"  >
				 <option value="" disabled selected>Selecciona una opción</option>
			<?php foreach($this->categoria as $e ) { ?>

				<option value="<?=$e['id_categoria'] ?>" >  <?=$e['nombre']?>	</option>
			<?php } ?>
		</select>
		<br/><br/>
		<label for="nombre">(*)Nombre de Producto: </label>
		<textarea type="text" maxlength="100" name="nombre" id="nombre" class="nombre" ></textarea>
		<br/><br/>
		
		<label for="descripcion">(*)Descripcion de Producto: </label>
		<textarea type="text" maxlength="200" name="descripcion" id="descripcion" class="descripcion"></textarea>
		<br/><br/>
		
		<label for="monto">(*)Monto de Producto: </label>
		<input type="number" maxlength="10" min="0" pattern="^[0-9]+" name="monto" id="monto" class="precio"></input>
		<br/><br/>

		<label>(*)Datos obligatorios</label>
		<div class="center">
		<input class="center"  type="submit" onclick="return validarForm();" value="Crear">
		
		<a href="productos"><input type="button" value="Cancelar" name=""></a>

		<div id="error"></div>
		</div>
	</form>


<script src="static/js/formproduc.js"></script>


</body>
</html>