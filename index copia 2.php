<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Form Ajax</title>
	<script type="text/javascript">
		function formAjax(e){
			tecla = (document.all) ? e.keyCode : e.which;
		    if (tecla == 13){
		        formAjax2();
		    }
		}

		function formAjax2(){

			var conexion;

			if (window.XMLHttpRequest) {
				conexion = new XMLHttpRequest();
			}else{
				conexion = new ActiveXObject("Microsoft.XMLHTTP");
			}

			conexion.onreadystatechange=function(){
				if (conexion.readyState==4 && conexion.status==200) {
					document.getElementById("midiv").innerHTML=conexion.responseText;
				}
			}

			conexion.open("GET","valida/valida1.php",true);
			conexion.send();
		}
	</script>
</head>
<body>
		<input type="text" onkeypress="formAjax(event)" />
		<br>
		<div id="midiv"></div>
		<button type="button" onclick="formAjax2()">Continuar</button>
</body>
</html>