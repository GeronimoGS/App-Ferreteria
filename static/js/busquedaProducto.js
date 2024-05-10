//			js/busquedaProducto.js


var busq = document.getElementById('buscar');

function validarForm(){

		console.log('Enviando form....')
		
		var mensajeError = [];
		
		if(busq.value === null || busq.value ===""){
			mensajeError.push("Campo vacio");
		}
		

		error.innerHTML = mensajeError.join(", ");
		

		if(mensajeError == null || mensajeError == ''){

		}else{
		return false;
		}
	
}