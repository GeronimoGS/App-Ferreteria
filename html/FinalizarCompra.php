<!DOCTYPE html>
<html>
<head>
	<title>Finalizar Compra</title>

	<link rel="stylesheet" type="text/css" href="static/css/FinalizarCompra.css">
</head>
<body>
	<h1>Finalizar compra</h1>
	<div class="contenedor" >
	
			<ul class="barra-superior">
				<li><a href="home">Home</a></li>
				<li><a href="productos">Productos</a></li>
				<li><a href="categorias">Categorias</a></li>
				<li><a href="clientes">Clientes</a></li>
			</ul>
		</div>


	<form action="compras" class="form" action="" method="POST">

		
		<label for="Cliente">Seleccione cliente: </label>

		<select class="clien" name="cliente" id="cliente"  >

				 <option value="" disabled selected>Selecciona una opción</option>
				
			<?php foreach($this->clientes as $e ) { ?>
   				 <option value="<?=$e['id_cliente']?>"><?=$e['razon_social']?></option>
			<?php } ?>

		</select>
		<a href="alta-cliente">¿Nuevo cliente?</a>
		<br/><br/>
		<label for="Cliente">Seleccione motodo de pago: </label>
		<select class="metodopago" name="metodopago" id="metodopago"  >
 				 <option value="" disabled selected>Selecciona una opción</option>
				 <option id="efectivo" >Efectivo</option>
				 <option id="debito" >Debito</option>
				 <option id="credito" >Credito</option>

		</select>

			<br/>
		


		<br/><br/>
		<div class="center">
(*)Campos obligatorios 
		 <center><input type="submit"  onclick="return validarForm();" value="Finalizar Compra"></center>
			
			

		<div id="error"></div>
					
		</div>
	</form>
	<form action="nuevo-presupuesto" class="presupuesto">
			<br/><br/>
				 <input type="submit" class="pres"  value="Generar presupuesto">
	
			</form>

<script src="static/js/formcomprar.js"></script>

</body>
</html>