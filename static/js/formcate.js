//			js/formcate.js


var nombre = document.getElementById('nombre');


function validarForm(){

		console.log('Enviando form....')
		
		var mensajeError = [];
		
		if(nombre.value === null || nombre.value ===""){
			mensajeError.push("Complete campos obligatorios");
		}

		
		error.innerHTML = mensajeError.join(", ");
		
		
		if(mensajeError == null || mensajeError == ''){

		}else{
		return false;
		}
	
}