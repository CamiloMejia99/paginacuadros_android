<?php
$inc = include("templates/Conexion.php");
include("templates/validarSesion.php");
?>
<!DOCTYPE html> 
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Cuadros y más cuadros</title>
    <link rel="stylesheet" href="{{ url_for('static', filename='css/style.css')}}">
    <link rel="icon" type="image/x-icon" href="static/img/icon_pag.png">
    <link rel="stylesheet" type="text/css" href="static/css/style.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="static/plugins/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" href="static/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
    <link rel="stylesheet" href="static/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <link rel="stylesheet" href="static/plugins/jqvmap/jqvmap.min.css">
    <link rel="stylesheet" href="{{ url_for('static', filename='css/adminlte.min.css')}}">
    <link rel="stylesheet" href="static/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
    <link rel="stylesheet" href="static/plugins/daterangepicker/daterangepicker.css">
    <link rel="stylesheet" href="static/plugins/summernote/summernote-bs4.min.css">
    <link rel="stylesheet" href="static/css/adminlte.min.css">
    <link rel="stylesheet" type="text/css" href="static/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Fuzzy+Bubbles:wght@700&family=Source+Serif+Pro:ital,wght@1,600&display=swap" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
    <script type="text/javascript" src="static/js/bootstrap.min.js"></script>

    <script >
      var btnwpp = new Audio();
      btnwpp.src="static/audios/Whatsapp.mp3"
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

<aside class="main-sidebar sidebar-dark-info elevation-4">
    <a href="../index.php" class="brand-link">
        <img src="static/img/CycLogo.png" alt="C&C logo" class="brand-image img-circle elevation-3">
        <span class="brand-text font-weight-light">C&C</span>
    </a>

    <div class="sidebar">

     <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

            <li class="nav-item">
                <a href="templates/list.php" class="nav-link">
                    <i class="nav-icon fas fa-star"></i>
                    <p>Cuadros</p>
                </a>
            </li>

            <li class="nav-item">
                <a href="precio.php" class="nav-link">
                   <i class="nav-icon fas fa-store"></i>
                   <p>Consulta precio</p>
               </a>
           </li>
           
           <li class="nav-item">
            <a href="contactos.php" class="nav-link">
                <i class="nav-icon fas fa-users"></i>
                <p>Contactanos</p>
            </a>
        </li>

        <li class="nav-item">
            <a href="quejas.php" class="nav-link">
                <i class="nav-icon fas fa-file"></i>
                <p>Quejas y reclamos</p>
            </a>
        </li>
    </ul>
</nav>
</div>
</aside>

<!--*******************************************inicio contenido ventanas****************************************************--> 
<div class="content-wrapper" style="background-image: url('static/img/fondo4.png');">
   
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="titulom">Inicio</h1>
                </div>
            </div>
        </div>
    </div>

    <section class="content">
        <div class="container-fluid"  align="center">
            <table  width="300">
                <tr align="center" valign="middle">
                    <td>
                        <div class="small-box bg-info">
                            <div class="inner">
                                <h3>Cuadros</h3>
                                <p> Encuentra los tipos de cuadros</p>
                            </div>
                            <div class="icon">
                                <i class="ion ion-bag"></i>
                            </div>
                            <a href="templates/list.php" class="small-box-footer">Click para continuar  <i class="fas fa-arrow-circle-right"></i></a>
                        </div>
                    </td>
                </tr>
                <tr align="center" valign="middle">
                    <td>
                        <div class="small-box bg-success">
                            <div class="inner">
                                <h3>Consulta Precio</h3>
                                <p>Consulta el precio de tus medidas</p>
                            </div>
                            <div class="icon">
                                <i class="ion ion-cash"></i>
                            </div>
                            <a href="templates/precio.php" class="small-box-footer">Click para continuar  <i class="fas fa-arrow-circle-right"></i></a>
                        </div>
                    </td>
                </tr>
                <tr align="center" valign="middle">
                    <td>
                        <div class="small-box bg-warning">
                            <div class="inner">
                                <h3>Contactanos</h3>
                                <p>Comunicate con nosotros</p>
                            </div>
                            <div class="icon">
                                <i class="ion ion-person-add"></i>
                            </div>
                            <a href="templates/contactos.php" class="small-box-footer">Click para continuar <i class="fas fa-arrow-circle-right"></i></a>
                        </div>
                    </td>
                </tr>
                <tr align="center" valign="middle">
                    <td>
                        <div class="small-box bg-danger">
                            <div class="inner">
                                <h3>P.Q.R.S.</h3>
                                <p>Detalla tu peticion</p>
                            </div>
                            <div class="icon">
                                <i class="ion ion-cloud"></i>
                            </div>
                            <a href="templates/quejas.php" class="small-box-footer">Click para continuar <i class="fas fa-arrow-circle-right"></i></a>
                        </div>
                    </td>
                </tr>
            </table>
            
            <!--*******************************************fin contenido ventanas****************************************************--> 

            <footer>
                <a class="appWhatsapp" href="https://wa.me/message/BH3BJKU6EVRON1"  onmousedown="btnwpp.play()" target="_blank">
                    <img src="static/img/logowpp.png" alt="WhatsApp"> 
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

</div>

<script src="static/plugins/jquery/jquery.min.js"></script>
<script src="static/plugins/jquery-ui/jquery-ui.min.js"></script>
<script>
    $.widget.bridge('uibutton', $.ui.button)
</script>
<script src="static/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="static/plugins/chart.js/Chart.min.js"></script>
<script src="static/plugins/sparklines/sparkline.js"></script>
<script src="static/plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="static/plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<script src="static/plugins/jquery-knob/jquery.knob.min.js"></script>
<script src="static/plugins/moment/moment.min.js"></script>
<script src="static/plugins/daterangepicker/daterangepicker.js"></script>
<script src="static/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<script src="static/plugins/summernote/summernote-bs4.min.js"></script>
<script src="static/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<script src="static/js/adminlte.js"></script>
<script src="static/js/pages/dashboard.js"></script>
<script src="static/plugins/bs-custom-file-input/bs-custom-file-input.min.js"></script>
<script src="static/js/adminlte.min.js"></script>   
<script src="static/js/confirmacion.js"></script>
</body>



</html>



