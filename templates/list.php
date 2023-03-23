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
    <link rel="icon" type="image/x-icon" href="../static/img/icon_pag.png">
    <link rel="stylesheet" type="text/css" href="../static/css/style.css">
    <link rel="stylesheet" type="text/css" href="../static/css/estilo.css">
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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
    <script type="text/javascript" src="../static/js/bootstrap.min.js"></script>
    <script src="../static/js/app.js" async></script>

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
        <button class="btn btn-warning w-50 "  > Menu Principal </button>
    </form>
   
    <div class="col-12" align="center" >
       
        
        
        <section class="contenedor">
            <!-- Contenedor de elementos -->
            <div class="contenedor-items">
                <table  style="background-color: white;">
                    <tr>
                        <td colspan="2" align="center">
                            <div class="carrito" id="carrito">
                                <div class="header-carrito">
                                    <h2>Tu Carrito</h2>
                                </div>

                                <div class="carrito-items">
                                    
                                </div>
                                <div class="carrito-total">
                                    <div class="fila">
                                        <strong>Tu Total</strong>
                                        <span class="carrito-precio-total">
                                            $120.000,00
                                        </span>
                                    </div>
                                    
                                    <a href="factura.php" class="btn btn-pagar" id="btnSolicitarEnvio">Solicitar Envío
                                        <i class="fa-solid fa-bag-shopping"></i>
                                    </a>
                                </div>
                                
                            </div>
                        </td>
                    </tr>
                </table>
                
                <table  style="background-color: white;">
                    <tr>
                        <td>
                            <div class="item">
                                <span class="titulo-item">1 SENCILLO</span>
                                <span class="subtitulo">15x30 cm <br>Una Pieza</span>
                                <img src="../static/img/c1.png" alt="" class="img-item">
                                <span class="precio-item">$13.000</span>
                                <button onclick="agregar()" class="boton-item">Agregar al Carrito</button>
                                <button class="btn-detalle" onclick="mostrarDetalles()">Ver más detalles</button>
                            </div>
                        </td>
                        <td>
                            <div class="item">
                                <span class="titulo-item">2 SENCILLO</span>
                                <span class="subtitulo">23x23 cm <br>Una Pieza</span>
                                <img src="../static/img/c2.png" alt="" class="img-item">
                                <span class="precio-item">$15.000</span>
                                <button  onclick="agregar()" class="boton-item">Agregar al Carrito</button>
                                <button class="btn-detalle" onclick="mostrarDetalles1()">Ver más detalles</button>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="item">
                                <span class="titulo-item">3 SENCILLO</span>
                                <span class="subtitulo">30x40 cm <br>Una Pieza</span>
                                <img src="../static/img/c3.png" alt="" class="img-item">
                                <span class="precio-item">$20.000</span>
                                <button  onclick="agregar()" class="boton-item">Agregar al Carrito</button>
                                <button class="btn-detalle" onclick="mostrarDetalles2()">Ver más detalles</button>
                            </div>
                        </td>
                        <td>
                            <div class="item">
                                <span class="titulo-item">4 SENCILLO</span>
                                <span class="subtitulo">40x60 cm <br>Una Pieza</span>
                                <img src="../static/img/c4.png" alt="" class="img-item">
                                <span class="precio-item">$40.000</span>
                                <button  onclick="agregar()" class="boton-item">Agregar al Carrito</button>
                                <button class="btn-detalle" onclick="mostrarDetalles3()">Ver más detalles</button>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="item">
                                <span class="titulo-item">5 TRIPTICO</span>
                                <span class="subtitulo">35x25 cm <br>Tres Piezas</span>
                                <img src="../static/img/c5.png" alt="" class="img-item">
                                <span class="precio-item">$21.000</span>
                                <button  onclick="agregar()" class="boton-item">Agregar al Carrito</button>
                                <button class="btn-detalle" onclick="mostrarDetalles4()">Ver más detalles</button>
                            </div> 
                        </td>
                        <td>
                            <div class="item">
                                <span class="titulo-item">6 TRIPTICO</span>
                                <span class="subtitulo">60x50 cm <br>Tres Piezas</span>
                                <img src="../static/img/c6.png" alt="" class="img-item">
                                <span class="precio-item">$47.000</span>
                                <button  onclick="agregar()" class="boton-item">Agregar al Carrito</button>
                                <button class="btn-detalle" onclick="mostrarDetalles5()">Ver más detalles</button>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="item">
                                <span class="titulo-item">7 TRIPTICO</span>
                                <span class="subtitulo">80x55 cm <br>Tres Piezas</span>
                                <img src="../static/img/c7.png" alt="" class="img-item">
                                <span class="precio-item">$55.000</span>
                                <button  onclick="agregar()" class="boton-item">Agregar al Carrito</button>
                                <button class="btn-detalle" onclick="mostrarDetalles6()">Ver más detalles</button>
                            </div>
                        </td>
                        <td>
                            <div class="item">
                                <span class="titulo-item">8 TRIPTICO</span>
                                <span class="subtitulo">90x40 cm <br>Tres Piezas</span>
                                <img src="../static/img/c8.png" alt="" class="img-item">
                                <span class="precio-item">$70.000</span>
                                <button  onclick="agregar()" class="boton-item">Agregar al Carrito</button>
                                <button class="btn-detalle" onclick="mostrarDetalles7()">Ver más detalles</button>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="item">
                                <span class="titulo-item">9 POLIPTICO</span>
                                <span class="subtitulo">90x60 cm <br>Cinco Piezas</span>
                                <img src="../static/img/c9.png" alt="" class="img-item">
                                <span class="precio-item">$73.800</span>
                                <button  onclick="agregar()" class="boton-item">Agregar al Carrito</button>
                                <button class="btn-detalle" onclick="mostrarDetalles8()">Ver más detalles</button>
                            </div>
                        </td>
                        <td>
                            <div class="item">
                                <span class="titulo-item">10 POLIPTICO</span>
                                <span class="subtitulo">100x70 cm <br>Cinco Piezas</span>
                                <img src="../static/img/c10.png" alt="" class="img-item">
                                <span class="precio-item">$98.800</span>
                                <button  onclick="agregar()" class="boton-item">Agregar al Carrito</button>
                                <button class="btn-detalle" onclick="mostrarDetalles9()">Ver más detalles</button>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="item">
                                <span class="titulo-item">11 POLIPTICO</span>
                                <span class="subtitulo">110x75 cm <br>Cinco Piezas</span>
                                <img src="../static/img/c11.png" alt="" class="img-item">
                                <span class="precio-item">$117.800</span>
                                <button  onclick="agregar()" class="boton-item">Agregar al Carrito</button>
                                <button class="btn-detalle" onclick="mostrarDetalles10()">Ver más detalles</button>
                            </div>
                        </td>
                        <td>
                            <div class="item">
                                <span class="titulo-item">12 POLIPTICO</span>
                                <span class="subtitulo">95x65 cm <br>Cuatro Piezas</span>
                                <img src="../static/img/c12.png" alt="" class="img-item">
                                <span class="precio-item">$80.800</span>
                                <button  onclick="agregar()" class="boton-item">Agregar al Carrito</button>
                                <button class="btn-detalle" onclick="mostrarDetalles11()">Ver más detalles</button>
                            </div>
                        </td>
                    </tr>
                </table>
                </div>
                    <!-- Carrito de Compras -->
                    

                    <!-- Ventana emergente de detalles -->
                    <div id="detalles" class="detalles">
                        <div class="detalles-content">
                            <span class="cerrar" onclick="cerrarDetalles()">&times;</span>
                            <h3>Detalles del Producto</h3>
                            <div class="item">
                                <span class="titulo-item">SENCILLO</span>
                                <span class="subtitulo">15x30 cm <br>Una Pieza</span>
                                <img src="../static/img/c1.png" alt="" class="img-item">
                                <span class="precio-item">$13.000</span>
                            </div>
                        </div>
                    </div>
                </div>

                    <!-- Ventana emergente de detalles1 -->
                    <div id="detalles1" class="detalles1">
                        <div class="detalles-content1">
                            <span class="cerrar1" onclick="cerrarDetalles1()">&times;</span>
                            <h3>Detalles del Producto</h3>
                            <div class="item">
                                <span class="titulo-item">SENCILLO</span>
                                <span class="subtitulo">15x30 cm <br>Una Pieza</span>
                                <img src="../static/img/c2.png" alt="" class="img-item">
                                <span class="precio-item">$13.000</span>
                            </div>
                        </div>
                    </div>
                </div>

                    <!-- Ventana emergente de detalles2 -->
                    <div id="detalles2" class="detalles2">
                        <div class="detalles-content2">
                            <span class="cerrar2" onclick="cerrarDetalles2()">&times;</span>
                            <h3>Detalles del Producto</h3>
                            <div class="item">
                                <span class="titulo-item">SENCILLO</span>
                                <span class="subtitulo">15x30 cm <br>Una Pieza</span>
                                <img src="../static/img/c3.png" alt="" class="img-item">
                                <span class="precio-item">$13.000</span>
                            </div>
                        </div>
                    </div>
                </div>

                    <!-- Ventana emergente de detalles3 -->
                    <div id="detalles3" class="detalles3">
                        <div class="detalles-content3">
                            <span class="cerrar3" onclick="cerrarDetalles3()">&times;</span>
                            <h3>Detalles del Producto</h3>
                            <div class="item">
                                <span class="titulo-item">SENCILLO</span>
                                <span class="subtitulo">15x30 cm <br>Una Pieza</span>
                                <img src="../static/img/c4.png" alt="" class="img-item">
                                <span class="precio-item">$13.000</span>
                            </div>
                        </div>
                    </div>
                    </div>

                    <!-- Ventana emergente de detalles4 -->
                    <div id="detalles4" class="detalles4">
                        <div class="detalles-content4">
                            <span class="cerrar4" onclick="cerrarDetalles4()">&times;</span>
                            <h3>Detalles del Producto</h3>
                            <div class="item">
                                <span class="titulo-item">SENCILLO</span>
                                <span class="subtitulo">15x30 cm <br>Una Pieza</span>
                                <img src="../static/img/c5.png" alt="" class="img-item">
                                <span class="precio-item">$13.000</span>
                            </div>
                        </div>
                    </div>
                    </div>

                        <!-- Ventana emergente de detalles5 -->
                        <div id="detalles5" class="detalles5">
                            <div class="detalles-content5">
                                <span class="cerrar5" onclick="cerrarDetalles5()">&times;</span>
                                <h3>Detalles del Producto</h3>
                                <div class="item">
                                    <span class="titulo-item">SENCILLO</span>
                                    <span class="subtitulo">15x30 cm <br>Una Pieza</span>
                                    <img src="../static/img/c6.png" alt="" class="img-item">
                                    <span class="precio-item">$13.000</span>
                                </div>
                            </div>
                        </div>
                        </div>

                        <!-- Ventana emergente de detalles6 -->
                        <div id="detalles6" class="detalles6">
                            <div class="detalles-content6">
                                <span class="cerrar6" onclick="cerrarDetalles6()">&times;</span>
                                <h3>Detalles del Producto</h3>
                                <div class="item">
                                    <span class="titulo-item">SENCILLO</span>
                                    <span class="subtitulo">15x30 cm <br>Una Pieza</span>
                                    <img src="../static/img/c7.png" alt="" class="img-item">
                                    <span class="precio-item">$13.000</span>
                                </div>
                            </div>
                        </div>
                        </div>

                        <!-- Ventana emergente de detalles7 -->
                        <div id="detalles7" class="detalles7">
                            <div class="detalles-content7">
                                <span class="cerrar7" onclick="cerrarDetalles7()">&times;</span>
                                <h3>Detalles del Producto</h3>
                                <div class="item">
                                    <span class="titulo-item">SENCILLO</span>
                                    <span class="subtitulo">15x30 cm <br>Una Pieza</span>
                                    <img src="../static/img/c8.png" alt="" class="img-item">
                                    <span class="precio-item">$13.000</span>
                                </div>
                            </div>
                        </div>
                        </div>

                        <!-- Ventana emergente de detalles8 -->
                        <div id="detalles8" class="detalles8">
                            <div class="detalles-content8">
                                <span class="cerrar8" onclick="cerrarDetalles8()">&times;</span>
                                <h3>Detalles del Producto</h3>
                                <div class="item">
                                    <span class="titulo-item">SENCILLO</span>
                                    <span class="subtitulo">15x30 cm <br>Una Pieza</span>
                                    <img src="../static/img/c9.png" alt="" class="img-item">
                                    <span class="precio-item">$13.000</span>
                                </div>
                            </div>
                        </div>
                        </div>

                        <!-- Ventana emergente de detalles9 -->
                        <div id="detalles9" class="detalles9">
                            <div class="detalles-content9">
                                <span class="cerrar9" onclick="cerrarDetalles9()">&times;</span>
                                <h3>Detalles del Producto</h3>
                                <div class="item">
                                    <span class="titulo-item">SENCILLO</span>
                                    <span class="subtitulo">15x30 cm <br>Una Pieza</span>
                                    <img src="../static/img/c10.png" alt="" class="img-item">
                                    <span class="precio-item">$13.000</span>
                                </div>
                            </div>
                        </div>
                        </div>

                        <!-- Ventana emergente de detalles10 -->
                        <div id="detalles10" class="detalles10">
                            <div class="detalles-content10">
                                <span class="cerrar10" onclick="cerrarDetalles10()">&times;</span>
                                <h3>Detalles del Producto</h3>
                                <div class="item">
                                    <span class="titulo-item">SENCILLO</span>
                                    <span class="subtitulo">15x30 cm <br>Una Pieza</span>
                                    <img src="../static/img/c11.png" alt="" class="img-item">
                                    <span class="precio-item">$13.000</span>
                                </div>
                            </div>
                        </div>
                        </div>

                        <!-- Ventana emergente de detalles11 -->
                        <div id="detalles11" class="detalles11">
                            <div class="detalles-content11">
                                <span class="cerrar11" onclick="cerrarDetalles11()">&times;</span>
                                <h3>Detalles del Producto</h3>
                                <div class="item">
                                    <span class="titulo-item">SENCILLO</span>
                                    <span class="subtitulo">15x30 cm <br>Una Pieza</span>
                                    <img src="../static/img/c12.png" alt="" class="img-item">
                                    <span class="precio-item">$13.000</span>
                                </div>
                            </div>
                        </div>
                        </div>
        </section>


    </div>
    <br>
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
<script>
        // MOSTRAR DETALLES
    var detalles = document.getElementById("detalles");
    var btnCerrarDetalles = document.getElementsByClassName("cerrar")[0];
    
    function mostrarDetalles() {
        detalles.style.display = "block";
    }
    
    function cerrarDetalles() {
        detalles.style.display = "none";
    }
    
    btnCerrarDetalles.onclick = function() {
        detalles.style.display = "none";
    };

        // MOSTRAR DETALLES 1
    var detalles1 = document.getElementById("detalles1");
    var btnCerrarDetalles1 = document.getElementsByClassName("cerrar1")[0];
    
    function mostrarDetalles1() {
        detalles1.style.display = "block";
    }
    
    function cerrarDetalles1() {
        detalles1.style.display = "none";
    }
    
    btnCerrarDetalles1.onclick = function() {
        detalles1.style.display = "none";
    };

        // MOSTRAR DETALLES 2
    var detalles2 = document.getElementById("detalles2");
    var btnCerrarDetalles2 = document.getElementsByClassName("cerrar2")[0];
    
    function mostrarDetalles2() {
        detalles2.style.display = "block";
    }
    
    function cerrarDetalles2() {
        detalles2.style.display = "none";
    }
    
    btnCerrarDetalles2.onclick = function() {
        detalles2.style.display = "none";
    };

        // MOSTRAR DETALLES 3
    var detalles3 = document.getElementById("detalles3");
    var btnCerrarDetalles3 = document.getElementsByClassName("cerrar3")[0];
    
    function mostrarDetalles3() {
        detalles3.style.display = "block";
    }
    
    function cerrarDetalles3() {
        detalles3.style.display = "none";
    }
    
    btnCerrarDetalles3.onclick = function() {
        detalles3.style.display = "none";
    };

        // MOSTRAR DETALLES 4
    var detalles4 = document.getElementById("detalles4");
    var btnCerrarDetalles4 = document.getElementsByClassName("cerrar4")[0];
    
    function mostrarDetalles4() {
        detalles4.style.display = "block";
    }
    
    function cerrarDetalles4() {
        detalles4.style.display = "none";
    }
    
    btnCerrarDetalles4.onclick = function() {
        detalles4.style.display = "none";
    };

        // MOSTRAR DETALLES 5
    var detalles5 = document.getElementById("detalles5");
    var btnCerrarDetalles5 = document.getElementsByClassName("cerrar5")[0];
    
    function mostrarDetalles5() {
        detalles5.style.display = "block";
    }
    
    function cerrarDetalles5() {
        detalles5.style.display = "none";
    }
    
    btnCerrarDetalles5.onclick = function() {
        detalles5.style.display = "none";
    };

        // MOSTRAR DETALLES 6
    var detalles6 = document.getElementById("detalles6");
    var btnCerrarDetalles6 = document.getElementsByClassName("cerrar6")[0];
    
    function mostrarDetalles6() {
        detalles6.style.display = "block";
    }
    
    function cerrarDetalles6() {
        detalles6.style.display = "none";
    }
    
    btnCerrarDetalles6.onclick = function() {
        detalles6.style.display = "none";
    };

        // MOSTRAR DETALLES 7
    var detalles7 = document.getElementById("detalles7");
    var btnCerrarDetalles7 = document.getElementsByClassName("cerrar7")[0];
    
    function mostrarDetalles7() {
        detalles7.style.display = "block";
    }
    
    function cerrarDetalles7() {
        detalles7.style.display = "none";
    }
    
    btnCerrarDetalles7.onclick = function() {
        detalles7.style.display = "none";
    };

        // MOSTRAR DETALLES 8
    var detalles8 = document.getElementById("detalles8");
    var btnCerrarDetalles8 = document.getElementsByClassName("cerrar8")[0];
    
    function mostrarDetalles8() {
        detalles8.style.display = "block";
    }
    
    function cerrarDetalles8() {
        detalles8.style.display = "none";
    }
    
    btnCerrarDetalles8.onclick = function() {
        detalles8.style.display = "none";
    };

        // MOSTRAR DETALLES 9
    var detalles9 = document.getElementById("detalles9");
    var btnCerrarDetalles9 = document.getElementsByClassName("cerrar9")[0];
    
    function mostrarDetalles9() {
        detalles9.style.display = "block";
    }
    
    function cerrarDetalles9() {
        detalles9.style.display = "none";
    }
    
    btnCerrarDetalles9.onclick = function() {
        detalles9.style.display = "none";
    };

        // MOSTRAR DETALLES 10
    var detalles10 = document.getElementById("detalles10");
    var btnCerrarDetalles10 = document.getElementsByClassName("cerrar10")[0];
    
    function mostrarDetalles10() {
        detalles10.style.display = "block";
    }
    
    function cerrarDetalles10() {
        detalles10.style.display = "none";
    }
    
    btnCerrarDetalles10.onclick = function() {
        detalles10.style.display = "none";
    };

        // MOSTRAR DETALLES 11
    var detalles11 = document.getElementById("detalles11");
    var btnCerrarDetalles11 = document.getElementsByClassName("cerrar11")[0];
    
    function mostrarDetalles11() {
        detalles11.style.display = "block";
    }
    
    function cerrarDetalles11() {
        detalles11.style.display = "none";
    }
    
    btnCerrarDetalles11.onclick = function() {
        detalles11.style.display = "none";
    };

    
</script>
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