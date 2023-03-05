<!DOCTYPE html>
<html lang="es">
<head>
<?php
  require_once('views/head.php');
?>


</head>
<body style="background-color:#E0FFFF">

<?php
  require_once('views/header.php');
?>


<div class="container fondo">
        <h1 class="text-center">Empleados</h1>
        
        <button class="btn btn-primary btn-sm" data-toggle="modal" data-target="#p1" >
        <i class="bi bi-plus-circle-fill"></i> Agregar Empleado</button>
        <br />
        <br />
        
        <div class="table-responsive">
            <table id="datatable" class="table table-bordered table-striped">
                <thead class="thead-dark text-white text-center">
                    <tr>
                        <th scope="col"><i class="bi bi-key-fill" id="icons-tabla"></i> Id</th>
                        <th scope="col"><i class="bi bi-person-fill" id="icons-tabla"></i> Nombre</th>
                        <th scope="col"><i class="bi bi-calendar-date" id="icons-tabla"></i> Fecha Nacimiento</th>
                        <th scope="col"><i class="bi bi-envelope-check-fill" id="icons-tabla"></i> Correo</th>
                        <th scope="col"><i class="bi bi-lock-fill" id="icons-tabla"></i> Password</th>
                        <th scope="col"><i class="bi bi-person-lines-fill" id="icons-tabla"></i> Cargo</th>
                        <th scope="col"><i class="bi bi-brush"></i> Acciones</th>
                        <th scope="col"><i class="bi bi-brush"></i> Acciones</th>
                    </tr>
                </thead>
                <tbody class="tablacolor text-center">
                <?php
                    $nombre_Responsable = $this->nombre_Responsable;
                    for ($i=0; $i < count($nombre_Responsable) ; $i++) { 
                    $urlModificar = URL.'empleado/modificarE?id_Responsable='.$nombre_Responsable[$i]['id_Responsable'];
                    $urlEliminar = URL.'empleado/eliminarE?id_Responsable='.$nombre_Responsable[$i]['id_Responsable'];
                    $id = $nombre_Responsable[$i]['id_Responsable'];
                    echo'<tr>
                    <td>'.$nombre_Responsable[$i]['id_Responsable'].'</td>
                    <td>'.$nombre_Responsable[$i]['nombre_Responsable'].'</td>
                    <td>'.$nombre_Responsable[$i]['fecha_nacimiento'].'</td>
                    <td>'.$nombre_Responsable[$i]['correo_Responsable'].'</td>
                    <td>'.$nombre_Responsable[$i]['password_respon'].'</td>
                    <td>'.$nombre_Responsable[$i]['cargo'].'</td>
                    <td>  
                    <button onclick="deleteEmpleado('.$id.')" type="button" class="btn btn-outline-danger  btn-sm"><i class="bi bi-trash3-fill" id="btneliminar">Eliminar</i></button>
                    </td>
                    <td>
                    <a href"'.$urlModificar.'" type="button" data-id="'.$nombre_Responsable[$i]['id_Responsable'].'" class="btn btn-outline-primary btn-sm btnEditar" data-toggle="modal" data-target="#p2"><i class="bi bi-pencil-square">Modificar</i></a>
                    </td>
                    </tr>';
                    }
                  ?> 
                </tbody>
            </table>
        </div>

    </div>


        <!-- Modal -->
<div class="modal fade" id="p1">
        <div class="modal-dialog ">
          <div class="modal-content" id="ventana">
            <div class="modal-header">
              <h2 class="modal-title">Agregar Empleado</h2>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
            <form action="<?=URL?>Empleado/agregarE" method="POST" id="frmEmpleado">
            <div class="modal-content">

                <label for="nombre" id="texto"><i class="bi bi-person-fill" id="icons"></i> Ingrese Nombre</label>
                <input type="text" name="nombre" id="nombre" class="form-control" data-validetta="required">
                <br />

                <label for="fecha" id="texto" ><i class="bi bi-calendar-date" id="icons"></i> Ingrese Fecha Nacimiento</label>
                <input type="date" name="fecha" id="fecha" class="form-control" data-validetta="required">
                <br />

                <label for="email" id="texto"><i class="bi bi-envelope-check-fill" id="icons"></i> Ingrese correo</label>
                <input type="email" name="email" id="email" class="form-control"  placeholder="ejemplo.21@itca.edu.sv" data-validetta="required, email">
                <br />

                <label for="password" id="texto"><i class="bi bi-lock-fill" id="icons"></i> Ingrese Password</label>
                <input type="password" name="password" id="password" class="form-control" data-validetta="required">
                <br />


                <label for="cargo" id="texto"><i class="bi bi-person-lines-fill" id="icons"></i> Ingrese Cargo</label>
                <input type="text" name="cargo"  class="form-control" data-validetta="required">
                <br />
                <br />
            </div>
            <div class="modal-footer">
                <button type="submit"  class="btn btn-success" id="btnAgregarE"><i class="bi bi-box-arrow-down"></i>Agregar</button>
            </div>
            </form>
            </div>
        
          </div>
        </div>
      </div>
      



<br><br><br><br><br><br><br><br><br><br>

<?php
  require_once('views/footer.php');
?>

<?php
require_once('views/gestion/editEmpleado.php');
?>

<script src="<?=URL?>public/js/empleado.js"></script>
<script src="<?=URL?>public/js/datatable.js"></script>
<script src="<?=URL?>public/js/validetta.min.js"></script>
<script src="<?=URL?>public/js/validettaLang-es-ES.js"></script>
<script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
<script> 
    var url = "<?= constant('URL') ?>"
</script>
</body>
</html>