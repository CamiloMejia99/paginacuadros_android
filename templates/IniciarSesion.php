<?php
	include("conexion.php");
	
	
	session_start();
	$_SESSION['login'] = false;

	$codigo   = $_POST["codigo"];
	$password = $_POST["contraseña"];
	
	$consulta = "SELECT * FROM administrador WHERE CodigoAdministrador = '$codigo' ";
	$consulta = mysqli_query($conexion, $consulta);
	$consulta = mysqli_fetch_array($consulta);
	
	$consulta1 = "SELECT * FROM persona WHERE Cedula = (SELECT Cedula FROM administrador WHERE CodigoAdministrador='$codigo')";
	$consulta1 = mysqli_query($conexion, $consulta1);
	$consulta1 = mysqli_fetch_array($consulta1);

	if($consulta && $consulta1){
		if(password_verify($password, $consulta['Password'])){
			$_SESSION['login']               = true; 
			$_SESSION['cedula']              = $consulta1['Cedula'];
			$_SESSION['nombre']              = $consulta1['Nombres'];
			$_SESSION['apellidos']           = $consulta1['Apellidos'];
			$_SESSION['correo']              = $consulta1['Correo'];
			$_SESSION['telefono']            = $consulta1['Telefono'];
			$_SESSION['ciudad']              = $consulta1['Ciudad'];
			$_SESSION['codigoadministrador'] = $consulta['CodigoAdministrador'];
			
			header('Location: ../menu.php');
			
		}else{
			echo '<script language="javascript">alert("Contraseña incorrecta.");window.location.href="../index.php"</script>';
		}
	}else{		
		echo '<script language="javascript">alert("Usuario NO existe.");window.location.href="../index.php"</script>';	
	}
	mysqli_close($conexion);
?>