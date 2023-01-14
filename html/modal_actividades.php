<div id="modalVerActividades" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="tituloVentana" aria-hidden="true">
		<div class="modal-xl modal-dialog" role="document">
			<div class="modal-content">
				<form name="editActividades" id="editActividades">
					<div class="modal-header">						
						<h4 class="modal-title">Datos de ingreso</h4>
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
						
					</div>
					<div class="modal-body">
							<div class="container">
								<div class="row">
									<div class="col-sm-12">
										<h5>Actividades</h5>
										<input type="text" name="edit_id" id="edit_id" hidden> 
									</div>
								</div>
								<div class="row">
									<div class="col-sm-4">
										<div class="form-group">
											<input class="form-control" type="text" name="nuevaActividad" id="nuevaActividad" placeholder="Nueva Actividad">
										</div>
									</div>
									<div class="col-sm-4">
										<div class="form-group">
											<a href="#" id="btn_nuevaActividad" class="btn btn-success">agregar +</a>
										</div>
									</div>
								</div>
									<div id="actividades"></div>
									<script type="text/javascript">

					document.getElementById("btn_nuevaActividad").onclick= function(){
                      AgregarActividad();
                      event.preventDefault();
                    };

                    $('#modalVerActividades').on('show.bs.modal', function (e) {
                    		var button = $(e.relatedTarget) // Button that triggered the modal
                    		var id = button.data('id');
			  				$('#edit_id').val(id);
						  	VerActividades();
					})

                    function AgregarActividad(){


                      var id_hi = $("#edit_id").val();

                      var actividad = $("#nuevaActividad").val();

                      if (id_hi) {
                      	if (actividad) {
                  		 	var datos = {"actividad":actividad, "id_hi":id_hi};
		                    console.log(datos);
		                    $.ajax({
	                        	type: "post",
                                url: "ajax/guardarActividad.php",
                                data: datos,
                                beforeSend: function(objeto){
                                	$("#actividades").html("cargando...");
                                },
                              	success: function(resultado){
                                	VerActividades();
                              	}
		                    });
                      	}else $("#actividades").html("no se encontró una actividad, asegurece de que está rellenando el campo actividad");
                      }else $("#actividades").html("no se encontro identificador");
                     
                    }

                    function VerActividades(){
                      	var id_hi = $("#edit_id").val();
                      	if (id_hi) {
                      		var datos = {"id_hi":id_hi, "action":"ajax"};
                      		console.log(datos);
                      		$.ajax({
	                        	type: "post",
	                          	url: "ajax/verActividades.php",
	                          	data: datos,
	                          	beforeSend: function(objeto){
	                            	$("#actividades").html("cargando...");
	                          	},
	                          	success: function(resultado){
	                          			ComprobarChecks();
	                                $("#actividades").html(resultado);
	                          	}
                 	 		});
                    	}else{
                    		$("#actividades").html("no se encontró un identificador");
                    	}
                      
                    }

                    //guardar costo de actividades

                    $(document).on('change', 'input[type="number"]' ,function(e){
                    	console.log(" actividad= "+this.name+"  costo= $"+this.value);
                    	var idActividad = this.name;
                    	var costoActividad = this.value;
                    	var datos = {"idActividad":idActividad, "costoActividad":costoActividad};

                    	$.ajax({
                    			type: "post",
                    			url: "ajax/guardarCosto.php",
                    			data: datos,
                    			beforeSend:function(objeto){
                    				$("#actividades").html("cargando...");
                    			},
                    			success:function(resultado){
                    				$("actividades").html(resultado);
                    				VerActividades();
                    			}


                    	});

                    });


                    //guardar checkbox___

                    $(document).on('change','input[type="checkbox"]' ,function(e) {

    									if(this.checked){
    										var check = 1;
    									}else{
												var check = 0;
    									}
    										var id = this.id;
    										var datos = {"checked":check, "id":id};
    									$.ajax({
	                        	type: "post",
	                          	url: "ajax/editarCheckBox.php",
	                          	data: datos,
	                          	beforeSend: function(objeto){
	                            	$("#actividades").html("cargando...");
	                          	},
	                          	success: function(resultado){
	                                $("#actividades").html(resultado);
	                                VerActividades();
	                          	}
												});
    								});

    								//____________________


    								//eliminar actividad
    								$(document).on('click','.buttonDelete', function(event){
    										var id = $(this).data("id");
    										$.ajax({
                    			type: "post",
                    			url: "ajax/eliminarActividad.php",
                    			data: {"idActividad":id},
                    			beforeSend:function(objeto){
                    				$("#actividades").html("cargando...");
                    			},
                    			success:function(resultado){
                    				$("actividades").html(resultado);
                    				VerActividades();
                    			}


                    	});



    								});



                    function ComprobarChecks(){
                    	$('input[type=checkbox]').each(function(){
                    		console.log("checkbox "+$(this).prop("id") + $(this).val());
                    	});
                    }




									</script>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>