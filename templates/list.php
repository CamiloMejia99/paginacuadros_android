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
                                  Bienvenido/a
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
                <li class="nav-item">
                    <a class="nav-link"  href="#" role="button">
                        <i class="fas fa-shopping-cart"></i>
                    </a>
                </li>
            </ul>
        </nav>

<!--------------------------------------------------------------------------------------------->
            <div class="content-wrapper" style="background-image: url('../static/img/fondo4.png');">

                            <br>
                            <form  method="POST" action="../menu.php" width="100">
                                <button class="btn btn-warning w-50 "  > Menu Principal </button>
                            </form>
                            <br>
                                <div id="contenedor2" class="col-12" align="center">
                                                           
                                             
                                                <li class="list-group-item">
                                                    
                                                                <section class="content">
                                                                    <div class="row">
                                                                        <div class="col-md-12">
                                                                            <div class="card2 card-primary">
                                                                                <div class="card-header">
                                                                                    <h3 class="card-title">Realizar pedido</h3>
                                                                                </div>
                                                                                <div class="container " style="background-color: #BFC4C4;">
                                                                                    <br>
                                                                                    <table>
                                                                                        <tr>
                                                                                            <td>
                                                                                                <div class="card-deck mb-3 text-center">
                                                                                                    <div class="card mb-4 shadow-sm">
                                                                                                        <div class="card-header">
                                                                                                            <h4 class="my-0 font-weight-bold">SENCILLO</h4>
                                                                                                        </div>
                                                                                                        <div class="card-body">
                                                                                                            <img src="../static/img/c1.png" class="card-img-top">
                                                                                                            <h1 class="card-title pricing-card-title precio"> $ 13.000 </h1>
                                                                                        
                                                                                                            <ul class="list-unstyled mt-3 mb-4">
                                                                                                                <li><br></li>
                                                                                                                <li>15X30 cm</li>
                                                                                                                <li>Una pieza</li>                                                                                        
                                                                                                            </ul>
                                                                                                            <a class="btn btn-block btn-primary" name="agregar" onmousedown="clic.play()" id="agregar" onclick="agregar()" >Agregar al Carrito</a>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </td>

                                                                                            <td>
                                                                                                <div class="card-deck mb-3 text-center">
                                                                                                    <div class="card mb-4 shadow-sm">
                                                                                                        <div class="card-header">
                                                                                                            <h4 class="my-0 font-weight-bold">SENCILLO</h4>
                                                                                                        </div>
                                                                                                        <div class="card-body">
                                                                                                            <img src="../static/img/c2.png" class="card-img-top">
                                                                                                            <h1 class="card-title pricing-card-title precio"> $ 15.000 </h1>
                                                                                        
                                                                                                            <ul class="list-unstyled mt-3 mb-4">
                                                                                                                <li><br></li>
                                                                                                                <li>23x23 cm</li>
                                                                                                                <li>Una pieza</li>                                                                                        
                                                                                                            </ul>
                                                                                                            <a class="btn btn-block btn-primary" name="agregar" onmousedown="clic.play()" id="agregar" onclick="agregar()" >Agregar al Carrito</a>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </td>
                                                                                        </tr>

                                                                                        <tr>
                                                                                            <td>
                                                                                                <div class="card-deck mb-3 text-center">
                                                                                                    <div class="card mb-4 shadow-sm">
                                                                                                        <div class="card-header">
                                                                                                            <h4 class="my-0 font-weight-bold">SENCILLO</h4>
                                                                                                        </div>
                                                                                                        <div class="card-body">
                                                                                                            <img src="../static/img/c3.png" class="card-img-top">
                                                                                                            <h1 class="card-title pricing-card-title precio"> $ 20.000 </h1>
                                                                                        
                                                                                                            <ul class="list-unstyled mt-3 mb-4">
                                                                                                                <li><br></li>
                                                                                                                <li>30x40 cm</li>
                                                                                                                <li>Una pieza</li>                                                                                        
                                                                                                            </ul>
                                                                                                            <a class="btn btn-block btn-primary" name="agregar" onmousedown="clic.play()" id="agregar" onclick="agregar()" >Agregar al Carrito</a>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </td>

                                                                                           

                                                                                            <td>
                                                                                                <div class="card-deck mb-3 text-center">
                                                                                                    <div class="card mb-4 shadow-sm">
                                                                                                        <div class="card-header">
                                                                                                            <h4 class="my-0 font-weight-bold">SENCILLO</h4>
                                                                                                        </div>
                                                                                                        <div class="card-body">
                                                                                                            <img src="../static/img/c4.png" class="card-img-top" >
                                                                                                            <h1 class="card-title pricing-card-title precio"> $ 40.000 </h1>
                                                                                        
                                                                                                            <ul class="list-unstyled mt-3 mb-4">
                                                                                                                <li><br></li>
                                                                                                                <li>40x60 cm</li>
                                                                                                                <li>Una pieza</li>                                                                                        
                                                                                                            </ul>
                                                                                                            <a class="btn btn-block btn-primary" name="agregar" onmousedown="clic.play()" id="agregar" onclick="agregar()" >Agregar al Carrito</a>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </td>
                                                                                            

                                                                                        </tr>

                                                                                        <tr>
                                                                                            <td>
                                                                                                <div class="card-deck mb-3 text-center">
                                                                                                    <div class="card mb-4 shadow-sm">
                                                                                                        <div class="card-header">
                                                                                                            <h4 class="my-0 font-weight-bold">TRIPTICO</h4>
                                                                                                        </div>
                                                                                                        <div class="card-body">
                                                                                                            <img src="../static/img/c5.png" class="card-img-top">
                                                                                                            <h1 class="card-title pricing-card-title precio"> $ 21.000 </h1>
                                                                                        
                                                                                                            <ul class="list-unstyled mt-3 mb-4">
                                                                                                                <li><br></li>
                                                                                                                <li>35x25 cm</li>
                                                                                                                <li>Tres piezas</li>                                                                                        
                                                                                                            </ul>
                                                                                                            <a class="btn btn-block btn-primary" name="agregar" onmousedown="clic.play()" id="agregar" onclick="agregar()" >Agregar al Carrito</a>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </td>

                                                                                            <td>
                                                                                                <div class="card-deck mb-3 text-center">
                                                                                                    <div class="card mb-4 shadow-sm">
                                                                                                        <div class="card-header">
                                                                                                            <h4 class="my-0 font-weight-bold">TRIPTICO</h4>
                                                                                                        </div>
                                                                                                        <div class="card-body">
                                                                                                            <img src="../static/img/c6.png" class="card-img-top">
                                                                                                            <h1 class="card-title pricing-card-title precio"> $ 47.000 </h1>
                                                                                        
                                                                                                            <ul class="list-unstyled mt-3 mb-4">
                                                                                                                <li><br></li>
                                                                                                                <li>60x50 cm</li>
                                                                                                                <li>Tres piezas</li>                                                                                        
                                                                                                            </ul>
                                                                                                            <a class="btn btn-block btn-primary" name="agregar" onmousedown="clic.play()" id="agregar" onclick="agregar()" >Agregar al Carrito</a>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </td>
                                                                                        </tr>

                                                                                        <tr>
                                                                                            <td>
                                                                                                <div class="card-deck mb-3 text-center">
                                                                                                    <div class="card mb-4 shadow-sm">
                                                                                                        <div class="card-header">
                                                                                                            <h4 class="my-0 font-weight-bold">TRIPTICO</h4>
                                                                                                        </div>
                                                                                                        <div class="card-body">
                                                                                                            <img src="../static/img/c7.png" class="card-img-top">
                                                                                                            <h1 class="card-title pricing-card-title precio"> $ 55.000 </h1>
                                                                                        
                                                                                                            <ul class="list-unstyled mt-3 mb-4">
                                                                                                                <li><br></li>
                                                                                                                <li>80x55 cm</li>
                                                                                                                <li>Tres piezas</li>                                                                                        
                                                                                                            </ul>
                                                                                                            <a class="btn btn-block btn-primary" name="agregar" onmousedown="clic.play()" id="agregar" onclick="agregar()" >Agregar al Carrito</a>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </td>

                                                                                            <td>
                                                                                                <div class="card-deck mb-3 text-center">
                                                                                                    <div class="card mb-4 shadow-sm">
                                                                                                        <div class="card-header">
                                                                                                            <h4 class="my-0 font-weight-bold">TRIPTICO</h4>
                                                                                                        </div>
                                                                                                        <div class="card-body">
                                                                                                            <img src="../static/img/c8.png" class="card-img-top" >
                                                                                                            <h1 class="card-title pricing-card-title precio"> $ 70.000 </h1>
                                                                                        
                                                                                                            <ul class="list-unstyled mt-3 mb-4">
                                                                                                                <li><br></li>
                                                                                                                <li>90x40 cm</li>
                                                                                                                <li>Tres piezas</li>                                                                                        
                                                                                                            </ul>
                                                                                                            <a class="btn btn-block btn-primary" name="agregar" onmousedown="clic.play()" id="agregar" onclick="agregar()" >Agregar al Carrito</a>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </td>
                                                                                        </tr>

                                                                                        <tr>
                                                                                            <td>
                                                                                                <div class="card-deck mb-3 text-center">
                                                                                                    <div class="card mb-4 shadow-sm">
                                                                                                        <div class="card-header">
                                                                                                            <h4 class="my-0 font-weight-bold">Poliptico</h4>
                                                                                                        </div>
                                                                                                        <div class="card-body">
                                                                                                            <img src="../static/img/c9.png" class="card-img-top">
                                                                                                            <h1 class="card-title pricing-card-title precio"> $ 73.000 </h1>
                                                                                        
                                                                                                            <ul class="list-unstyled mt-3 mb-4">
                                                                                                                <li><br></li>
                                                                                                                <li>90x60 cm</li>
                                                                                                                <li>Cinco piezas</li>                                                                                        
                                                                                                            </ul>
                                                                                                            <a class="btn btn-block btn-primary" name="agregar" onmousedown="clic.play()" id="agregar" onclick="agregar()" >Agregar al Carrito</a>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </td>

                                                                                            <td>
                                                                                                <div class="card-deck mb-3 text-center">
                                                                                                    <div class="card mb-4 shadow-sm">
                                                                                                        <div class="card-header">
                                                                                                            <h4 class="my-0 font-weight-bold">Poliptico</h4>
                                                                                                        </div>
                                                                                                        <div class="card-body">
                                                                                                            <img src="../static/img/c10.png" class="card-img-top">
                                                                                                            <h1 class="card-title pricing-card-title precio"> $ 98.000 </h1>
                                                                                        
                                                                                                            <ul class="list-unstyled mt-3 mb-4">
                                                                                                                <li><br></li>
                                                                                                                <li>100x70 cm</li>
                                                                                                                <li>Cinco piezas</li>                                                                                        
                                                                                                            </ul>
                                                                                                            <a class="btn btn-block btn-primary" name="agregar" onmousedown="clic.play()" id="agregar" onclick="agregar()" >Agregar al Carrito</a>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </td>
                                                                                        </tr>

                                                                                        <tr>
                                                                                            <td>
                                                                                                <div class="card-deck mb-3 text-center">
                                                                                                    <div class="card mb-4 shadow-sm">
                                                                                                        <div class="card-header">
                                                                                                            <h4 class="my-0 font-weight-bold">Poliptico</h4>
                                                                                                        </div>
                                                                                                        <div class="card-body">
                                                                                                            <img src="../static/img/c11.png" class="card-img-top">
                                                                                                            <h1 class="card-title pricing-card-title precio"> $ 117.000 </h1>
                                                                                        
                                                                                                            <ul class="list-unstyled mt-3 mb-4">
                                                                                                                <li><br></li>
                                                                                                                <li>110x75 cm</li>
                                                                                                                <li>Cinco piezas</li>                                                                                        
                                                                                                            </ul>
                                                                                                            <a class="btn btn-block btn-primary" name="agregar" onmousedown="clic.play()" id="agregar" onclick="agregar()" >Agregar al Carrito</a>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </td>

                                                                                            <td>
                                                                                                <div class="card-deck mb-3 text-center">
                                                                                                    <div class="card mb-4 shadow-sm">
                                                                                                        <div class="card-header">
                                                                                                            <h4 class="my-0 font-weight-bold">Poliptico</h4>
                                                                                                        </div>
                                                                                                        <div class="card-body">
                                                                                                            <img src="../static/img/c12.png" class="card-img-top" >
                                                                                                            <h1 class="card-title pricing-card-title precio"> $ 80.000 </h1>
                                                                                        
                                                                                                            <ul class="list-unstyled mt-3 mb-4">
                                                                                                                <li><br></li>
                                                                                                                <li>95x65 cm</li>
                                                                                                                <li>Cuatro piezas</li>                                                                                        
                                                                                                            </ul>
                                                                                                            <a class="btn btn-block btn-primary" name="agregar" onmousedown="clic.play()" id="agregar" onclick="agregar()" >Agregar al Carrito</a>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </td>
                                                                                        </tr>
                                                                                    </table>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </section>
                                                         
                                                
                                        
                                </div>
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