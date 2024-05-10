//			js/modificarcliente.js


var modif = document.getElementById('modif');

function validarForm(){

		console.log('Enviando form....')
		
		var mensajeError = [];
		
		if(razon.value === null || razon.value ===""){
			mensajeError.push("Ingrese razon social");
		}
		
		if(cuil.value === null || cuil.value ===""){
			mensajeError.push("Ingrese cuil/t");
		}

		if(direccion.value === null || direccion.value ===""){
			mensajeError.push("Ingrese direccion");
		}

		if(cp.value === null || cp.value ===""){
			mensajeError.push("Ingrese codigo postal");
		}

		if(provincia.value === null || provincia.value ===""){
			mensajeError.push("Ingrese provincia");
		}

		if(telefono.value === null || telefono.value ===""){
			mensajeError.push("Ingrese telefono");
		}
		
		if(email.value === null || email.value ===""){
			mensajeError.push("Ingrese email");
		}
     	 

		error.innerHTML = mensajeError.join(", ");
		

		if(mensajeError == null || mensajeError == ''){

		}else{
		return false;
		}
	
}