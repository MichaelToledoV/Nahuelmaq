<?php
	if (empty($_POST["id_hi"])){		
		$errors[] = ": id de la hoja de ingreso no enontrado";
	} elseif (!empty($_POST['id_hi'])){
	require_once ("../conexion.php");
	//Contiene funcion que conecta a la base de datos
	// escaping, additionally removing everything that could be (html/javascript-) code
	$actividad = $_POST["actividad"];
	$id = $_POST["id_hi"];
	// REGISTER data into database
    $sql = "INSERT INTO actividades (nombre, hojaIngreso) VALUES ('$actividad', '$id')";
    $query = mysqli_query($con,$sql);
    // if product has been added successfully
    if ($query) {
        $messages[] = "La actividad ha sido registrada con &eacute;xito.";
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