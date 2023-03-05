<!----------------------------------------------MENU-------------->
<nav class="navbar navbar-expand-lg navbar navbar navbar-dark bg-dark bg-menu">
  <div class="container-fluid">
    <a href="<?= URL ?>inicio/home" class="nav-link titulo"><i class="bi bi-house-door"></i> HOME</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse seccion" id="navbarNavDropdown">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="<?= URL ?>gestionAcontecimiento/acontecimientos" id="item-menu"><i class="bi bi-wallet2"></i>
            Acontecimientos
          </a>
        </li>
        <?php
        if (isset($_SESSION['cargo'])) {
          if ($_SESSION['cargo'] != "Invitado") {
        ?>
            <li class="nav-item ">
              <a class="nav-link" href="<?= URL ?>gestionUsuario/TablaUsuario" id="item-menu"><i class="bi bi-people"></i> Usuarios</a>
            </li>
            <li class="nav-item ">
              <a class="nav-link" href="<?= URL ?>empleado/TablaEmpleados" id="item-menu"><i class="bi bi-person-lines-fill"></i> Empleados</a>
            </li>
            <li class="nav-item ">
              <a class="nav-link" href="<?= URL ?>Municipio/TablaMunicipios" id="item-menu"><i class="bi bi-geo-alt"></i>Municipios</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="bi bi-file-earmark-bar-graph"></i>
                Reportes
              </a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                <li><a class="dropdown-item" href="<?= URL ?>informe/pdfProyectos"><i class="bi bi-file-earmark-pdf"></i> Cursos, eventos y proyectos por estado</a></li>
              </ul>
            </li>
        <?php
          }
        }
        ?>
        <li class="nav-item ">
          <?php

          if (isset($_SESSION['codigo'])) {
          ?>
            <a class="nav-link cerraresion" href="#" id="item-menu"><i class="bi bi-key-fill"></i>Logout</a>
          <?php
          } else {

          ?>
            <a class="nav-link" href="<?php echo URL; ?>Login/index" id="item-menu"><i class="bi bi-lock-fill"></i> Login</a>
          <?php
          }

          ?>
        </li>
      </ul>
    </div>
  </div>
</nav>