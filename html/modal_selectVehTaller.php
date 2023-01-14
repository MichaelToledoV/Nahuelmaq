
<style type="text/css">
	.modal-body{
  height: 600px;
  width: 100%;
  overflow-y: auto;
}
	#carouselExampleIndicators{
		width: 90%;		
	}

	#imagenGrande{
		margin: 5%;
		background-color: #C4C9CF;
	}

	#imagenGrande center img{
		max-height: 500px;
	}
</style>
<div id="modalRevisarVehiculo" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="tituloVentana" aria-hidden="true">
		<div class="modal-xl modal-dialog" role="document">
			<div class="modal-content">
				<form name="editVehTaller" id="editVehTaller">
					<div class="modal-header">						
						<h4 class="modal-title">Datos de ingreso</h4>
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
						
					</div>
					<div class="modal-body">
						<div class="container">
							<div class="row">
								<div class="col-sm-4">
									<div class="form-group">
										<b><label>Propietario</label></b>
										<input type="text" name="propVehiculo" id="propVehiculo" class="form-control" required disabled>
									</div>
								</div>
								<div class="col-sm-4">
									<div class="form-group">
										<b><label>Tel&eacute;fono</label></b>
										<input type="text" name="telefonoCliente" id="telefonoCliente" class="form-control" required disabled>
									</div>
								</div>
								<div class="col-sm-4">
									<div class="form-group">
										<b><label>Correo</label></b>
										<input type="text" name="correoCliente" id="correoCliente" class="form-control" required disabled>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-sm-4">
									<div class="form-group">
										<b><label>Marca</label></b>
										<input type="text" name="marcaVehiculo" id="marcaVehiculo" class="form-control" required>
									</div>
								</div>
								<div class="col-sm-4">
									<div class="form-group">
										<b><label>Modelo</label></b>
										<input type="text" name="modeloVehiculo" id="modeloVehiculo" class="form-control" required>
									</div>
								</div>
								<div class="col-sm-4">
									<div class="form-group">
										<b><label>Año</label></b>
										<input type="number" name="anoV" id="anoV" class="form-control" required>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-sm-4">
									<div class="form-group">
										<b><label>Patente</label></b>
										<input type="text" name="patenteV" id="patenteV" class="form-control" required>
									</div>
								</div>
								<div class="col-sm-4">
									<div class="form-group">
										<b><label>color</label></b>
										<input type="text" name="color" id="color" class="form-control" required>
									</div>
								</div>
								<div class="col-sm-4">
									<div class="form-group">
										<b><label>Número de VIN</label></b>
										<input type="text" name="numeroVIN" id="numeroVIN" class="form-control" required>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-sm-4">
									<div class="form-group">
										<b><label>Kilomatraje</label></b>
										<input type="text" name="Kilometraje" id="Kilometraje" class="form-control" required>
									</div>
								</div>
								<div class="col-sm-4">
									<div class="form-group">
										<b><label>Fecha de ingreso</label></b>
										<input type="date" name="fechaingreso" id="fechaingreso" class="form-control" required>
									</div>
								</div>
								<div class="col-sm-4">
									<div class="form-group">
										<b><label>Fecha de salida</label></b>
										<input type="date" name="fechasalida" id="fechasalida" class="form-control">
									</div>
								</div>
								<input type="text" name="edit_id" id="edit_id" hidden> 
							</div>
							<div class="row">
								<div class="col-sm-12">
									<b><label>Anotaciones</label></b>
									<textarea name="anotaciones" id="anotaciones" class="form-control"></textarea>
								</div>
							</div>
							<br>
							<h5>Imágenes</h5>
							<div class="container">
								<div class="row">
									<div class="col-sm-12">
										<div id="imagenGrande"></div>
									</div>
								</div>
							</div>
											    <div id="listarImagenes">
											  </div>
							
						</div>									
					</div>
					<div class="modal-footer">
						<input type="button" class="btn btn-default" data-dismiss="modal" value="Cancelar">
						<input type="submit" class="btn btn-success" value="Guardar">
					</div>
				</form>
			</div>
		</div>
	</div>

	

