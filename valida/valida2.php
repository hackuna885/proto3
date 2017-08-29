<?php 

session_start();

if (isset($_POST['txtPassword']) && !empty($_POST['txtPassword'])) {
	
	if ($_SESSION['pass'] == md5($_POST['txtPassword'])) {
		echo '
			
			<html>
				<head>
					<meta http-equiv="REFRESH" content="0; url=acceso/EstadoDeCuenta.php">
				</head>
			</html>

		';
	}else{
		echo "Password Incorrecto";
	}
}else{

	echo '
		<input type="password" id="txtPassword" onkeypress="btnFormAjax2(event)" placeholder="Password..."/>
		<br>
		Falta Password
	';

}

 ?>