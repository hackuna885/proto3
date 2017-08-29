<?php 

error_reporting(E_ALL ^ E_DEPRECATED);
header("Content-Type: text/html; Charset=UTF-8");

session_start();

if (isset($_POST['txtContrasena']) && !empty($_POST['txtContrasena'])) {
	
	$criptPw = md5($_POST['txtContrasena']);

	if ($criptPw == $_SESSION['pass']) {
		$_SESSION['correcto'] = "ok";
		echo '

			<html>
				<head>
					<meta http-equiv="REFRESH" content="0; url=genEstadoCuenta.php">
				</head>
			</html>



			';
	}else{
		echo "<script> alert('ERROR, Contraseña incorrecta!');</script>";
	echo "<script> window.location='../../index.php'; </script>";
	}


}else{
	echo "<script> alert('No puedes ver esta pagina!');</script>";
	echo "<script> window.location='../../index.php'; </script>";
}



 ?>