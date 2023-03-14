<!-------- MENU -------->

<a href="<?= URL ?>inicio/home">HOME</a>

<a href="<?= URL ?>gestionAcontecimiento/acontecimientos">
  Acontecimientos
</a>
<?php
if (isset($_SESSION['cargo'])) {
  if ($_SESSION['cargo'] != "Invitado") {
?>
    <a href="<?= URL ?>gestionUsuario/TablaUsuario"> Usuarios</a>
    <a href="<?= URL ?>empleado/TablaEmpleados"> Empleados</a>
    <a href="<?= URL ?>Municipio/TablaMunicipios">Municipios</a>
    <a href="<?= URL ?>informe/pdfProyectos">Reportes</a>
<?php
  }
}
?>

<?php

if (isset($_SESSION['codigo'])) {
?>
  <a href="#">Logout</a>
<?php
} else {

?>
  <a href="<?php echo URL; ?>Login/index"></i> Login</a>
<?php
}

?>