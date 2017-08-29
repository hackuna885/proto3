<?php 

include('busPadron.php');

 ?>


<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<title>Estado de Cuenta</title>
	<link rel="stylesheet" href="css/font-awesome.css">
	<link rel="stylesheet" href="css/formatoEdoCuenta.css">
</head>
<body>
	<div id="main-wrapper">
		<div class="hojaCarta">
			<header>

				<div class="c1">
					<img src="css/img/logoUno.svg" class="logo1">
				</div>

				<div class="c2">
					<div class="cabecera1">
						<img src="css/img/logoAno.svg" class="logo2">
					</div>
					
				</div>

				<div class="c3">
					<img src="css/img/logoDos.svg" class="logo2">
				</div>
			</header>
			<div class="liaPleca">
				<img src="css/img/lieaGris.svg" alt="">
			</div>
			<article>

				<div class="tablaUno">
					<table>
						<tr>
							<td>
								<i class="fa fa-map-o" aria-hidden="true" id="grande"></i>
								<p class="tEnca">m2 de suelo (terreno)</p>
								<p>
									<?php 
									echo $mtsTerrEstC; ?>
								</p>
							</td>
							<td>
								<i class="fa fa-home" aria-hidden="true" id="grande"></i>
								<p class="tEnca">m2 de construcción</p>
								<p>
									<?php 
									echo $mtsConstEstC; ?>
										
									</p>
							</td>
							<td>
								<i class="fa fa-industry" aria-hidden="true" id="grande"></i>
								<p class="tEnca">Uso - Tipo</p>
								<p>
									<?php 
									echo $usoEstC; ?>

								</p>
							</td>
							<td>
								<i class="fa fa-calendar" aria-hidden="true" id="grande"></i>
								<p class="tEnca">Fecha de corte</p>
								<p><?php echo $fechaCorte; ?></p>
							</td>
						</tr>
						<tr>
							<td>
								<p class="tEnca">Valor Terreno</p>
								<p>
									<?php 
									echo $valorTerrEstC; ?>
								</p>
							</td>
							<td>
								<p class="tEnca">Valor Construcción</p>
								<p>
									<?php 
									echo $valorTerrEstC; ?>

								</p>
							</td>
							<td>
								<p class="tEnca">Valor Catastral</p>
								<p>
									<?php 
									echo $valorCatEstC; ?>

								</p>
							</td>
						</tr>
						<tr>
							<td>
								<p class="tEnca">Meritos</p>
								<p>
									<?php 
									echo $meritosEstC; ?>

								</p>
							</td>
							<td>
								<p class="tEnca">Demeritos</p>
								<p>
									<?php 
									echo $demeritosEstC; ?>

								</p>
							</td>
						</tr>
						
					</table>
				</div>
				<div class="cuadroInfo">
					<p>También puede realizar su pago de impuesto Predial en las Oficinas de la Tesorería Municipal. Oficinas Centrales (Plaza Bicentenario), Tel 53-71-25-00 ext. 182. Oficinas en Plaza Town Center, Tel. 22-10-91-72. Oficinas de Colmena, Tel. 22-10-06-37.</p>
				</div>

				<div class="cuadroEdoCuenta">
					<div class="c1EdoCuenta">
						<p class="cCatastralEst">
							<?php 
								echo $cCatastralEstC;
							 ?>
						</p>
						<img src="css/img/estadoCuenta.svg" alt="">

					</div>
					<br>
					<div class="cTfPago">
						<div class="cfPago">
							<div class="numero">1</div>
							<p class="txtCuadro">Pago en ventanilla BBVA Bancomer:
							<br>
							<b>Convenio CIE: 1413325 y Referencia.</b>

							</p>
						</div>
						<div class="cfPago">
							<div class="numero">3</div>
							<p class="txtCuadroG">Transferencia Interbancaria.
							<br>
							<img src="css/img/logoSPEI.svg" class="logoSPEI">
							<b>CIE INTERBANCARIO
							<br>
							012914002014133252
							</b>

							</p>
						</div>
					</div>

					<div class="cTfPago">
						<div class="cfPago">
							<div class="numero">2</div>
							<p class="txtCuadro">Portal Bancario Cliente BBVA Bancomer:
							<br>
							<b>Convenio CIE: 1413325 y Referencia.</b>

							</p>
						</div>
						<div class="cfPago">
							
						</div>
					</div>
					
					<div class="cTfPago">
						<div class="cfPago">
							<div class="c1FPago">
								<p>
									Línea de Captura o Referencia:
									<br>
									<b>
										<?php echo $lineaM1EstC; ?>
									</b>
									</p>
									<p class="txtChico">
									Importe con descuento por pago Anticipado:
									</p>
							</div>
							<div class="c2FPago">
								<p>
									Vence:
									<br>
									<b>
										<?php echo $fechaVenUno; ?>
										<br>
										<?php echo "$".$totM1EstC; ?>
									</b>
								</p>
							</div>
						</div>
						<div class="cfPago">
							
							<div class="c1FPago">
								<p>
									Línea de Captura o Referencia:
									<br>
									<b>
										<?php echo $lineaM2EstC; ?>
									</b>
									</p>
									<p class="txtIzq">
									Importe:
								</p>
							</div>
							<div class="c2FPago">
								<p>
									Vence:
									<br>
									<b>
										<?php echo $fechaVenDos; ?>
										<br>
										<?php echo "$".$totM2EstC; ?>
									</b>
								</p>
							</div>
						
						</div>
					</div>

				</div>
				<div class="cuadroInfo">
					<p>Propuesta de Declaración de Valor Catastral y pago del impuesto Predial que se emite con fundamento en los artículos <b>108, 109 y 112</b> del código Financiero del Estado de México y Municipios.</p>
				</div>

				<div class="cDatosCont">
					<div class="datosC">
						<p class="txtDatosCont">CONTRIBUYENTE: <b><?php echo $propietarioEstC; ?></b>
						<br>
						UBICACIÓN DEL PREDIO: <b><?php echo $domiciloEstC; ?></b>
						<br>
						COLONIA: <b><?php echo $coloniaEstC; ?></b>
						</p>
					</div>
					<div class="promoInfo">
						<p class="txtCPromo">Realiza tu pago anual y obtén un descuento: Del 1 al 31 de <b>Marzo del 4%</b></p>
					</div>
				</div>

				<div class="txtCentradoInfo">
					¡SI YA REALIZO SU PAGO, HAGA CASO OMISO DE LA PRESENTE!
					<br>
					¡IMPORTANTE!
				</div>

				<div class="cuadroInfo2">
				
					<p>El presente estado de cuenta es informativo. Si requiere detalles de adeudos por  favor acuda a las oficinas de la Tesorería Municipal Oficinas Centrales (Plaza Bicentenario), Tel: 53-71-25-00 ext 182. Oficinas en Plaza Town Center, Tel: 22-10-91-72. Oficinas de Colmena, Tel: 22-10-06-37.</p>
				</div>
				
			</article>
			<footer>
				<p>
				<a href="#" class="sociales">
				<i class="fa fa-facebook-square" aria-hidden="true" id="iconSocial"></i>
				H.Aytto.NicolasRomero
				</a>
				<a href="#" class="sociales"s>
				<i class="fa fa-facebook-square" aria-hidden="true" id="iconSocial"></i>
				TesoreríaNicolásRomero
				</a>
				<a href="#" class="sociales">
				<i class="fa fa-twitter-square" aria-hidden="true" id="iconSocial"></i>
				_NicolasRomero_
				</a>
				<a href="#" class="sociales"s>
				<i class="fa fa-twitter-square" aria-hidden="true" id="iconSocial"></i>
				_@TesoreriaNR
				</a>
				</p>
			</footer>
		</div>
	</div>
</body>
</html>