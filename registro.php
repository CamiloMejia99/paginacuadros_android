<!DOCTYPE html> 
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Iniciar sesion</title>
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

   
</head>

<body class="hold-transition sidebar-mini layout-fixed"background="static/img/fondo3.png">
<header>
		<nav id="navbar-example2" class="navbar px-3 mb-3" style="background-color: #007bff;" >
			<a class="navbar-brand text-white" href=""> 
                <img src="static/img/logonegro.png" class="d-block" height="40">
            </a>
			<ul class="nav nav-pillss">
				<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle text-white" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">Cuentas</a>
					<ul class="dropdown-menu">
						<li><a class="dropdown-item" href="index.php">Inicio</a></li>
						<li><hr class="dropdown-divider"></li>
						<li><a class="dropdown-item" href="https://www.facebook.com/Cuadrosymascuadros999">Facebook</a></li>
						<li><hr class="dropdown-divider"></li>
						<li><a class="dropdown-item" href="https://instagram.com/cuadros_y.mas_cuadros?igshid=YmMyMTA2M2Y=">Instagram</a></li>
						<li><hr class="dropdown-divider"></li>
						<li><a class="dropdown-item" href="https://www.tiktok.com/@cuadros_y.mas_cuadros">TikTok</a></li>
					</ul>
				</li>
			</ul>
		</nav>
</header>
   
<br>
                        <div id="contenedor" class="col-12" align="center">
                              <div class="card bg-transparent ">
                                    <div class="card-body">
                                          <form class="row g-3" name="nuevo administrador" method="POST" action="templates/ConexionCrearUsuarioAdministrador.php">
                                                <table class="table table-success table-striped">
                                                      <tr align="center" valign="middle">
                                                             <td>
                                                                  Codigo:
                                                            </td>
                                                            <td>
                                                                  <input type="text" name="codigoadministrador" placeholder="Codigo" class="form-control" id="validationDefault05" required>
                                                            </td>
                                                      </tr>
                                                      <tr align="center" valign="middle">
                                                            <td>
                                                                  Cedula:
                                                            </td>
                                                            <td>
                                                                  <input type="number" name="cedula" placeholder="Cedula" class="form-control" id="validationDefault01" required>
                                                            </td>
                                                      </tr>
                                                      <tr align="center" valign="middle">
                                                            <td>
                                                                  Nombre:
                                                            </td>
                                                            <td>
                                                                  <input type="text" name="nombre" placeholder="Nombre" class="form-control" id="validationDefault01" required>
                                                            </td>
                                                      </tr>
                                                      <tr align="center" valign="middle">
                                                            <td>
                                                                  Apellidos:
                                                            </td>
                                                            <td>
                                                                  <input type="text" name="apellidos" placeholder="Apellido" class="form-control" id="validationDefault02" required>
                                                            </td>
                                                      </tr>
                                                      <tr align="center" valign="middle">
                                                            <td>
                                                                  E-mail:
                                                            </td>
                                                            <td>
                                                                  <div class="input-group">
                                                                        <span class="input-group-text" id="inputGroupPrepend2">@</span>
                                                                        <input type="email" name="correo" placeholder="Email" class="form-control" id="validationDefaultUsername"  aria-describedby="inputGroupPrepend2" required>
                                                                  </div>
                                                            </td>
                                                      </tr>
                                                      <tr align="center" valign="middle">
                                                            <td>
                                                                  Telefono:
                                                            </td>
                                                            <td>
                                                                  <input type="phone" name="telefono" placeholder="Telefono" class="form-control" id="validationDefault05" required>
                                                            </td>
                                                      </tr>
                                                      <tr align="center" valign="middle">
                                                            <td>
                                                                  Ciudad:
                                                            </td>
                                                            <td>
                                                                  <input type="text" name="ciudad" placeholder="Ciudad" class="form-control" id="validationDefault05" required>
                                                            </td>
                                                      </tr>
                                                      <tr align="center" valign="middle">
                                                            <td>
                                                                  Contraseña:
                                                            </td>
                                                            <td>
                                                                  <input type="password" name="contraseña" autocomplete="new-password" placeholder="Contraseña" class="form-control" id="validationDefault05" required>
                                                            </td>
                                                      </tr>
                                                      <tr align="center" valign="middle">
                                                            <td>
                                                                  Repite Contraseña:
                                                            </td>
                                                            <td>
                                                                  <input type="password" name="repitecontraseña" autocomplete="new-password" placeholder="Contraseña" class="form-control" id="validationDefault05" required>
                                                            </td>
                                                      </tr>
                                                      <tr align="center" valign="middle">
                                                            <td colspan="2">
                                                                  <button class="btn btn-success border-dark w-50" type="submit" name="enviar">Aceptar</button>
                                                            </td>
                                                      </tr>
                                                </table>	
                                          </form>
                                          <table align="center">
                                                <td>
                                                <a href="index.php" class="btn btn-danger border-dark text-white">Volver</a> 
                                                </td>
                                          </table>
                                    </div>
                              </div>
                        
                             
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
