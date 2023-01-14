<?php 

if(!empty($_POST["idActividad"])) {
	$idActividad = $_POST["idActividad"];

	require_once ("../conexion.php");

	$sql = "DELETE FROM actividades WHERE id_actividad = $idActividad";

    $query = mysqli_query($con,$sql);

    if ($query) {
        $messages[] = "la actividad ha sido eliminada con exito.";
    } else {
        $errors[] = "Lo sentimos, el registro falló. Por favor, regrese y vuelva a intentarlo.";
    }
}

?>