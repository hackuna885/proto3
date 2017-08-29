<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Form Ajax</title>
	<script type="text/javascript">
		function formAjax(e){
			tecla = (document.all) ? e.keyCode : e.which;
		    if (tecla == 13){
		        alert('Hackuna');
		    }
		}
	</script>
</head>
<body>
	<form action="">
		<input type="text" onkeypress="formAjax(event)" />
	</form>
</body>
</html>