<?php
	include("conexion.php");

	$cedula              = $_POST["cedula"];
	$nombre              = $_POST["nombre"];
	$apellidos           = $_POST["apellidos"];
	$codigoadministrador = $_POST["codigoadministrador"];
	$correo              = $_POST["correo"];
	$telefono            = $_POST["telefono"];
	$ciudad              = $_POST["ciudad"];
	$password            = $_POST["contraseña"];
	$repitepassword      = $_POST["repitecontraseña"];

	if($password == $repitepassword){
		$passwordHash = password_hash($password, PASSWORD_BCRYPT);

		$consultaId = "SELECT CodigoAdministrador FROM administrador WHERE CodigoAdministrador = '$codigoadministrador' ";
		$consultaId = mysqli_query($conexion, $consultaId);
		$consultaId = mysqli_fetch_array($consultaId);
	
		$consultaCedula = "SELECT Cedula FROM persona WHERE Cedula = '$cedula' ";
		$consultaCedula = mysqli_query($conexion, $consultaCedula);
		$consultaCedula = mysqli_fetch_array($consultaCedula);

			if(!$consultaCedula){
				if(!$consultaId){
					$sql = "INSERT INTO persona VALUES ('$cedula', '$nombre', '$apellidos', '$correo', '$telefono', '$ciudad')";
					$sql1 = "INSERT INTO administrador VALUES ('$codigoadministrador','$cedula','$passwordHash')";
					if(mysqli_query($conexion, $sql) && mysqli_query($conexion, $sql1) ) {
						echo '<script language="javascript">alert("cuenta creada exitosamente");window.location.href="../index.php"</script>';
					}else{
						echo "Error" . $sql . $sql1 . "<br>" . 
						mysqli_error($conexion);
					}
				}else{
					echo '<script language="javascript">alert("El Codigo ya existe");window.location.href="../registro.php"</script>';
				}
			}else{
				echo '<script language="javascript">alert("Ya existe un registro con ese numero de cedula");window.location.href="../registro.php"</script>';
			}
		
	}else{
		echo '<script language="javascript">alert("Contraseñas no coinciden");window.location.href="../registro.php"</script>';
	}
	mysqli_close($conexion);
?>