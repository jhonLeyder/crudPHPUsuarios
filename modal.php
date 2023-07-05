<!-- Modal para verificar la eliminacion del usuario-->
<div class="modal fade" id="eliminarusuario" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"><span class="text-danger">LIMINAR USUARIO</span></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true"></span>
        </button>
      </div>
      <div class="modal-body">
        SEGURO QUIERES ELIMINAR EL USUARIO?
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">CANCELAR</button>
        <button type="button" class="btn btn-primary" data-dismiss="modal" onclick="eliminar(<?php echo $key['cedula'] ?>)">ACETAR</button>
      </div>
    </div>
  </div>
</div>


<!-- modal para modificar usuario -->
<div class="modal fade" id="actualizar" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">ACTUALIZAR USUARIO</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true"><i class="fas fa-times-circle" style="color: #c5021f;"></i></span>
        </button>
      </div>
      <div class="modal-body">
        <div>
          <form id="formularioUsuario">
            <div class="input-form">
              <div class="input-container">
                <label for="" class="label-input">Nombre</label>
                <input type="text" id="nombreUsuario" name="nombreUsuario" class="nombreUsuario">
              </div>
              <div class="input-container">
                <label for=""class="label-input">Edad</label>
                <input type="text" id="edadUsuario" name="edadUsuario" class="nombreUsuario">
              </div>
            </div>
            <div class="input-form">
              <div class="input-container">
                <label for="" class="label-input">Profesion</label>
                <input type="text" id="profesionUsuario" name="profesionUsuario" class="nombreUsuario">
              </div>
              <div class="input-container">
                <label for="" class="label-input">Fecha</label>
                <input type="date" id="fechaUsuario" name="fechaUsuario" class="nombreUsuario">
              </div>
            </div>
            <div class="input-form">
              <div class="input-container">
                <label for="cedulaUsuario" class="label-input">cedula</label>
                <input type="text" id="cedulaUsuario" name="cedulaUsuario" placeholder="cedula" class="nombreUsuario">
              </div> 
            </div>
            <div class="modal-footer">
              <button type="button" class="bnt2" data-dismiss="modal">Cancelar</button>
              <button type="button" class="bnt3" data-dismiss="modal" onclick="actualizarUsuario()">Actualizar</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>

