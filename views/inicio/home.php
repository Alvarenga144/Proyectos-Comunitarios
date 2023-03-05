<!DOCTYPE html>
<html lang="es">
<head>

      <?php
        require_once('views/head.php');
      ?>


</head>
<body style="background: linear-gradient(#ffffff, #6ff2f4);">


<?php
  require_once('views/header.php');
?>
<br><br>


<center>
<h3>
  <?php
if (isset($_SESSION['codigo'])) {
  echo 'Bienvenido '. $_SESSION['usuario'];
}
?>
</h3>
<h3 id="titulo">
<img src="<?=URL?>public/img/manos.png" alt="" id="manos"></h3>
<h3 id="titulo">Plataforma de AccionES</h3>
</center>


<!---------Carrucel de imagenes--------------->
<br><br>
<div class="container">



    <section class="filter-section" >

      <div class="row">
        <div class="col-lg-4 col-md-6 col-sm-6">
          <div class="card h-100" id="imagenes">
            <img class="card-img-top" src="<?=URL?>public/img/1.jpg" alt="Card image">
            <div class="card-body">
              <h6 class="card-title">Sé tú el cambio que quieres ver en el mundo</h6>
            </div>
              <div class="card-footer">
                <div class="d-grid gap-2 col-10 mx-auto"> </div>
              </div>
            </div>
          </div>
        

      <div class="col-lg-4 col-md-6 col-sm-6">
          <div class="card h-100"  id="imagenes">
            <img class="card-img-top" src="<?=URL?>public/img/2.jpg" alt="Card image">
            <div class="card-body" >
              <h6 class="card-title">El más pequeño acto de bondad vale más que la mayor intención</h6>
            </div>
            <div class="card-footer">
              <div class="d-grid gap-2 col-10 mx-auto"></div>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 col-sm-6">
          <div class="card h-100"  id="imagenes">
            <img class="card-img-top" src="<?=URL?>public/img/uno.jpg" alt="Card image">
            <div class="card-body" >
              <h6 class="card-title">Ayudar a otras personas nos ayuda a sentirnos mejor</h6>
            </div>
            <div class="card-footer">
              <div class="d-grid gap-2 col-10 mx-auto"> </div>
            </div>
          </div>
        </div>
      </div>
      <br>
      <br>
      <br>

      <div class="row">
        <div class="col-lg-4 col-md-6 col-sm-6">
          <div class="card h-100"  id="imagenes">
            <img class="card-img-top" src="<?=URL?>public/img/cuatro.jpg" alt="Card image">
            <div class="card-body" >
              <h6 class="card-title">Nunca subestimes tu habilidad para mejorar la vida de alguien</h6>
            </div>
            <div class="card-footer">
              <div class="d-grid gap-2 col-10 mx-auto"> </div>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 col-sm-6">
          <div class="card h-100"  id="imagenes">
            <img class="card-img-top" src="<?=URL?>public/img/cinco.jpg" alt="Card image">
            <div class="card-body">
              <h6 class="card-title">Para cambiar el mundo se necesita voluntarios</h6>
            </div>
            <div class="card-footer">
              <div class="d-grid gap-2 col-10 mx-auto"></div>
            </div>
          </div>
        </div>


        <div class="col-lg-4 col-md-6 col-sm-6">
          <div class="card h-100"  id="imagenes">
            <img class="card-img-top" src="<?=URL?>public/img/seis.jpg" alt="Card image">
            <div class="card-body" >
              <h6 class="card-title">Ayudae al que lo necesita no sólo es parte del deber, sino de la felicidad</h6>
            </div>
            <div class="card-footer">
              <div class="d-grid gap-2 col-10 mx-auto"></div>
            </div>
          </div>
        </div>
      </div>
      </div>
    </section>
<br><br><br><br>

<center>
  <h3 id="titulo">NUESTRA MISIÓN</h3>
  <p>AccionES es una ONG que defiende y brinda apoyo a las comunidades más vulnerables de nuestro 
país</p>
</center>

<center>
<div class="container">
  <div class="row g-2">
  <div class="col-lg-4 col-md-6 col-sm-12">
<div class="card" style="width: 18rem;">
  <img src="<?=URL?>public/img/corazon.png" class="card-img-top" alt="...">
  <div class="card-body" id="presen-img">
    <p class="card-text">AccionES cuenta con la colaboración de 3.423.890 personas socias, 1.221.589 personas voluntarias y 110.396 trabajadores y trabajadoras.</p>
  </div>
</div>
</div>

<div class="col-lg-4 col-md-6 col-sm-12">
<div class="card" style="width: 18rem;">
  <img src="<?=URL?>public/img/mundo.png" class="card-img-top" alt="...">
  <div class="card-body" id="presen-img">
    <p class="card-text">Está integrada por 35 organizaciones no gubernamentales, confederaciones, federaciones y redes estatales que realizan 17.095.050 de atenciones</p>
  </div>
</div>
</div>

<div class="col-lg-4 col-md-6 col-sm-12">
<div class="card" style="width: 18rem;">
  <img src="<?=URL?>public/img/unidad.png" class="card-img-top" alt="...">
  <div class="card-body" id="presen-img">
    <p class="card-text">Desde la Plataforma se promueve la participación en el ámbito de AccionES y generar cambio social</p>
  </div>
  </div>
</div>
</div>
</div>
</div>
</center>
<br><br><br>


<?php
  require_once('views/footer.php');
?>


</body>
</html>