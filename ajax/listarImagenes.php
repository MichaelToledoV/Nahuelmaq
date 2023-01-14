

<?php 

require_once("../conexion.php");


$action = (isset($_REQUEST['action'])&& $_REQUEST['action'] !=NULL)?$_REQUEST['action']:'';
if($action == 'ajax'){
	$count= 0;
	$idHtrabajo = $_REQUEST['id'];	
	$array;
	$query=mysqli_query($con,"SELECT * from imagenesAnexas where hojaIngreso = ".$idHtrabajo);
	$num = 8%4;
	echo '<div class="container">';
	

	?>

			<?php
				while ($row=mysqli_fetch_array($query)) {
					if($count%4 == 0 || $count == 0){
						if($count%4 == 0 && $count != 0){
							echo '</div>';
						}
							echo '<div class="row">';
					}

						echo '<div class="col-sm-3">
							<img class="imagencuad" src="data:'.$row['tipo'].';base64,'.base64_encode($row['imagen']).'" width=200px data-id="'.$count.'" data-ruta="data:'.$row['tipo'].';base64,'.base64_encode($row['imagen']).'">
						</div>';

					$array[$count] = "data:".$row['tipo'].";base64,".base64_encode($row['imagen'])."";
					$count++;			
	    		}
	echo '</div>';
	if($count>0){
		echo '<input type="number" name="tieneImagen" id="tieneImagen" value="1" hidden="">';
	}else {
		$array[0] = 0;
		echo '<input type="number" name="tieneImagen" id="tieneImagen" value="0" hidden="">';
	}
	
}
?>

<script type="text/javascript">
	var contEntradas=0;
	var id = 0;
	var hayImagen = $("#tieneImagen").val();
	if(hayImagen == 0){
		
	}
	if(hayImagen==1){
		 var datos = <?php echo json_encode($array); ?>;
	}

	$('.imagencuad').on('click',function(){
		$("#imagenGrande").html("");
		id = $(this).data("id");
		ruta = $(this).data("ruta");
		console.log(id);
		console.log(ruta);
		$("#imagenGrande").html("<center><img src="+ruta+" class='imagenGrande' id="+id+"></center>");
		console.log("id: "+id);
	});

	function siguienteImagen(datos){
				id++;
			if (datos[id]){
				$("#imagenGrande").html("<center><img src="+datos[id]+" class='imagenGrande' id="+id+"></center>");
			}else{
				$("#imagenGrande").html("<center><img src="+datos[0]+" class='imagenGrande' id="+id+"></center>");
				id = 0;
			}
			console.log("id: "+id);
			console.log("entradas :"+contEntradas);
	}

	function anteriorImagen(datos){
			id--;
			if(datos[id]){
				$("#imagenGrande").html("<center><img src="+datos[id]+" class='imagenGrande' id="+id+"></center>");
			}else{
				$("#imagenGrande").html("<center><img src="+datos[(datos.length - 1)]+" class='imagenGrande' id="+id+"></center>");
				id = datos.length - 1;
			}
			console.log("id: "+id);
			console.log("entradas :"+contEntradas);	
	}

	document.addEventListener('keydown',(event)=>{
		const keyname = event.key;
		if (keyname == "ArrowRight") {
			siguienteImagen(datos);
		}else if(keyname == "ArrowLeft"){
			anteriorImagen(datos);
		}
	});

</script>

