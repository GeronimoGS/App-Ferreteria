//			js/formproduc.js


var categoria = document.getElementById('categoria');
var nombre = document.getElementById('nombre');
var descripcion = document.getElementById('descripcion');
var monto = document.getElementById('monto');
var error = document.getElementById('error');

function validarForm(){

		console.log('Enviando form....')
		
		var mensajeError = [];
		
		if(categoria.value === null || categoria.value ==="" ||nombre.value === null || nombre.value === "" 
			|| descripcion.value === null || descripcion.value === "" || monto.value === null || monto.value === ""){
			mensajeError.push("Complete campos obligatorios");
		}
	

		error.innerHTML = mensajeError.join(", ");
		

		if(mensajeError == null || mensajeError == ''){

		}else{
		return false;
		}
	
}