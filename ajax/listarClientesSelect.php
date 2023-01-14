

<?php 

require_once("../conexion.php");


$action = (isset($_REQUEST['action'])&& $_REQUEST['action'] !=NULL)?$_REQUEST['action']:'';
if($action == 'ajax'){
							$query=mysqli_query($con,"SELECT * from clientes order by id_cliente desc");
						?>

							<script type="text/javascript">
						$(document).ready(function(){
								$('.chosen-select').chosen();
						});
					</script>

					<select class="chosen-select" id="select_clientes" name="select_clientes">
						<option value="">O selecciona un cliente de la lista</option>
						<?php while ($row=mysqli_fetch_array($query)) {
								printf($row['id_cliente']);
     							echo "<option value=".$row['id_cliente'].">".$row['nombre']." - ".$row['rut']."</option>";
    						} ?>
					</select>



<?php 
}
?>