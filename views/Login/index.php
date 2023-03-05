<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <link href="<?=URL?>public/assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?=URL?>public/assets/css/font-awesome.min.css" rel="stylesheet">
    <link href="<?=URL?>public/assets/css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="<?=URL?>public/lobibox/LobiBox.min.css"/>

    <title>Educational Bootstrap 5 Login Page Website Tampalte</title>
    </head>
    <body>
    <section class="form-02-main">
    <div class="container">
        <div class="row">
        <div class="col-md-12">
            <div class="_lk_de">
            <div class="form-03-main">
                <div class="logo">
                <img src="<?=URL?>public/assets/images/user.png">
                </div>
                <form role="form" id="frmLogin">
                <div class="form-group">
                <input id="user" type="text" name="user" class="form-control _ge_de_ol" type="text" placeholder="usuario" >
                </div>

                <div class="form-group">
                <input id="psw" type="password" name="password" class="form-control _ge_de_ol" type="password" placeholder="Password">
                </div>
                <div class="form-group">
                    <select class="form-control" name="typeuser" id="typeuser" placeholder="type user">
                        <option value="Invitado">Invitado</option>
                        <option value="Responsable">Responsable</option>
                    </select>
                </div>
                <div class="form-group">
                <div class="_btn_04">
                    <button type="submit" class="btn btn-sucess" style="color:white;">Login</button>
                    <!--<a href="#">Login</a>-->
                </div>
                </form>
                </div><br><br><br><br>
            </div>
            </div>
        </div>
        </div>
    </div>
    </section>
<!-- jQuery-->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<!-- Bootstrap -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" ></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"></script>
<script src="<?=URL?>public/lobibox/lobibox.min.js"></script>
<script src="<?=URL?>public/js/login.js"></script>

</body>
</html>