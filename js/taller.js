		$(function(){
			cargar();
		});

		function cargar(){
			var parametros = {"action":"ajax"};
			$.ajax({
				url:'ajax/listarVehiculosTaller.php',
				data: parametros,
				 beforeSend: function(objeto){
			  },
				success:function(data){
					$("#listarVehiculos").html(data);
				}
			})
		}

		$("#btnTaller").click(function(event){
			location.reload(true);
		})

		 //para ponerele id al <input: idHojaIngreso>

    $("#modal_addImages").on('show.bs.modal', function (event) {
      var button = $(event.relatedTarget) // Button that triggered the modal
      var id_hojaIngreso = button.data('id') 
      $('#idHojaIngreso').val(id_hojaIngreso)

    });
      
 


    //vista previa 

    $("input[name='imagenPerfil']").on("change", function(){
      $("#vistaPreviaImgPerfil").html("");
      var imgPerfil = document.getElementById('imagenPerfil').files[0]; 
      var navegador = window.URL || window.webkitURL;

      var size = imgPerfil.size;
      var type = imgPerfil.type;
      var name = imgPerfil.name;

      
      if(size > 20000*20000){
        $("#vistaPreviaImgPerfil").append("<p style= 'color:red'>el tamaño del archivo debe ser menor a 5MB</p>");
      }else if(!type.match(/image.*/)){
        $("#vistaPreviaImgPerfil").append("<p style= 'color:red'>el archivo seleccionado no es una imagen</p>");
      }else {
          var imagenP = navegador.createObjectURL(imgPerfil);
          $("#vistaPreviaImgPerfil").append("<center><img src="+imagenP+" width='100px' heigth='100px' style=margin:5px></center>")
      }
        console.log("size:"+size);
        console.log("vista previa : "+imagenP+" size:"+size+" type:"+type+" name:"+name);

    });

    // guardar imagen

    document.getElementById("btn_guardar").onclick = function() {

      var imagenperfil = new FormData($("#formImagenes")[0]);
      $.ajax({
          type: "post",
          url: "ajax/guardarImagenPerfil.php",
          data: imagenperfil,
          contentType: false,
          processData: false,
           beforeSend: function(objeto){

            },
          success: function(datos){
            $("#modal_addImages").removeClass("in");
            $(".modal-backdrop").remove();
            $('body').removeClass('modal-open');
            $('body').css('padding-right', '');
            $("#modal_addImages").hide();
            $("#resultado").html(datos);
            cargar();
          }
      });   
            event.preventDefault();
    };

    


		