<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $this->title; ?></title>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<link rel="stylesheet" href="<?=URL?>public/css/custom.css">
</head>
<body style=" background:-webkit-linear-gradient(left, #A9F1DF, #FFBBBB )";>
<?php
    require_once('views/header.php');
?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-5 mt-4 fondo2">
            <h2 class="text-center pt-3">Modificar municipio</h2>
<form actio="<?=URL?>Municipio/modificarM" method="POST" id="frmEditM">
<?php
    $municipio = $this->datos2;
    //print_r($materia);

?> 
<div class="mb-3">
    <label for="materia" class="form-label"><i class="bi bi-key-fill"></i> Id</label>
    <input type="text" name="txtCodigo" class="form-control" value="<?=$municipio[0]?>" readonly=true>
</div>
<div class="mb-3">
    <label for="municipio" class="form-label"><i class="bi bi-person-plus-fill"></i> Municipio</label>
    <input type="text" name="txtNombre" class="form-control" value="<?=$municipio[1]?>">
</div>
<div class="mb-3">
    <label for="departamento" class="form-label"><i class="bi bi-journal-plus"></i> Departemento</label>
    <select class="form-control" name="sDepartamento" >
    <?php
        $departamento = $this->departamento;
        for ($i=0; $i <count($departamento) ; $i++) { 
            $selected = ($municipio[2]==$departamento[$i]['id_Departamento'])?'selected':'';
        echo '<option value="'.$departamento[$i]['id_Departamento'].'"'.$selected.'>'.
        $departamento[$i]['nombre_Departamento'].'</option>';
        }
    ?>
    </select>
</div>
<button type="submit" class="btn btn-primary btn-block btn-sm" id="btnModificarM"><i class="bi bi-pencil-square"></i> Modificar</button>
</form>
</div>
</div>
</div>

<br><br><br>
<br><br><br><br><br><br>
<br><br><br><br>
<?php
    require_once('views/footer.php');
?>


<script src="<?=URL?>public/js/municipios.js"></script>
</body>
</html>