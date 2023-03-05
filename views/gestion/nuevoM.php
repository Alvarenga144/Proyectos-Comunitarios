<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $this->title; ?></title>
<link rel="stylesheet" href="<?=URL?>public/css/custom.css" class="">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="<?=URL?>public/css/validetta.min.css">

</head>
<body style=" background:-webkit-linear-gradient(left, #A9F1DF, #FFBBBB )";>

<?php
    require_once('views/header.php');
?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-5 mt-4 fondo2">
            <h2 class="text-center pt-3">Agregar Nueva Ubicación</h2>
            <form action="<?=URL?>Municipio/agregarM" method="POST" id="frmMunicipio">
                <div class="mb-3">
                    <label for="departamento" id="texto" >Ingrese Departamento</label>
                        <select name="sDepartamento" class="form-control">
                    <?php
                        $departamento = $this->departamento;
                        for ($i=0; $i <count($departamento) ; $i++) { 
                        echo '<option value="'.$departamento[$i]['id_Departamento'].'">'.$departamento[$i]['nombre_Departamento'].'</option>';
                        }
                    ?>
                        </select>
                        <br />
                        <label for="municipio" id="texto">Ingrese Municipio</label>
                        <input type="text" name="municipio" id="municipio" class="form-control" data-validetta="required">
                        <br />
                        <br />
            </div>
            <button type="submit"  class="btn btn-success btn-block" id="btnAgregarM"><i class="bi bi-box-arrow-down"></i>Agregar</button>
            </form>
        </div>
    </div>
</div>

<br><br><br><br><br><br><br>

<?php
    require_once('views/footer.php');
?>

<script src="<?=URL?>public/js/municipios.js"></script>
<script src="<?=URL?>public/js/validetta.min.js"></script>
<script src="<?=URL?>public/js/validettaLang-es-ES.js"></script>
</body>
</html>