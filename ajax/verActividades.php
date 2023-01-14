

<?php 

require_once("../conexion.php");
$action = $_POST['action'];
 if($action == 'ajax'){
	$id = $_POST['id_hi'];
	$query=mysqli_query($con,"SELECT * from actividades where hojaIngreso = ".$id);
	echo '<div class="container" id="contenedorActividades">';
    echo '<div class="row lineaSuperior">
        <div class="col-sm-1">
            <b>estado</b>
        </div>
        <div class="col-sm-3">
            <b>actividad</b>
        </div>
        <div class="col-sm-3">
        	<b>costo</b>
        </div>
    </div>';
	
 	?>
 			<?php
				while ($row=mysqli_fetch_array($query)) {
					if ($row["estado"]==0) {
						echo '<div class="row separador">
								<div class="col-sm-1">
									<div class="form-check">
	  									<input class="form-check-input checkActividad" type="checkbox" value="" id="'.$row["id_actividad"].'" required>
									</div>
								</div>';		
					}elseif ($row["estado"] == 1) {
						echo '<div class="row separador">
								<div class="col-sm-1">
									<div class="form-check">
	  									<input class="form-check-input checkActividad" type="checkbox" value="" id="'.$row["id_actividad"].'" checked required>
									</div>
								</div>';
					}
					echo '	<div class="col-sm-3">
								<input type="text" class="form-control" value="'.$row["nombre"].'" id="nombreActividad" >
							</div>';
                    echo '<div class="col-sm-3">
                <input type="number" name="'.$row["id_actividad"].'" value="'.$row["precio"].'" class="form-control costo" required>
                </div>';
                    echo '<div class="col-sm-1">
                        <a href="#" class="buttonDelete" title="eliminar actividad" data-id="'.$row["id_actividad"].'">
                        x
                        </a>
                    </div>';

					echo '</div>';
	    		}

 	    	?>
	    	

 <?php
	echo '</div>';

    echo '<div class="modal-footer">
                        <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancelar">
                        <input type="button" class="btn btn-warning" value="Generar Boleta">
                    </div>';


 }else{

 }
?>

<style type="text/css">
    #contenedorActividades{
        background-color: #F5F5F5;
        margin-top: 2%;
    }
    .separador{
        margin-bottom: 1%;
         display: flex;
   align-items: center;
    }
    .separador:hover{
        background-color: white;
    }
        .buttonDelete {
    /*background-color: #F55F50;*/
    border-radius: 6px;
    /*border: none;*/
    color: #969696;
    cursor: pointer;
    font-size: 12px;
    padding: 4px 4px;
    text-align: center;
    text-transform: uppercase;
    width: 50%;
    margin-bottom: 20px;
    text-decoration: none;
    margin: auto;
    }

    .buttonDelete:hover {
    background-color: #FE5757;
    color: #fff;
    }

    .form-check{
        margin: auto;
    }
    .lineaSuperior{
        background-color: #959595;
        margin-bottom: 1%;
    }
    .lineaSuperior div b{
        color: white;
    }
</style>