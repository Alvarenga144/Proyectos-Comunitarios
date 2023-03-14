<footer>
  <div>
    © 2022 Copyright:
    Acciones El Salvador
  </div>
</footer>

<!-- jQuery-->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="<?= URL ?>public/js/validetta.min.js"></script>
<script src="<?= URL ?>public/js/validettaLang-es-ES.js"></script>
<!-- Bootstrap -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"></script>
<script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>

<script>
  /*
  $(document).ready(function() {
    base_url = '<?php echo URL; ?>';
    $('.cerraresion').on('click', function() {
      $.ajax({
          url: base_url + 'login/cerrarSesion',
          type: 'POST',
          dataType: 'JSON',
          data: {
            status: 'cerrar'
          },
        })
        .done(function(data) {
          if (data.status) {
            window.location = "http://localhost/ProyectoComunitario/inicio/home";
          }

        })
        .fail(function(data) {
          console.log(data);
        });
    });
  })
  */
</script>