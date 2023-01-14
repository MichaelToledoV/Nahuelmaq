<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>nahuelmaq</title>

		<link rel="stylesheet" href="css/bootstrap.min.css">
		<link rel="stylesheet" href="css/materialIcons.css">
		<link rel="stylesheet" href="chosen/chosen.min.css">

		<script src="js/jquery.min.js"></script>
		<script src="js/bootstrap.bundle.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="chosen/chosen.jquery.min.js"></script>
		<style type="text/css">

			.titulo{
				color: white;
				margin-bottom: 2%;
				text-align: center;
			}

			.contenedorFormulario{
				background-color: grey;
				padding: 2%;
			}
			#selectClientes{
				margin-top: 2%;
				margin-bottom: 5%;
			}

		</style>
	</head>
	<body>
		<div id="topMenu"></div>
		<div class="container">
			 <div class="col-md-12 contenedorFormulario">

					<h4 class="form titulo">---Datos del Cliente---</h4>
					<center>
						<button data-target="#addClienteModal" class="btn btn-warning" data-toggle="modal" id="boton_registroCliente">Registrar Nuevo Cliente</button>

						<div id="loader"></div><!-- Carga de datos ajax aqui -->
						<div id="resultados"></div><!-- Carga de datos ajax aqui -->
						<div class='outer_div'></div><!-- Carga de datos ajax aqui -->
					</center>
		

					<script type="text/javascript">
						document.getElementById('boton_registroCliente').onclick=limpiarTexto;
						function limpiarTexto(){
						document.getElementById("nombreCliente").value ="";
						document.getElementById("rutCliente").value ="";
						document.getElementById("telefonoCliente").value ="";
						document.getElementById("correoCliente").value ="";
						document.getElementById("direccionCliente").value ="";
						}
					</script>




					<!-- FORMULARIO HOJA DE INGRESO -->
					
						<form name="HojaIngreso" id="HojaIngreso">


						<!-- Select con clientes registrados  -->
						<center>
							<div id="selectClientes">
								<!-- select id = select_clientes  -->
							</div>
						</center>

						<!-- Titulo 3 -->
						<h4 class="form titulo">---Datos del Vehiculo---</h4>

						



						<!-- Capturar fecha de ingreso -->
						<div class="form-group" style="display:none;">

							<?php 
								$fcha =new DateTime();
								$fcha->setTimezone(new DateTimeZone('America/Santiago'));
							?>

							<input type="date" name="fingreso" id="fingreso" class="form-control" value="<?php echo $fcha->format('Y-m-d',);?>" required>
						</div>

						<div class="container" >
							<div class="row">
								<div class="col-sm-6">
									<div class="form-group">

							<label style="color: white">Marca</label>

							<input type="text" name="marca" id="marca" class="form-control" required>

						</div>

						<div class="form-group">
							<label style="color: white">Modelo</label>
							<input type="text" name="modelo" id="modelo" class="form-control" required>
						</div>

						<div class="form-group">
							<label style="color: white">Color</label>
							<input type="text" name="color" id="color" class="form-control" required>
						</div>

						<div class="form-group">
							<label style="color: white">Placa</label>
							<input type="text" name="placa" id="placa" class="form-control" required>
						</div>
								</div>
								<div class="col-sm-6">
									<div class="form-group">
							<label style="color: white">Año</label>
							<input type="number" name="ano" id="ano" class="form-control" required>
						</div>

						<div class="form-group">
							<label style="color: white">Kilometraje</label>
							<!-- remlpazar las comas por puntos -->
							<input type="number" name="kmetraje" id="kmetraje" class="form-control" required>
						</div>

						<div class="form-group">
							<label style="color: white">Número de VIN</label>
							<input type="text" name="nVin" id="nVin" class="form-control" required>
						</div>

						<div class="form-group">
							<label style="color: white">Anotaciones</label>
							<textarea class="form-control" name="detalle" id="detalle"></textarea>
						</div>
								</div>							
							</div>
						</div>

						<!-- BOTON GUARDAR -->
						<input type="submit" class="btn btn-success" value="Guardar">
					</form>


				</div> 
		<!--	</div> -->
		</div>
	<?php include("html/modal_addCliente.php"); ?>	
	<script src="js/clientes.js"></script>
	<script src="js/HojaIngreso.js"></script>
	<script src="js/topMenu.js"></script>
	
	</body>
</html>

