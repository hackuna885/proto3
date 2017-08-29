<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0" />
    <title>Importador de Base de Datos</title>
    <link href="css/estilo.css" rel="stylesheet">
    <script src="js/jquery.js"></script>
    <script src="js/myjava.js"></script>
</head>
<body>
    
<header>
    IMPORTAR CSV
</header>
<section>
<form id="subida">
<table>
    <tr>
        <td><input type="file" id="csv" name="csv"/></td>
    </tr>
    <tr>
        <td><input type="submit" value="Importar"/></td>
    </tr>
    <tr>
        <td id="respuesta"></td>
    </tr>
</table>
</form>
</section>

</body>
</html>