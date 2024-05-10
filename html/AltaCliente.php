<?php
//				html/AltaCliente.php
?>
<!DOCTYPE html>
<html>
<head>
	<title>Alta de cliente</title>

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

		
		<label for="razon_social">(*)Razon Social: </label>
		<input type="text" name="razon_social" id="razon_social" class="input" >
			<br/><br/>

		<label for="cuil">(*)Cuil: </label>
		<input type="text" maxlength="11" minlength="11" pattern="^[0-9]+" name="cuil" id="cuil" class="input" >
		<br/><br/>
		<label for="direccion">(*)Direccion: </label>
		<input type="text" name="direccion" id="direccion" class="input" >

		<br/><br/>
		<label for="Codigo_postal">(*)Codigo Postal: </label>
		<input type="text" pattern="^[0-9]+" maxlength="6" name="codigo_postal" id="codigo_postal" class="input" >
		
		<br/><br/>
		<label for="Provincia">(*)Provincia: </label>
		<select  name="provincia" id="provincia" class="input">
				<option value="0" disabled selected>Seleccione una opcion</option>				
				<option value="CABA">CABA</option>
				<option value="Buenos Aires">Buenos Aires</option>
				<option value="Catamarca">Catamarca</option>
				<option value="Chaco">Chaco</option>
				<option value="Chubut">Chubut</option>
				<option value="Cordoba">Cordoba</option>
				<option value="Corrientes">Corrientes</option>
				<option value="Entre Rios">Entre Rios</option>
				<option value="Formosa">Formosa</option>
				<option value="Jujuy">Jujuy</option>
				<option value="La Pampa">La Pampa</option>
				<option value="La Rioja">La Rioja</option>		
				<option value="Mendonza">Mendonza</option>
				<option value="Misiones">Misiones</option>
				<option value="Neuquen">Neuquen</option>
				<option value="Rio Negro">Rio Negro</option>
				<option value="Salta">Salta</option>
				<option value="San Juan">San Juan</option>
				<option value="San Luis">San Luis</option>
				<option value="Santa Cruz">Santa Cruz</option>
				<option value="Santa Fe">Santa Fe</option>
				<option value="Santiago del Estero">Santiago del Estero</option>
				<option value="Tucuman">Tucuman</option>
		</select>
	

		<br/><br/>
		<label for="Telefono">(*)Telefono: </label>
		<input type="text" name="telefono" pattern="^[0-9]+" maxlength="13" id="telefono" class="input">

		<br/><br/>
		<label for="monto">(*)Email: </label>
		<input type="text" name="email" id="email" class="input">
		

		
		<br/><br/>
		<div>(*) Campos obligatorios</div>
		<div class="center">
		<input class="center"  type="submit" onclick="return validarForm();" value="Crear">

		<a href="clientes"><input type="button" value="Cancelar" name=""></a>
		
		<div id="error"></div>
		</div>
	</form>

<script src="static/js/formclien.js"></script>

</body>
</html>