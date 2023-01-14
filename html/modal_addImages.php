<div id="modal_addImages" class="modal" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <form method="post" id="formImagenes" enctype="multipart/form-data">
      <div class="modal-header">
        <h5 class="modal-title">subir imagenes</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      
      <div class="modal-body">

        <!-- formulario -->

        
        
          <div class="container">
            <div class="row" id="cont_inp_imagenP">
              <p>imagen de perfil</p><br>
            <input type="file" class="form-control-file" name="imagenPerfil" id="imagenPerfil">
            <div id="vistaPreviaImgPerfil"></div>
            </div>
            <br>
            <div class="row" id="cont_inp_imagenes">
              <p>imagenes adicionales</p>
            <input type="file" class="form-control-file" name="imagenes[]" id="imagenes" multiple>
            <div id="vistaPreviaImages"></div>
            </div>
              <input type="text" name="idHojaIngreso" id="idHojaIngreso" hidden>
          </div>
           </div>
      <div class="modal-footer">
        <button type="button" id="btn_guardar" class="btn btn-primary">Guardar</button>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>

        
      </div>

    </div>
  </div>
</div>
</form> 
