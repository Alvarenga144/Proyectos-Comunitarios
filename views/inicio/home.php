<!DOCTYPE html>
<html lang="es">

<head>
  <?php
  require_once('views/head.php');
  ?>
</head>

<body>

  <?php
  require_once('views/header.php');
  ?>

  <p>
    <?php
    if (isset($_SESSION['codigo'])) {
      echo 'Bienvenido ' . $_SESSION['usuario'];
    }
    ?>
  </p>


  <?php
  require_once('views/footer.php');
  ?>
</body>
</html>