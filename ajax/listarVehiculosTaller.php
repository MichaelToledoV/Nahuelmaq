<?php 

require_once ("../conexion.php");

$action = (isset($_REQUEST['action'])&& $_REQUEST['action'] !=NULL)?$_REQUEST['action']:'';
if($action == 'ajax'){
							$query=mysqli_query($con,"SELECT hojaIngreso.id_hojaIngreso, clientes.nombre, clientes.id_cliente, clientes.telefono,clientes.correo, hojaIngreso.marcaV, hojaIngreso.modeloV, hojaIngreso.N_placa, hojaIngreso.fechaIngreso, hojaIngreso.fechaSalida, hojaIngreso.color, hojaIngreso.ano, hojaIngreso.numeroVIN, hojaIngreso.kmetraje, hojaIngreso.anotaciones, imagenes.imagen, imagenes.hojaIngreso, imagenes.type from clientes inner join hojaIngreso on hojaIngreso.cliente = clientes.id_cliente left join imagenes on imagenes.hojaIngreso = hojaIngreso.id_hojaIngreso order by hojaIngreso.fechaIngreso desc; ");
						?>
						
						<div class="card-grup">

						<?php 

						while ($row=mysqli_fetch_array($query)) {

	
   				

echo '<div class="row" style="background-color:#D0DEE1; margin: 2%; padding: 1%;">
											<style type="text/css">
												.btnLisata{
													padding: 5%;
													text-align: center;
													height: 80%;
													margin-left: 20%;
												}
												.imgnPerfil{
													border-radius:100% 100% 100% 100%;
													margin:auto;
													top: 0;
													left: 0;
													right: 0;
													bottom: 0;
													border-style:solid;
													border-color:#C4C9CF;
												}
												.contenedorImg{

												}

											</style>
	    									<div class="col-sm-2 contenedorImg" style=" position: relative;">
	    									<a href="#modal_addImages" data-toggle="modal" data-id="'.$row["id_hojaIngreso"].'" data-img="'.(!is_null($row["imagen"])?'imagen':'vacio').'">
	    									'.(!is_null($row["imagen"])?'<img class="imgnPerfil" src="data:'.$row['type'].';base64,'.base64_encode($row['imagen']).'" width="160px">':'<img class="imgnPerfil" src="img/sinFoto.png" width="160px">').'
	    									</a>
	    									</div>
	    									<div class="col-sm-10">
	    										<div class"container">
	    											<div class="row">
	    												<div class="col-sm-3">
	    													<b>Vehículo:</b>'.$row["marcaV"].' '.$row["modeloV"].'
	    												</div>
	    												<div class="col-sm-3">
	    													<b>Patente:</b>'.$row["N_placa"].'
	    												</div>
	    												<div class="col-sm-3">
	    													<b>Propietario:</b>'.$row["nombre"].'
	    												</div>
	    												<div class="col-sm-3">
	    													<a  href="#modalRevisarVehiculo" class="btn btn-success btnLisata" data-toggle="modal" data-id="'.$row["id_hojaIngreso"].'" data-nombre="'.$row["nombre"].'" data-idclient="'.$row["id_cliente"].'" data-telefono="'.$row["telefono"].'" data-correo="'.$row["correo"].'" data-marcave="'.$row["marcaV"].'" data-modelove="'.$row["modeloV"].'" data-nplaca="'.$row["N_placa"].'" data-fechaingreso="'.$row["fechaIngreso"].'" data-fechasalida="'.$row["fechaSalida"].'" data-color="'.$row["color"].'" data-ano="'.$row["ano"].'" data-nvin="'.$row["numeroVIN"].'" data-kilometraje="'.$row["kmetraje"].'" data-anotaciones="'.$row["anotaciones"].'" >Revisar</a>
	    												</div>
	    											</div>
	    											<div class="row">
	    												<div class="col-sm-3">
	    													<h6><b>Ingreso:</b>'.$row["fechaIngreso"].'</h6>
	    												</div>
	    												<div class="col-sm-3">
	    													<h6><b>Salida:</b>'.$row["fechaSalida"].'</h6>
	    												</div>
	    												<div class="col-sm-3">
	    												</div>
	    												<div class="col-sm-3">
	    													<a href="#modalVerActividades" class="btn btn-warning btnLisata" data-toggle="modal" data-id="'.$row["id_hojaIngreso"].'">Actividades</a>
	    												</div>
	    											</div>
	    											<div class="row">
	    												<div class="col-sm-3">
	    												</div>
	    												<div class="col-sm-3">
	    												</div>
	    												<div class="col-sm-3">
	    												</div>
	    												<div class="col-sm-3">
	    													<a href="#modalEliminarVehiculo" class="btn btn-danger btnLisata" data-toggle="modal" data-id="'.$row["id_hojaIngreso"].'">Eliminar</a>
	    												</div>
	    											</div>
	    										</div>
	    									</div>					

												
    								</div>';
    								  						}

    						 ?>
    						 </div>
    						<script type="text/javascript">
    							$('#modalRevisarVehiculo').on('show.bs.modal', function (event) {
			  						var button = $(event.relatedTarget) // Button that triggered the modal
			  						var id = button.data('id') 
			  						$('#edit_id').val(id)
			  						var telefonocl = button.data('telefono')
			  						$('#telefonoCliente').val(telefonocl)
			  						var correocl = button.data('correo')
			  						$('#correoCliente').val(correocl)
			  						var nombre = button.data('nombre')
			  						$('#propVehiculo').val(nombre)
			  						var marcaV = button.data('marcave')
			  						$('#marcaVehiculo').val(marcaV)
			  						var modeloV = button.data('modelove')
			  						$('#modeloVehiculo').val(modeloV)
			  						var patenteV = button.data('nplaca')
			  						$('#patenteV').val(patenteV)
			  						var ano = button.data('ano')
			  						$('#anoV').val(ano)
			  						var color = button.data('color')
			  						$('#color').val(color)
			  						var numeroVIN = button.data('nvin')
			  						$('#numeroVIN').val(numeroVIN)
			  						var kilometraje = button.data('kilometraje')
			  						$('#Kilometraje').val(kilometraje)
			  						var fechaIngreso = button.data('fechaingreso')
			  						$('#fechaingreso').val(fechaIngreso)
			  						var fechaSalida = button.data('fechasalida')
			  						$('#fechasalida').val(fechaSalida)
			  						var anotaciones = button.data('anotaciones')
			  						$('#anotaciones').val(anotaciones)
			  						var imagen = button.data('fechasalida')
			  						$('imagenP').val(imagen);
			  						$("#imagenGrande").html("");
			  						mostrarImagenes();

			  						function mostrarImagenes(){
			  							var parametros = {"action":"ajax", "id":id};
			  							$.ajax({
			  								url:'ajax/listarImagenes.php',
											data: parametros,
											 beforeSend: function(objeto){
										  },
											success:function(data){
												$("#imagenDePerfil").html("");
												$("#listarImagenes").html(data);
											}
			  							});
			  							return false;
			  						}
								});

    							$("#modalRevisarVehiculo").on("hidden.bs.modal", function () {
    								location.reload();
								});


    						</script>

<?php 
}
?>