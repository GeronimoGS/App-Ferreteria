//			js/modificarproducto.js


var modif = document.getElementById('modif');

function validarForm(){

		console.log('Enviando form....')
		
		var mensajeError = [];
		
		if(nombre.value === null || nombre.value ===""){
			mensajeError.push("Ingrese nombre");
		}
		
		if(descripcion.value === null || monto.value ===""){
			mensajeError.push("Ingrese descripcion");
		}
		
		if(monto.value === null || monto.value ===""){
			mensajeError.push("Ingrese monto");
		}
		
		if(monto.charCode >= 48 && monto.charCode <= 57){
     	 mensajeError.push("Ingrese solo numeros");
     	}
     	 

		error.innerHTML = mensajeError.join(", ");
		

		if(mensajeError == null || mensajeError == ''){

		}else{
		return false;
		}
	
}