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
        <h1 class="text-center">Acontecimientos</h1>

        <button class="btn btn-primary btn-sm" data-toggle="modal" data-target="#p2">
            <i class="bi bi-plus-circle-fill"></i> Nuevo Acontecimiento</button>
        <br>
        <br>

        <div class="table-responsive">
            <table id="datatable" class="table table-bordered table-striped">
                <thead class="thead-dark text-white text-center">
                    <tr>
                        <th scope="col"><i class="bi bi-key-fill" id="icons-tabla"></i> Id</th>
                        <th scope="col"><i class="bi bi-book-half" id="icons-tabla"></i> Cate.</th>
                        <th scope="col"><i class="bi bi-calendar-date" id="icons-tabla"></i> Nombre Proyecto</th>
                        <th scope="col"><i class="bi bi-calendar-date" id="icons-tabla"></i> Inicio</th>
                        <th scope="col"><i class="bi bi-calendar-date" id="icons-tabla"></i> Final</th>
                        <th scope="col"><i class="bi bi-book" id="icons-tabla"></i> Descripcion</th>
                        <th scope="col"><i class="bi bi-emoji-laughing" id="icons-tabla"></i> Beneficiados</th>
                        <th scope="col"><i class="bi bi-geo-alt" id="icons-tabla"></i> Ubicacion</th>
                        <th scope="col"><i class="bi bi-person-workspace" id="icons-tabla"></i> Responsable</th>
                        <th scope="col"><i class="bi bi-shield-check" id="icons-tabla"></i> Estado</th>
                        <th scope="col"><i class="bi bi-brush"></i> Acciones</th>
                        <th scope="col"><i class="bi bi-brush"></i> Acciones</th>
                    </tr>
                </thead>
                <tbody class="tablacolor">
                    <?php
                    $aconts = $this->acontecimientos;
                    $cnt = 1;
                    for ($i = 0; $i < count($aconts); $i++) {
                        $urlModificar = URL . 'gestionAcontecimiento/modificarAcont?id_Acontecimiento=' . $aconts[$i]['id_Acontecimiento'];
                        $urlEliminar = URL . 'gestionAcontecimiento/deleteAcont?id_Acontecimiento=' . $aconts[$i]['id_Acontecimiento'];
                        //$id = $usuarios[$i]['id_Usuario'];
                        echo '<tr>
                <!--<td>' . $cnt . '</td>-->
                <td>' . $aconts[$i]['id_Acontecimiento'] . '</td>
                <td>' . $aconts[$i]['acontecimiento'] . '</td>
                <td>' . $aconts[$i]['nombre_Acont'] . '</td>
                <td>' . $aconts[$i]['fecha_Inicio'] . '</td>
                <td>' . $aconts[$i]['fecha_Fin'] . '</td>
                <td>' . $aconts[$i]['descripcion'] . '</td>
                <td>' . $aconts[$i]['cantidad_Beneficiados'] . '</td>
                <td>' . $aconts[$i]['nombre_Municipio'] . ", " . $aconts[$i]['nombre_Departamento'] . '</td>
                <td>' . $aconts[$i]['nombre_Responsable'] . '</td>
                <td>' . $aconts[$i]['estado'] . '</td>
                <td>
                    <a href="' . $urlEliminar . '" type="button" class="btn btn-outline-danger  btn-sm" id="btnDeleteAcont"><i class="bi bi-trash3-fill" id="btneliminar">Eliminar</i></a>
                    </td>
                    <td>
                    <a href="' . $urlModificar . '" type="button" class="btn btn-outline-primary btn-sm" id="btnEditAcont"><i class="bi bi-pencil-square">Modificar</i></a>
                </td>
                </tr>';
                        $cnt++;
                    }
                    ?>
                </tbody>
            </table>
            <?php
            //$categoria = $this->categorias;
            //print_r($categoria);
            ?>
        </div>

    </div>

    <!-- Modal -->
    <div class="modal fade" id="p2">
        <div class="modal-dialog ">
            <div class="modal-content" id="ventana">
                <div class="modal-header">
                    <h2 class="modal-title">AGREGAR ACONTECIMIENTO</h2>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>

                <div class="modal-body">
                    <form action="<?= URL ?>gestionAcontecimiento/agregarAcontecimiento" method="POST" id="frmNewAcont">
                        <div class="modal-content">
                            <label for="categoria" id="texto"><i class="bi bi-brush"></i> Seleccionar Categoria</label>
                            <select name="sCategoria" id="sCateg" class="form-control">
                                <?php foreach ($this->categorias as $categoria) : ?>
                                    <option value="<?= $categoria['id_tipoAcont'] ?>"><?= $categoria['acontecimiento'] ?> </option>
                                <?php endforeach ?>
                            </select>
                            <br />

                            <label for="nombreAcont" id="texto"><i class="bi bi-card-list"></i> Nombre del Acontecimiento</label>
                            <input type="text" name="nombreAcont" id="txtNombreAcont" class="form-control" data-validetta="required">
                            <br />

                            <label for="fechaInicio" id="texto"><i class="bi bi-calendar-date"></i> Fecha de Inicio</label>
                            <input type="date" name="fechaInicio" id="txtFechaInicio" value="<?php echo date("Y-m-d"); ?>" class="form-control" data-validetta="required">
                            <br />
                            <label for="fechaFin" id="texto"><i class="bi bi-calendar-date"></i> Fecha de Finalización</label>
                            <input type="date" name="fechaFin" id="txtFechaFin" class="form-control" data-validetta="required">
                            <br />

                            <label for="descripcion" id="texto"><i class="bi bi-card-text"></i> Descripción breve</label>
                            <input type="text" name="descrpcion" id="txtDescripcion" class="form-control" placeholder="" data-validetta="required">
                            <br />

                            <label for="beneficiados" id="texto"><i class="bi bi-calendar2-heart"></i> Cantidad de Beneficiados</label>
                            <input type="number" name="beneficiados" id="txtBeneficiados" class="form-control" data-validetta="required">
                            <br />

                            <div class="border">
                                <label for="location"><i class="bi bi-geo-alt"></i><b> Seleccionar la Ubicación:</b></label><br>
                                <label for="location" id="texto">Departamento</label>
                                <select name="sDepartamentos" id="dep" class="form-control" required>
                                    <option value=""> -- -- </option>
                                    <?php foreach ($this->departamentos as $departamento) : ?>
                                        <option value="<?= $departamento['id_Departamento'] ?>"><?= $departamento['nombre_Departamento'] ?> </option>
                                    <?php endforeach ?>
                                </select>
                                <br />
                                <label for="location" id="texto"> Municipios</label>
                                <select name="sMunicipios" id="municipios" class="form-control" required>
                                    <option value=""> -- -- </option>
                                    <?php foreach ($this->municipios as $municipios) : ?>
                                        <option value="<?= $municipios['id_Municipio'] ?>"><?= $municipios['nombre_Municipio'] ?> </option>
                                    <?php endforeach ?>
                                </select>
                                <br />

                            </div>

                            <label for="" id="texto"><i class="bi bi-clipboard-plus"></i> Asignar Responsable</label>
                            <select name="sResponsable" id="sRespon" class="form-control" required>
                                <option value=""> -- -- </option>
                                <?php foreach ($this->responsables as $responsable) : ?>
                                    <option value="<?= $responsable['id_Responsable'] ?>"><?= $responsable['nombre_Responsable'] ?> </option>
                                <?php endforeach ?>
                            </select>
                            <br />

                            <label for="" id="texto"><i class="bi bi-calendar-check"></i> Estado del Acontecimiento</label>
                            <Select name="sEstado" id="sEsta" class="form-control">
                                <option value="Aprobado"> Aprobado</option>
                                <option value="Ejecución"> En Ejecución</option>
                                <option value="Finalizado"> Finalizado</option>
                            </Select>
                            <br />

                            <br />
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-success" id="btnAgregarAcont"><i class="bi bi-box-arrow-down"></i> Agregar</button>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>

    <br><br><br><br><br><br>

    <?php
    require_once('views/footer.php');
    ?>

    <script src="<?= URL ?>public/js/municipios.js"></script>
    <script src="<?= URL ?>public/js/datatable.js"></script>
    <script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>

    <script>
        var url = "<?= constant('URL') ?>"
    </script>
</body>

</html>