<!DOCTYPE html>
<html lang="es">
<head>
    <?php
    require_once('views/head.php');
    ?>
</head>
<body style="background-color:#E0FFFF">
<div class="container">
    <div class="row justify-content-center">
        <div class="col-6-md col-lg-4 col-sm-12 pt-4">
        <a href="<?=URL?>gestionAcontecimiento/acontecimientos" class="btn btn-outline-secondary me-md-2 btn-sm "><- Volver</a>
            <h3 class="text-center pt-3"> <b>MODIFICAR ACONTECIMIENTOS</b></h3>

                <form action="<?=URL?>gestionAcontecimiento/modificarAcont" method="POST" id="frmEditAcont">
                    <div class="modal-content">
                        <?php
                            $dataAcont = $this->dataAcont;
                            //print_r($dataAcont);
                        ?>

                        <label for="idAcont" id="texto"><i class="bi bi-card-list"></i> ID del acontecimiento</label>
                        <input type="text" name="txtidAcont"class="form-control" data-validetta="required" value="<?=$dataAcont['id_Acontecimiento']?>">
                        <br />

                        <label for="categoria" id="texto"><i class="bi bi-brush"></i> Seleccionar Categoria</label>
                        <select name="sCategoria" class="form-control">
                        <?php
                            $categoria = $this->tipocategoria;
                            for ($i=0; $i < count($categoria); $i++){
                                $selected = ($dataAcont['id_TipoAcont']==$categoria[$i]['id_tipoAcont'])?'Selected':'';
                                echo '<option value="'.$categoria[$i]['id_tipoAcont'].'"'.$selected.'>'
                                .$categoria[$i]['acontecimiento'].'</option>';
                            }
                            
                        ?>
                        </select>
                        <br />

                        <label for="nombreAcont" id="texto"><i class="bi bi-card-list"></i> Nombre del Acontecimiento</label>
                        <input type="text" name="nombreAcont"  class="form-control" data-validetta="required" value="<?=$dataAcont['nombre_Acont']?>">
                        <br />

                        <label for="fechaInicio" id="texto"><i class="bi bi-calendar-date"></i> Fecha de Inicio</label>
                        <input type="date" name="fechaInicio" value="<?=$dataAcont['fecha_Inicio']?>" class="form-control" data-validetta="required">
                        <br />
                        <label for="fechaFin" id="texto"><i class="bi bi-calendar-date"></i> Fecha de Finalización</label>
                        <input type="date" name="fechaFin" value="<?=$dataAcont['fecha_Fin']?>" class="form-control" data-validetta="required">
                        <br />

                        <label for="descripcion" id="texto"><i class="bi bi-card-text"></i> Descripción breve</label>
                        <input type="text" name="descrpcion" class="form-control" value="<?=$dataAcont['descripcion']?>" placeholder="" data-validetta="required">
                        <br />

                        <label for="beneficiados" id="texto"><i class="bi bi-calendar2-heart"></i> Cantidad de Beneficiados</label>
                        <input type="number" name="beneficiados" class="form-control" value="<?=$dataAcont['cantidad_Beneficiados']?>" data-validetta="required">
                        <br />

                        <div class="border">
                            <label for="location"><i class="bi bi-geo-alt"></i><b> Seleccionar la Ubicación:</b></label><br>
                            <label for="location" id="texto" > Municipios</label>
                            <select name="sMunicipios" class="form-control" required>
                            <?php
                                $muni = $this->ubicacion2;
                                for ($i=0; $i < count($muni); $i++){
                                    $selected = ($dataAcont['ubicacion']==$muni[$i]['id_Municipio'])?'Selected':'';
                                    echo '<option value="'.$muni[$i]['id_Municipio'].'"'.$selected.'>'
                                    .$muni[$i]['nombre_Municipio'].'</option>';
                                }
                            ?>
                            </select>
                            <br />

                        </div>

                        <label for="" id="texto"><i class="bi bi-clipboard-plus"></i> Asignar Responsable</label>
                        <select name="sResponsable" class="form-control" required>
                        <?php
                            $emple = $this->empleado;
                            for ($i=0; $i < count($emple); $i++){
                                $selected = ($dataAcont['empleado']==$emple[$i]['id_Responsable'])?'Selected':'';
                                echo '<option value="'.$emple[$i]['id_Responsable'].'"'.$selected.'>'
                                .$emple[$i]['nombre_Responsable'].'</option>';
                            }
                        ?>

                            <option value=""> -- -- </option>
                            <?php foreach($this->responsables as $responsable): ?>
                                <option value="<?= $responsable['id_Responsable'] ?>"><?= $responsable['nombre_Responsable'] ?> </option>
                            <?php endforeach ?>
                        </select>
                        <br />

                        <label for="" id="texto"><i class="bi bi-calendar-check"></i> Estado del Acontecimiento</label>
                        <Select name="sEstado" class="form-control">
                            <option value="Aprobado"> Aprobado</option>
                            <option value="Ejecución"> En Ejecución</option>
                            <option value="Finalizado"> Finalizado</option>
                        </Select>
                        <br />
                        
                        <br />
                    </div>
                        <button class="btn btn-success" id="btnModAcont"><i class="bi bi-box-arrow-down"></i> Agregar</button>
                </form>

        </div>
    </div>
</div>

<br><br><br><br><br><br>

<?php
require_once('views/footer.php');
?>

<script src="<?=URL?>public/js/municipios.js"></script>
<script src="<?=URL?>public/js/datatable.js"></script>
<script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>

<script> 
    var url = "<?= constant('URL') ?>"
</script>
</body>
</html>