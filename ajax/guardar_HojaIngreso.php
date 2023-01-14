<?php
	
	require_once("../conexion.php");//Contiene funcion que conecta a la base de datos


	if (empty($_POST['select_clientes'])){
		$errors[] = "Selecciona un cliente.";
	} else{

		$id_cliente = mysqli_real_escape_string($con,(strip_tags($_POST["select_clientes"],ENT_QUOTES)));
		$fingreso = mysqli_real_escape_string($con,(strip_tags($_POST["fingreso"],ENT_QUOTES)));
		$marca = mysqli_real_escape_string($con,(strip_tags($_POST["marca"],ENT_QUOTES)));
		$modelo = mysqli_real_escape_string($con,(strip_tags($_POST["modelo"],ENT_QUOTES)));
		$color = mysqli_real_escape_string($con,(strip_tags($_POST["color"],ENT_QUOTES)));
		$placa = mysqli_real_escape_string($con,(strip_tags($_POST["placa"],ENT_QUOTES)));
		$ano = mysqli_real_escape_string($con,(strip_tags($_POST["ano"],ENT_QUOTES)));
		$kmetraje = mysqli_real_escape_string($con,(strip_tags($_POST["kmetraje"],ENT_QUOTES)));
		$nVin = mysqli_real_escape_string($con,(strip_tags($_POST["nVin"],ENT_QUOTES)));
		$detalle = mysqli_real_escape_string($con,(strip_tags($_POST["detalle"],ENT_QUOTES)));

		// REGISTER data into database
	    $sql = "INSERT INTO hojaIngreso (cliente, fechaIngreso, marcaV, modeloV, color, N_placa, ano, kmetraje, numeroVIN, anotaciones) VALUES ('$id_cliente', '$fingreso', '$marca', '$modelo', '$color', '$placa', '$ano', '$kmetraje', '$nVin', '$detalle')"; 


	    $query = mysqli_query($con,$sql);


	    if ($query) {
	        $messages[] = "El ingreso ha sido registrado con &eacute;xito.";
	    } else {
	        $errors[] = "Lo sentimos, el registro falló. Por favor, regrese y vuelva a intentarlo.";
	    }

	}
	if (isset($errors)){
			
			?>
			<div class="alert alert-danger" role="alert">
				<button type="button" class="close" data-dismiss="alert">&times;</button>
					<strong>Error!</strong> 
					<?php
						foreach ($errors as $error) {
								echo $error;
							}
						?>
			</div>
			<?php
			}
			if (isset($messages)){
				
				?>
				<div class="alert alert-success" role="alert">
						<button type="button" class="close" data-dismiss="alert">&times;</button>
						<strong>¡Bien hecho!</strong>
						<?php
							foreach ($messages as $message) {
									echo $message;
								}
							?>
				</div>
				<?php
			}

?>






