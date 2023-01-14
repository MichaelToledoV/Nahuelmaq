<div id="addClienteModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="tituloVentana" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<form name="add_cliente" id="add_cliente">
					<div class="modal-header">						
						<h4 class="modal-title">Ingrese los datos</h4>
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					</div>
					<div class="modal-body">									
						<div class="form-group">
							<label>Nombre</label>
							<input type="text" name="nombreCliente" id="nombreCliente" class="form-control" required>
						</div>
						<div class="form-group">
							<label>Rut</label>
							<input type="text" name="rutCliente" id="rutCliente" class="form-control" required>
						</div>
						<div class="form-group">
							<label>Tel&eacute;fono</label>
							<input type="text" name="telefonoCliente" id="telefonoCliente" class="form-control" required>
						</div>
						<div class="form-group">
							<label>Correo</label>
							<input type="text" name="correoCliente" id="correoCliente" class="form-control" required>
						</div>
						<div class="form-group">
							<label>Direcci&oacute;n</label>
							<input type="text" name="direccionCliente" id="direccionCliente" class="form-control" required>
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