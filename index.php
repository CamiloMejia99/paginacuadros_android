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

    <script >
		var btnwpp = new Audio();
		btnwpp.src="static/audios/Whatsapp.mp3"
	</script>
   
</head>

<body class="hold-transition sidebar-mini layout-fixed" background="static/img/fondo3.png">
   
	<header>
		<nav id="navbar-example2" class="navbar px-3 mb-3" style="background-color: #007bff;" >
			<a class="navbar-brand text-white" href=""> 
                <img src="static/img/logonegro.png" class="d-block" height="40">
            </a>
			<ul class="nav nav-pillss">
				<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle text-white" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">Cuentas</a>
					<ul class="dropdown-menu">
						<li><a class="dropdown-item" href="registro.php">Registro</a></li>
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
	<div class="row h-100 justify-content-center align-items-center ">
		<div class="card col-10 border-black" style="background-color: #F0F2EE;" >
			<br>
			<div data-bs-spy="scroll" data-bs-target="#navbar-example2" data-bs-root-margin="0px 0px -40%" data-bs-smooth-scroll="true" class="scrollspy-example  p-3 rounded-2 text-black" tabindex="0">
				<h4 id="scrollspyHeading1" align="center"><b><i>CUADROS Y MAS CUADROS</i></b></h4>
				<p>
					<div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel" align="center">
						<div class="carousel-inner">
							<div class="carousel-item active">
								<img src="static/img/cuadrolog1.png" class="d-block" height="150">
							</div>
							<div class="carousel-item">
								<img src="static/img/cuadrolog2.png" class="d-block" height="150">
							</div>
							<div class="carousel-item">
								<img src="static/img/cuadrolog3.png" class="d-block" height="150">
							</div>
						</div>
						<button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
							<span class="carousel-control-prev-icon"  aria-hidden="true"></span>
							<span class="visually-hidden">Previous</span>
						</button>
						<button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
							<span class="carousel-control-next-icon "  aria-hidden="true"></span>
							<span class="visually-hidden">Next</span>
						</button>
					</div>
					<br>
					<div class="card mb-3">
						<div class="row g-0" style="background-color: #DADED6;">
							<div class="col-md-4">
								<form class="row g-3" name="contacto" method="POST" action="templates/IniciarSesion.php">
									<div class="container" align="center">
										<br>
										<table class="table table-striped">
											<tr align="center" valign="middle">
												<td>
													Codigo:
													<input type="text" name="codigo" placeholder="Ingrese codigo" class="form-control" id="validationDefault05" required>
												</td>
											</tr>
											<tr align="center" valign="middle">
												<td>
													Contraseña:
													<input type="password" name="contraseña" autocomplete="new-password" placeholder="Ingrese contraseña" class="form-control" id="validationDefault05" required>
												</td>
											</tr>
											<tr align="center" valign="middle">
												<td colspan="4">
													<button class="btn btn-primary w-50 " name="enviar" >Iniciar Sesion</button>
												</td>
											</tr>
											<tr align="right" valign="middle">
												<td colspan="4">
													<a href="registro.php" class="card-link"><i>Registrarse</i></a>
												</td>
											</tr>
										</table>
									</div>
								</form>
							</div>
							<div class="col-md-8" style="color: #56A308;">
								<div class="card-body" align="justify">
									<div class="alert alert-secondary border-white" style="color: black;" style="background-color: black;"  role="alert" align="justify">
                                    Cuadros decorativos de todos los tamaños y diseños. <br>
									<b>¡NO TE ARREPENTIRAS!</b>
                                    
                                    
									</div>
								</div>
							</div>
						</div>
					</div>
					
				</p>
			</div>
			<br>
		</div>
	</div>
	<br>

    <footer>
        <a class="appWhatsapp" href="https://wa.me/message/BH3BJKU6EVRON1"  onmousedown="btnwpp.play()" target="_blank">
            <img src="static/img/logowpp.png" alt="WhatsApp"> 
        </a>
        <div id="fb-root"></div>
     </footer>   

        
      
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
