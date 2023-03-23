<?php
$inc = include("Conexion.php");
include("validarSesion.php");
?>
<!DOCTYPE html> 
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Cuadros</title>
    <link rel="stylesheet" href="{{ url_for('static', filename='css/style.css')}}">
    <link rel="icon" type="image/x-icon" href="../static/img/icon_pag.png">
    <link rel="stylesheet" type="text/css" href="../static/css/style.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../static/plugins/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" href="../static/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
    <link rel="stylesheet" href="../static/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <link rel="stylesheet" href="../static/plugins/jqvmap/jqvmap.min.css">
    <link rel="stylesheet" href="{{ url_for('static', filename='css/adminlte.min.css')}}">
    <link rel="stylesheet" href="../static/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
    <link rel="stylesheet" href="../static/plugins/daterangepicker/daterangepicker.css">
    <link rel="stylesheet" href="../static/plugins/summernote/summernote-bs4.min.css">
    <link rel="stylesheet" href="../static/css/adminlte.min.css">
    <link rel="stylesheet" type="text/css" href="../static/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Fuzzy+Bubbles:wght@700&family=Source+Serif+Pro:ital,wght@1,600&display=swap" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
    <script type="text/javascript" src="../static/js/bootstrap.min.js"></script>

    <script >
        var btnwpp = new Audio();
        btnwpp.src="../static/audios/Whatsapp.mp3"
    </script>
    
</head>

<body class="hold-transition sidebar-mini layout-fixed">
 
    <div class="wrapper">

        <!--div class="preloader flex-column justify-content-center align-items-center">
            <img class="animation__shake" src="static/img/logonegro.png" alt="C&C" height="150" width="150">
        </div-->
        <nav class="main-header navbar navbar-expand navbar-blue navbar-dark"> 

         <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <h6 class="card-title" align="left">
                    <?php 
                    if($inc){
                      $con = "SELECT Nombres, Apellidos FROM Persona WHERE Cedula = (SELECT Cedula FROM administrador WHERE CodigoAdministrador = '$_SESSION[codigoadministrador]') ";
                      $res = mysqli_query($conexion,$con);
                      if($res){
                        while ($r = $res->fetch_array()){
                          $n = $r['Nombres'];
                          $a = $r['Apellidos'];
                          ?>
                          <b>
                            <i> 
                            Usuario
                              <?php
                              echo $n;
                              ?>
                              <?php
                              echo $a;
                              ?>
                          </i>
                      </b>
                      <?php
                  }
              }
          }
          ?> 
      </h6>
  </li>
  <li class="nav-item">
    <a class="nav-link text-white" href="templates/CerrarSesion.php">
        <i class="fas fa-user-slash"></i>
    </a>
</li>

</ul>
</nav>

<!--------------------------------------------------------------------------------------------->
<div class="content-wrapper" style="background-image: url('../static/img/fondo4.png');">
    
    <br>
    <form  method="POST" action="../menu.php" width="100">
        <button class="btn btn-warning w-50 "> Menu Principal </button>
    </form>
    <br>
    
    <ul class="list-group list-group-light">
        <li class="list-group-item">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <section class="content">
                            <div class="row">
                                <div class="col-md-12">
                                    <form class="was-validated">
                                        <div class="card2 card-primary">

                                            <div class="card-header">
                                                <h3 class="card-title">Consulta el precio</h3>
                                            </div>
                                            <div class="container " style="background-color: #BFC4C4;" align="center">
                                                <img src="../static/img/proxim.png" alt="Facebook">


                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </li>
    </ul>
    
    

    

    
</div>
<!--------------------------------------------------------------------------------------------->
<footer>
    <a class="appWhatsapp" href="https://wa.me/message/BH3BJKU6EVRON1"  onmousedown="btnwpp.play()" target="_blank">
        <img src="../static/img/logowpp.png" alt="WhatsApp"> 
    </a>
    <div id="fb-root"></div>
</footer>         

</section>

</div>

<footer class="main-footer">
    <strong>Copyright &copy; 2023 <a href="https://www.facebook.com/Cuadrosymascuadros999"  target="_blank">@Cuadrosymascuadros999</a>.</strong> Todos los derechos reservados.
    <div class="float-right d-none d-sm-inline-block">
        <b>Version</b> 1.0.0
    </div>
</footer>

<aside class="control-sidebar control-sidebar-dark">
</aside>

<!--------------------------------------------------------------------------------------------->            
</div>  


<!--------------------------------------------------------------------------------------------->
<script src="../static/plugins/jquery/jquery.min.js"></script>
<script src="../static/plugins/jquery-ui/jquery-ui.min.js"></script>
<script>
    $.widget.bridge('uibutton', $.ui.button)
</script>
<script src="../static/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="../static/plugins/chart.js/Chart.min.js"></script>
<script src="../static/plugins/sparklines/sparkline.js"></script>
<script src="../static/plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="../static/plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<script src="../static/plugins/jquery-knob/jquery.knob.min.js"></script>
<script src="../static/plugins/moment/moment.min.js"></script>
<script src="../static/plugins/daterangepicker/daterangepicker.js"></script>
<script src="../static/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<script src="../static/plugins/summernote/summernote-bs4.min.js"></script>
<script src="../static/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<script src="../static/js/adminlte.js"></script>
<script src="../static/js/pages/dashboard.js"></script>
<script src="../static/plugins/bs-custom-file-input/bs-custom-file-input.min.js"></script>
<script src="../static/js/adminlte.min.js"></script>   
<script src="../static/js/confirmacion.js"></script>
</body>
</html>
<!--------------------------------------------------------------------------------------------->