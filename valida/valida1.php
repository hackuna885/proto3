<?php 

error_reporting(E_ALL ^ E_DEPRECATED);
header("Content-Type: text/html; Charset=UTF-8");

session_start();

if (isset($_POST['txtCorreo']) && !empty($_POST['txtCorreo'])) {

	$con = new SQLite3("../protected/data/usuarios.db") or die("Problemas para conectar");
	$cs = $con -> query("SELECT * FROM login WHERE correo = '$_POST[txtCorreo]'");

	while ($resul = $cs -> fetchArray()) {
		$nombre = $resul['nombre'];
		$aPaterno = $resul['aPaterno'];
		$aMaterno = $resul['aMaterno'];
		$correo = $resul['correo'];
		$pwUsuario = $resul['password'];
		$clvCat = $resul['claveCat'];
	}
	
	if ($_POST['txtCorreo'] == $correo) {

		$_SESSION['pass'] = $pwUsuario;
		$_SESSION['clvCat'] = $clvCat;

			echo '
				<input type="password" id="txtPassword" onkeypress="btnFormAjax2(event)" placeholder="Password..."/>
				<br>
				<button type="button" onclick="formAjax3()">Acceder</button>
			';
		$con -> close();
		
	}else{
		echo '
		Correo no registrado
		<br>
			<button type="button" onclick="formAjax2()">Continuar</button>

		';
		$con -> close();
	}
}else{
	echo'
	Falta Correo
	<br>
			<button type="button" onclick="formAjax2()">Continuar</button>
	';
}

 ?>
 <html>
 	<style>
 		.btnOcultar{
 			display: none;
 		}
 	</style>
	
 </html>