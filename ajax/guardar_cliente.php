<?php
	if (empty($_POST['nombreCliente'])){
		$errors[] = "Ingresa el nombre del cliente.";
	} elseif (!empty($_POST['nombreCliente'])){
	require_once ("../conexion.php");//Contiene funcion que conecta a la base de datos
	// escaping, additionally removing everything that could be (html/javascript-) code
	$nombre = mysqli_real_escape_string($con,(strip_tags($_POST["nombreCliente"],ENT_QUOTES)));
	$rut = mysqli_real_escape_string($con,(strip_tags($_POST["rutCliente"],ENT_QUOTES)));
	$telefono = mysqli_real_escape_string($con,(strip_tags($_POST["telefonoCliente"],ENT_QUOTES)));
	$direccion = mysqli_real_escape_string($con,(strip_tags($_POST["direccionCliente"],ENT_QUOTES)));
	$correo = mysqli_real_escape_string($con,(strip_tags($_POST["correoCliente"],ENT_QUOTES)));
	// REGISTER data into database
    $sql = "INSERT INTO clientes (nombre, rut, direccion, correo, telefono) VALUES ('$nombre', '$rut', '$direccion', '$correo', '$telefono')";
    $query = mysqli_query($con,$sql);
    // if product has been added successfully
    if ($query) {
        $messages[] = "El cliente ha sido registrado con &eacute;xito.";
    } else {
        $errors[] = "Lo sentimos, el registro falló. Por favor, regrese y vuelva a intentarlo.";
    }
		
	} else 
	{
		$errors[] = "desconocido.";
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