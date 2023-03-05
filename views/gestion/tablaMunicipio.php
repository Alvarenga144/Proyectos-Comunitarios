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
        <h1 class="text-center"> Municipios</h1>

        <a href="<?= URL ?>Municipio/agregarM" class="btn btn-primary btn-sm">
            <i class="bi bi-plus-circle-fill"></i> Agregar Nuevo Ubicación</a>
        <br />
        <br />

        <div class="table-responsive">
            <table id="datatable" class="table table-bordered table-striped">
                <thead class="thead-dark text-white text-center">
                    <tr>
                        <th scope="col"><i class="bi bi-key-fill" id="icons-tabla"></i> Id</th>
                        <th scope="col"><i class="bi bi-geo-alt"></i> Departamento</th>
                        <th scope="col"><i class="bi bi-geo-alt"></i> Municipio</th>
                        <th scope="col"><i class="bi bi-brush"></i> Acciones</th>
                        <th scope="col"><i class="bi bi-brush"></i> Acciones</th>
                    </tr>
                </thead>
                <tbody class="tablacolor text-center">
                    <?php
                    $municipio = $this->municipio;
                    for ($i = 0; $i < count($municipio); $i++) {
                        $urlModificar = URL . 'Municipio/modificarM?id_Municipio=' . $municipio[$i]['id_Municipio'];
                        $urlEliminar = URL . 'Municipio/eliminarM?id_Municipio=' . $municipio[$i]['id_Municipio'];
                        echo '<tr>
                    <td>' . $municipio[$i]['id_Municipio'] . '</td>
                    <td>' . $municipio[$i]['nombre_Municipio'] . '</td>
                    <td>' . $municipio[$i]['id_Departamento'] . '</td>
                    
                    <td>
                    <a href="' . $urlEliminar . '" type="button" id="EliminarM" class="btn btn-outline-danger btn-sm"><i class="bi bi-trash3-fill"></i> Eliminar</a>
                    </td>
                    <td>
                    <a href="' . $urlModificar . '" type="button" class="btn btn-outline-primary btn-sm"><i class="bi bi-pencil-square">Modificar</i></a>
                    </td>
                </tr>';
                    }
                    ?>
                </tbody>
            </table>
        </div>

    </div>

    <br><br><br><br><br><br><br><br><br><br>

    <?php
    require_once('views/footer.php');
    ?>
    <script src="<?= URL ?>public/js/municipios.js"></script>
    <script src="<?= URL ?>public/js/datatable.js"></script>
    <script src="<?= URL ?>public/js/validetta.min.js"></script>
    <script src="<?= URL ?>public/js/validettaLang-es-ES.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
    <script>
        var url = "<?= constant('URL') ?>"
    </script>
</body>

</html>