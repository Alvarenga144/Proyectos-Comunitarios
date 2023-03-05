<!-- Modal modificar usuario -->
<div class="modal fade" id="p2">
        <div class="modal-dialog ">
          <div class="modal-content" id="ventana">
            <div class="modal-header">
              <h2 class="modal-title" >MODIFICAR USUARIO</h2>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
            <form action="<?=URL?>GestionUsuario/saveModificar" method="POST" id="frmEdit">
            
            <div class="modal-content">
            <label for="nombre" id="texto"><i class="bi bi-key-fill" id="icons"></i> Id Usuario</label>
                <input type="number" name="id"  class="form-control" id="id" readonly="true">
                <br />
                <label for="nombre" id="texto"><i class="bi bi-person-fill" id="icons"></i> Nombre</label>
                <input type="text" name="nombre"  class="form-control" id="username">
                <br />

                <label for="nombre" id="texto"><i class="bi bi-calendar-date" id="icons"></i> Fecha Nacimiento</label>
                <input type="date" name="fecha"  class="form-control" id="fechaNac" readonly="true">
                <br />
                <label for="nombre" id="texto"><i class="bi bi-envelope-check-fill" id="icons"></i> Correo Electronico</label>
                <input type="text" name="email" class="form-control" id="correo">
                <br />

                <label for="nombre" id="texto"><i class="bi bi-lock-fill" id="icons"></i> Password Usuario</label>
                <input type="password" name="password" class="form-control" id="contra">
                <br />
            </div>
            <div class="modal-footer">
            <button type="submit"  class="btn btn-secondary" id="btnModificar"><i class="bi bi-pencil-square"></i>Modificar</button>
            </div>
            </form>
            </div>
        
          </div>
        </div>
      </div>
      <script src="<?=URL?>public/js/gestion.js"></script>