<?php 

error_reporting(E_ALL ^ E_DEPRECATED);
header("Content-Type: text/html; Charset=UTF-8");

session_start();

if (isset($_POST['txtCorreo']) && !empty($_POST['txtCorreo'])) {

	$correo = "";

	$con = new SQLite3("../data/usuarios.db") or die("Problemas para conectar");
	$cs = $con -> query("SELECT * FROM login WHERE correo = '$_POST[txtCorreo]'");

	while ($resul = $cs -> fetchArray()) {
		$nombre = $resul['nombre'];
		$aPaterno = $resul['aPaterno'];
		$aMaterno = $resul['aMaterno'];
		$correo = $resul['correo'];
		$pwUsuario = $resul['password'];
		$clvCat = $resul['claveCat'];
	}

	if ($correo == $_POST['txtCorreo']) {
		$_SESSION['pass'] = $pwUsuario;
		$_SESSION['clvCat'] = $clvCat;
		echo ' 
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<title>Registro</title>
	<link rel="stylesheet" href="../../css/style.css">
</head>
<body>
<div id="main-wrapper">

	<div class="cuadroRegGral">
	
	<header>
		<img src="../../css/img/predial.svg" class="predialLogo">
		<br>
		<h3 class="subTitulo">Bien venido:</h3>
		<br>
	</header>
	<div class="logoLogin">
	<br>
		<img src="../../css/img/loginImgNR.svg" class="logLoginNR">
		<br>
	</div>

		<form action="comproDos.php" method="post">
			<p class="infoTxtInput">';echo $nombre . ' ' .$aMaterno. ' '. $aMaterno ; echo'</p>
			<input type="password" name="txtContrasena" class="formText" placeholder="Contraseña"  required/>
			<br>
			<input type="submit" value="Iniciar" class="btnLoginUno" />
		</form>
		<br>
		<a href="../../index.php" class="aliDerecha">Regresar...</a>
		<div class="marcaAgua">
		<img src="../../css/img/agua.svg" class="marcaAguaX">
	</div>
	</div>
	

</div>
		
</body>
</html>

'
;

$con -> close();
	}else{
		echo "<script> alert('Usuario no registrado');</script>";
		echo "<script> window.location='../../index.php'; </script>";
	}


	

}else{
	echo "<script> alert('Falta Correo!'); </script>";
	echo "<script> window.location='../../index.php'; </script>";
}


 ?>

