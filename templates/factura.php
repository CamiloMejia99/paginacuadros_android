<?php
$inc = include("Conexion.php");
include("validarSesion.php");
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Nombre del sitio web</title>
    <link rel="stylesheet" type="text/css" href="../static/css/estilofac.css">
    <link rel="stylesheet" type="text/css" href="../static/css/estilo.css">
    <script src="../static/js/funciones.js"></script>
    <script src="../static/js/app.js" async></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
  </head>
  <body>

  <?php 
if($inc){
  $con = "SELECT Cedula, Nombres, Apellidos, Ciudad, Telefono FROM Persona WHERE Cedula = (SELECT Cedula FROM administrador WHERE CodigoAdministrador = '$_SESSION[codigoadministrador]') ";
  $res = mysqli_query($conexion,$con);
    if($res){
        while ($r = $res->fetch_array()){
            $cc = $r['Cedula'];
            $n = $r['Nombres'];
            $a = $r['Apellidos'];
            $ci = $r['Ciudad'];
            $tel = $r['Telefono'];
?>
            <div class="container" align="center">
              
              <span class="close" onclick="closeModal()">&times;</span>
              <h2>Información de envío</h2>
              <p><strong>FACTURA: #</strong> <span id="numero"></span></p>
              <p><strong>IDENTIFICACION:</strong> <span id="usuario"><?php echo $cc; ?></span></p>
              <p><strong>NOMBRE:</strong> <span id="nombre"><?php echo $n; ?></span></p>
              <p><strong>APELLIDO:</strong> <span id="apellido"><?php echo $a; ?></span></p>
              <p><strong>TELEFONO:</strong> <span id="telefono"><?php echo $tel; ?></span></p>
              <p><strong>CIUDAD DE ENVIO:</strong> <span id="ciudadEnvio"><?php echo $ci; ?></span></p>
              <p><strong>INGRESE DIRECCION DE ENVIO:</strong></p>
              <input type="text" id="lugarEnvio"><br>
              <a>Eje (B/Santander Cra-6 Casa #6A-51)</a>
              <p><strong>INFORMACION DE ENVIO:</strong><br>
                2 SENCILLO - CANTIDAD = 1<br>
                4 SENCILLO - CANTIDAD = 2<br>
                8 TRIPTICO - CANTIDAD = 3
              <span id="informacionEnvio"></span></p>
              <p><strong>TOTAL_PAGAR:</strong> <span id="totalPagar">
              $305.000,00	
              </span></p>
				
                
              <button onclick="realizarEnvio()" style="background-color: yellow; font-size: 18px;">Realizar envío</button>
						  <button onclick="cancelarEnvio()" style="background-color: red; font-size: 18px;">Cancelar envío</button>
              
            </div>
<?php
        }
    }
}
?>


  <script>
    var numeroAleatorio = Math.floor(Math.random() * 10000) + 10000;
    document.getElementById("numero").innerHTML = numeroAleatorio;


  </script>
  <script>

function realizarEnvio() {
var lugarEnvio = document.getElementById("lugarEnvio").value;
if (lugarEnvio.trim() === "") {
  alert("Debe ingresar un lugar de envío válido.");
  return false;
} else if (!/^([a-zA-Z0-9áéíóúñÑÁÉÍÓÚ\s,'-\/#])*$/g.test(lugarEnvio)) {
  alert("El lugar de envío debe contener solo letras, números, espacios y los caracteres ', - / y #. ");
  return false;
} else {
  mostrarEnvioExitoso();
  return true;
}
}

function cancelarEnvio() {
if (confirm("¿Está seguro que desea cancelar el envío?")) {
  alert("Envío cancelado.");
  closeModal();
  window.location.href = "../menu.php";
}
}

function mostrarEnvioExitoso() {
  var l1;
  l1 = document.getElementById("lugarEnvio").value;
  alert("El envío se realizará por servientrega a la ruta especificada: " + " " + l1);
  closeModal();
  window.location.href = "../menu.php";
  
}

function closeModal() {
// código para cerrar el modal
}
    
</script>
  


  </body>
</html>
