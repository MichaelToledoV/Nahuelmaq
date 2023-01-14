<?php
	if (empty($_POST['idHojaIngreso'])){

		$errors[] = "!Ups ha ocurrido un error";
	}
	elseif (!empty($_POST['idHojaIngreso'])){

		require_once ("../conexion.php");

		$id = $_POST['idHojaIngreso'];

		//imagen perfil
		$imagenP = $_FILES['imagenPerfil'];
		$tipoArchivo = $imagenP["type"];
		$nombreImagen = $imagenP["name"];
		$tamanoImagen = $imagenP["size"];
		

		//conjunto de imagenes
		$contadorImagenes = count($_FILES["imagenes"]['name']);
		//comprobar si $imagenP tiene contenido,

		if($tamanoImagen > 0){

			$nombreTemporal = $imagenP["tmp_name"];
			$imagenPSubida = fopen($nombreTemporal, 'r');
			$binariosImagen = fread($imagenPSubida, $tamanoImagen);
			$binariosImagen= mysqli_escape_string($con,$binariosImagen);


			$query = "INSERT INTO imagenes (nombre,imagen,hojaIngreso,type) values('".$nombreImagen."','".$binariosImagen."','".$id."','".$tipoArchivo."') ON DUPLICATE KEY UPDATE nombre = '".$nombreImagen."', imagen = '".$binariosImagen."', type = '".$tipoArchivo."'";
			$res = mysqli_query($con,$query);
			if($res){

	?>
				<div class="alert alert-primary alert-dismissible fade show" role="alert">
					<button type="button" class="close" data-dismiss="alert" aria-label="Close">
						<span aria-hidden="true">&times;</span>
						<span class="sr-only">Cerrar</span>
					</button>
					registro insertado exitosamente
				</div>

				<?php 
			
			} else{

					?>
				<div class="alert alert-danger alert-dismissible fade show" role="alert">
					<button type="button" class="close" data-dismiss="alert" aria-label="Close">
						<span aria-hidden="true">&times;</span>
						<span class="sr-only">Cerrar</span>
					</button>
					Error <?php echo mysqli_error($con); ?>
					<?php echo '".$nombreImagen."' ?>
					<?php echo '".$binariosImagen."' ?>
					<?php echo '".$id."' ?>
					<?php echo '".$tipoArchivo."' ?>
				</div>

		<?php 
			}	

		}

		if($contadorImagenes > 0){
			if($_FILES['imagenes']['name'][0]){
				for($i=0;$i<$contadorImagenes;$i++){
					$elemento = $_FILES['imagenes']['name'][$i];
					$imagen_tmp = $_FILES['imagenes'];
					$tipoArchivo_tmp = $imagen_tmp["type"][$i];
					$nombreImagen_tmp = $imagen_tmp["name"][$i];
					$tamanoImagen_tmp = $imagen_tmp["size"][$i];
					$nombreTemporal_tmp = $imagen_tmp["tmp_name"][$i];
					$imagenTmpSubida = fopen($nombreTemporal_tmp, 'r');
					$binariosImagentmp = fread($imagenTmpSubida, $tamanoImagen_tmp);
					$binariosImagentmp= mysqli_escape_string($con,$binariosImagentmp);


					$query = "INSERT INTO imagenesAnexas (nombre,imagen,hojaIngreso,tipo) values('".$nombreImagen_tmp."','".$binariosImagentmp."','".$id."','".$tipoArchivo_tmp."')";
					$res = mysqli_query($con,$query);
					if($res){

			?>
						<div class="alert alert-primary alert-dismissible fade show" role="alert">
							<button type="button" class="close" data-dismiss="alert" aria-label="Close">
								<span aria-hidden="true">&times;</span>
								<span class="sr-only">Cerrar</span>
							</button>
							registro insertado exitosamente
						</div>

						<?php 
					
					} else{

							?>
						<div class="alert alert-danger alert-dismissible fade show" role="alert">
							<button type="button" class="close" data-dismiss="alert" aria-label="Close">
								<span aria-hidden="true">&times;</span>
								<span class="sr-only">Cerrar</span>
							</button>
							Error <?php echo mysqli_error($con); ?>
						</div>

				<?php 
					}
				}
			}
		}
	}
?>
