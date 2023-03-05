<!DOCTYPE html>
<html lang="en">

<head>
    <?php
    require_once('views/head.php');
    ?>
</head>

<body>
    <?php
    require_once('views/header.php');
    ?>
    <div class="card mt-4 p-4">
        <div class="card-header bg-success text-white">
            <h5>Generar reporte de docentes por materias</h5>
        </div>
        <div class="card-body">
            <form action="<?= URL ?>informe/pdfProyectos" method="POST" target="_blank">
                Estado
                <select class="form-control" name="sEstado">
                    <?php
                    foreach ($this->estados as $value) {
                    ?>
                        <option value="<?= $value['estado'] ?>"><?= $value['estado'] ?></option>
                    <?php
                    }
                    ?>
                </select>

                <div class="text-center">
                    <button class="btn btn-success mt-3">Generar PDF</button>
                </div>
            </form>
        </div>
    </div>
    <div class="vacio" style="width: 100%; height:230px;">

    </div>
    <?php
    require_once('views/footer.php');
    ?>
</body>

</html>