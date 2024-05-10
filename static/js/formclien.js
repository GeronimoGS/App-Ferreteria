//			js/formclien.js


var razonsocial = document.getElementById('razon_social');
var cuil = document.getElementById('cuil');
var direccion = document.getElementById('direccion');
var codigopostal = document.getElementById('codigo_postal');
var provincia = document.getElementById('provincia');
var tel = document.getElementById('telefono');
var email = document.getElementById('email');
var error = document.getElementById('error');

function validarForm(){

		console.log('Enviando form....')
		
		var mensajeError = [];
		
		if(razon_social.value === null || razon_social.value ==="" || cuil.value === null || cuil.value === "" || direccion.value === null 
			||  direccion.value === "" || codigopostal.value === null ||  codigopostal.value === "" || codigopostal.value === null ||  codigopostal.value === "" ||
			provincia.value === null ||  provincia.value === ""  ||  provincia.value == 0 || tel.value === null ||  tel.value === "" ||
			email.value === null || email.value === ""){
			mensajeError.push("Complete campos obligatorios");
		}

		
		error.innerHTML = mensajeError.join(", ");
		
		
		if(mensajeError == null || mensajeError == ''){

		}else{
		return false;
		}
	
}