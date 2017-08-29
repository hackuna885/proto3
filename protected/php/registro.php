<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<title>Crea tu cuenta</title>
	<link rel="stylesheet" href="../../css/style.css">
	
</head>
<body>
	<div id="main-wrapper">
		<div class="cuadroRegGral2">
		<br>
			<h2>Crea tu cuenta</h2>
			<br>
				<form action="insRegistro.php" method="post">
					<p class="infoTxtInput">Nombre:</p>
					<input type="text" name="txtNombre" placeholder="Nombre" class="formText" required />
					<br>
					<p class="infoTxtInput">Apellido Paterno:</p>
					<input type="text" name="txtAPat" placeholder="Apellido Paterno" class="formText" required />
					<br>
					<p class="infoTxtInput">Apellido Materno:</p>
					<input type="text" name="txtAMat" placeholder="Apellido Materno" class="formText" required />
					<br>
					<p class="infoTxtInput">Correo Electrónico:</p>
					<input type="email" name="txtCorreo" placeholder="@correo.com" class="formText" required />
					<br>
					<p class="infoTxtInput">Contraseña:</p>
					<input type="password" name="txtPass" placeholder="Contraseña" class="formText" minlength="6" required />
					<br>
					<p class="infoTxtInput">Clave Catastral:</p>
					<input type="text" name="txtClvCat" placeholder="16 Dígitos" class="formText" maxlength="16" minlength="16" required />
					<br>
					<input type="submit"  value="Siguiente" class="btnLoginUno"/>
					<div class="marcaAgua">
					<img src="../../css/img/agua.svg" class="marcaAguaX">
					</div>
				
				</form>
		</div>
		

	</div>
</body>
</html>