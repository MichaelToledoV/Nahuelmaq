<?php 

if(!empty($_POST["idActividad"])) {
	$idActividad = $_POST["idActividad"];
	
	if(empty($_POST["costoActividad"])){
		$costoActividad = 0;
	}else $costoActividad = $_POST["costoActividad"];

	require_once ("../conexion.php");

	$sql = "UPDATE actividades SET precio = $costoActividad WHERE id_actividad = $idActividad";

    $query = mysqli_query($con,$sql);

    if ($query) {
        $messages[] = "el costo ha sido cambiado con exito.";
    } else {
        $errors[] = "Lo sentimos, el registro falló. Por favor, regrese y vuelva a intentarlo.";
    }
}

?>