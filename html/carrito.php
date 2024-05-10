<!--
	//		html/Carrito.php  -->

<!DOCTYPE html>
<html>
<head>
	<title>Carrito de compras</title>

	<link rel="stylesheet" type="text/css" href="static/css/Carrito.css">
	<script type="text/javascript" src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
	<script type="text/javascript" src="static/js/carrito.js"></script>
</head>
	
<body>	
	
	<h1>Carrito de Compras</h1>
	<div class="contenedor" >
			
			<ul class="barra-superior">
				<li><a href="home">Home</a></li>
				<li><a href="productos">Productos</a></li>
				<li><a href="categorias">Categorias</a></li>
				<li><a href="clientes">Clientes</a></li>
			</ul>
		</div>
	<?php
	$total=0;

	if(isset($_SESSION['carrito'])){
		$datos= $_SESSION['carrito'];
		$total=0;
		


	?>
	<center>
		<div class="producto">
					<div class="Heading">						
					
						<div class="cell"> <p>ID</p> </div>
						<div class="cell"> <p>Nombre</p> </div>
						
						<div class="cell"> <p>Descripcion</p> </div>
						<div class="cell"> <p>Precio</p> </div>
						<div class="cell"> <p>Cantidad</p> </div>
						<div class="cell"> <p>Subtotal</p> </div>
					
					</div>
		<?php
		$datos=$this->producto;
		?>
		
		<?php
		for($i=0;$i<count($datos);$i++){
		?>
										
					<div class="row">

					<div class="cell"><span ><?php echo $datos[$i]['Id_producto']; ?></span><br>				</div>
					<div class="cell"><span ><?php echo $datos[$i]['Nombre']; ?></span><br>					</div>
					<div class="cell"><span ><?php echo $datos[$i]['Descripcion']; ?></span><br>			</div>
					<div class="cell"><span >$<?php echo $datos[$i]['Precio']; ?></span><br>			</div>
					<div class="cell"><span >
						<input type="number" style="width : 50px" min="01" pattern="^[0-9]+" value="<?php echo $datos[$i]['Cantidad'];?>"
						data-precio="<?php echo $datos[$i]['Precio']; ?>"
						data-id="<?php echo $datos[$i]['Id_producto']; ?>"
						class="cantidad";>
					</span><br>																					</div>
					<div class="cell"><span class="subtotal">$<?php echo $datos[$i]['Precio']*$datos[$i]['Cantidad'];?></span><br>	</div>

					</div>
				
			

			
	<?php  
	$total=($datos[$i]['Precio']*$datos[$i]['Cantidad'])+$total;
		}?></div><?php
	}else{
		echo '<center><h2>Carrito de compras vacio</h2></center>';
	}
		echo '<center><h2 id="total" >Total: '.$total.'</h2></center>';
	  
	  if($total!=0){
	  	echo '<center><a href="finalizar-compra" class="aceptar"> <input class="boton" type="button" value="Pasar a finalizar compra"></a></center>';
	?>
	   <center><a href="vaciar-carrito"> <input class="boton" type="button" style="margin-top: 10px;" value="Cancelar compra, vaciar carrito"></a></center>
	 <?php } ?>
	  
</center>

	 

	 	 <center><a href="productos"> <input class="boton" type="button" onclick="confrim('¿Confirme para vaciar carritos?')" style="margin-top: 10px;" value="Listado de producto"></a></center>



</body>
</html>