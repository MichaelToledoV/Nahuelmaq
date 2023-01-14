$("#HojaIngreso").submit(function( event ) {

		  var parametros = $(this).serialize();

			$.ajax({
					type: "POST",
					url: "ajax/guardar_HojaIngreso.php",
					data: parametros,
					 beforeSend: function(objeto){
						$("#resultados").html("Enviando...");
					  },
					success: function(datos){
						$("#resultados").html(datos);
				  }
			});
		
		  event.preventDefault();
		});