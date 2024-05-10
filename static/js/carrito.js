		//		static/js/carrito.js
var inicio=function () {
	$(".cantidad").keypress(function(e){
	
		if($(this).val()!=''){
			var code = (e.keycode ? e.keycode : e.which);
			if(code ==13){
			
				var id=$(this).attr('data-id');
				var precio=$(this).attr('data-precio');
				var cantidad=$(this).val();

				$(this).parentsUntil('.producto').find('.subtotal').text("$"+(precio*cantidad));
				$.post('./static/js/modificarDatos.php',{
					Id:id,
					Precio:precio,
					Cantidad:cantidad
				},function(e){
					$("#total").text('Total: '+ e);
					
				});	
			}
		}

	})
}
$(document).ready(inicio);
