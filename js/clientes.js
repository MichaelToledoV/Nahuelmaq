
		function load(){
			var parametros = {"action":"ajax"};
			$.ajax({
				url:'ajax/listarClientesSelect.php',
				data: parametros,
				 beforeSend: function(objeto){
			  },
				success:function(data){
					$("#selectClientes2").html(data);
					$("#selectClientes").html(data);
				}
			})
		}

		$(document).ready(function(){
			load();
		});

		$("#add_cliente").submit(function( event ) {
		  var parametros = $(this).serialize();
			$.ajax({
					type: "POST",
					url: "ajax/guardar_cliente.php",
					data: parametros,
					 beforeSend: function(objeto){
						$("#resultados").html("Enviando...");
					  },
					success: function(datos){
						$("#addClienteModal").removeClass("in");
  						$(".modal-backdrop").remove();
  						$('body').removeClass('modal-open');
  						$('body').css('padding-right', '');
  						$("#addClienteModal").hide();
						$("#resultados").html(datos);
						load();
				  }
			});
		  event.preventDefault();
		});



		$('#deleteSocioModal').on('show.bs.modal', function (event) {
		  var button = $(event.relatedTarget) // Button that triggered the modal
		  var id = button.data('id') 
		  $('#delete_id').val(id)
		});


		$( "#delete_socio" ).submit(function( event ) {
		  var parametros = $(this).serialize();
			$.ajax({
					type: "POST",
					url: "ajax/eliminar_socio.php",
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

