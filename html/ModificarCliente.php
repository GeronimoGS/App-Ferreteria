
<!--	html/ModificarProducto.php  ?> -->

<!DOCTYPE html>
<html>
<head>
	<title>Modificar Cliente</title>

	<link rel="stylesheet" type="text/css" href="static/css/Modificarcliente.css">
	
</head>

<body>
	<h1 class="titulo">Modificar Cliente</h1>
	<div class="main-conteiner">
	

	<div class="barra-superior">
		<li><a href="home">Home</a></li>
		<li><a href="productos">Productos</a></li>
		<li><a href="categorias">Categorias</a></li>
		<li><a href="clientes">Clientes</a></li>
		<li><a href="carrito">Carrito</a></li>
	</div>
			
		
		<table class="list">
		
			<thead>
				<tr > <th>Razon social</th> <th>Cuil/t</th> 
					  <th>Direccion</th> <th>C_postal</th>
					  <th>Provincia</th> <th>Telefono</th>
					  <th>email</th> 
					
				</tr>
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
						</tr>

	</div>

				<?php } ?>
		
		
			</tbody>
	</table>
		<br/><br/>

	<br/><br/>

<form class="form"  action="" method="POST">

		
		<label  for="razon">(*)Nueva razon social: </label>
		<textarea class="razon" type="text" name="razon" value="<?=$p['razon_social']?> " id="razon"> <?=$p['razon_social']?> </textarea>
		
			<br/><br/>	
		
		<label for="cuil">(*)Nuevo cuil/t: </label>
		<input class="cuil" type="text"  id="cuil" name="cuil" maxlength="11" min="11" pattern="[0-9!?-]{11,11}" [0-9!?-]{8,12} value="<?=$p['cuil']?>" ></input>
		
		<br/><br/>

		<label for="direc">(*)Nueva direccion: </label>
		<textarea class="direc" type="text" maxlength="100" min="0"  value="<?=$p['direccion']?>" name="direccion" id="direccion" > <?=$p['direccion']?> </textarea>
		<br/><br/>

		<label for="cp">(*)Nuevo codigo postal: </label>
		<input class="cp" type="text" maxlength="6" min="4"  value="<?=$p['c_postal']?>" pattern="^[0-9]+" name="cp" id="cp"></input>
		<br/><br/>

			<label for="provincia">(*)Nueva Provincia: </label>
			<select  name="provincia" id="provincia" class="prov">
				<option id="<?=$p['provincia']?>"  selected><?=$p['provincia']?></option>				
				<option id="CABA">CABA</option>
				<option id="Buenos Aires">Buenos Aires</option>
				<option id="Catamarca">Catamarca</option>
				<option id="Chaco">Chaco</option>
				<option id="Chubut">Chubut</option>
				<option id="Cordoba">Cordoba</option>
				<option id="Corrientes">Corrientes</option>
				<option id="Entre Rios">Entre Rios</option>
				<option id="Formosa">Formosa</option>
				<option id="Jujuy">Jujuy</option>
				<option id="La Pampa">La Pampa</option>
				<option id="La Rioja">La Rioja</option>		
				<option id="Mendonza">Mendonza</option>
				<option id="Misiones">Misiones</option>
				<option id="Neuquen">Neuquen</option>
				<option id="Rio Negro">Rio Negro</option>
				<option id="Salta">Salta</option>
				<option id="San Juan">San Juan</option>
				<option id="San Luis">San Luis</option>
				<option id="Santa Cruz">Santa Cruz</option>
				<option id="Santa Fe">Santa Fe</option>
				<option id="Santiago del Estero">Santiago del Estero</option>
				<option id="Tucuman">Tucuman</option>
				</select>
		<br/><br/>
		<label for="tel">(*)Nuevo telefono: </label>
		<input class="tel" type="text" maxlength="10" min="0"  value="<?=$p['telefono']?>" pattern="^[0-9]+" name="telefono" id="telefono"></input>
		<br/><br/>
		<label for="email">(*)Nuevo email: </label>
		<input class="email" type="email" maxlength="100" min="0" value="<?=$p['email']?>" name="email" id="email"></input>
		<br/><br/>





		<center><label>(*)Datos obligatorios</label>
		<br/><br/>
		<div class="center">
		<input class="center"  type="submit" onclick="return validarForm();" value="Modificar">


		<a href="clientes"><input type="button" value="Cancelar" name=""></a>

		<div id="error"></div>
		</div>

	</form>


<script src="static/js/modificarcliente.js"></script>

</body>
</html>