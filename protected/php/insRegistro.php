<?php 

error_reporting(E_ALL ^ E_DEPRECATED);
header("Content-Type: text/html; Charset=UTF-8");

############### Inicia Compro de Campos ###############

if (isset($_POST['txtNombre']) && !empty($_POST['txtNombre']) &&
	isset($_POST['txtAPat']) && !empty($_POST['txtAPat']) &&
	isset($_POST['txtAMat']) && !empty($_POST['txtAMat']) &&
	isset($_POST['txtCorreo']) && !empty($_POST['txtCorreo']) &&
	isset($_POST['txtPass']) && !empty($_POST['txtPass']) &&
	isset($_POST['txtClvCat']) && !empty($_POST['txtClvCat'])) {

	############### Inicia Variables ###############

	$resBus = "";

	############### Termina Variables ###############

	############### Inicia Convertidor de Variables a Mayusculas ###############

	$nombreVar = mb_strtoupper($_POST['txtNombre'], 'UTF-8');
	$aPaternoVar = mb_strtoupper($_POST['txtAPat'], 'UTF-8');
	$aMaternoVar = mb_strtoupper($_POST['txtAMat'], 'UTF-8');
	$claveCatVar = mb_strtoupper($_POST['txtClvCat'], 'UTF-8');

	############### Termina Convertidor de Variables a Mayusculas ###############

	############### Inicia Encritación de Password y Clave Catastral ###############
	$pwCode = md5($_POST['txtPass']);
	$claveCatVar = base64_encode($claveCatVar);
	############### Inicia Encritación de Password y Clave Catastral ###############


	############### Inicia Consulta a Usuarios ###############
	$con = new SQLite3("../data/usuarios.db") or die("Problemas para conectar!");

	$busCorreo = $con -> query("SELECT * FROM login WHERE correo = '$_POST[txtCorreo]'");

	while ($correoX = $busCorreo->fetchArray()) {
		$resBus = $correoX['correo'];
	}
	############### Termina Consulta a Usuarios ###############

	############### Inicia Comprobación de si existe correo ###############
	if ($resBus == $_POST['txtCorreo']) {

		############### Inicia Si si existe ###############
		echo "<script> alert('Error Correo Registrado!');</script>";
		echo "<script> window.location='registro.php';</script>";
		############### Termina Si si existe ###############

		############### Cierra conexion ###############
		$con -> close();
		############### Cierra conexion ###############
		
	}else{

		############### Inicia Si no existe ###############

	$cs = $con -> query("INSERT INTO login (nombre,aPaterno,aMaterno,correo,password,claveCat) VALUES ('$nombreVar','$aPaternoVar','$aMaternoVar','$_POST[txtCorreo]','$pwCode','$claveCatVar')");
		

	############### Cierra conexion ###############
	$con -> close();
	############### Cierra conexion ###############

	echo "<script> alert('Datos Insertados');</script>";
	echo "<script> window.location='../../index.php';</script>";
	}

	############### Termina Si no existe ###############
	############### Termina Comprobación de si existe correo ###############
}else{
	echo "<script> alert('No puedes ver esta pagina!');</script>";
	echo "<script> window.location='../../index.php';</script>";
}

############### Termina Compro de Campos ###############

 ?>