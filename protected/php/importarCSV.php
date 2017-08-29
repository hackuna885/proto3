<?php


error_reporting(E_ALL ^ E_DEPRECATED);
header("Content-Type: text/html; Charset=UTF-8");


if ($_FILES['csv']['size'] > 0) {

	$csv = $_FILES['csv']['tmp_name'];

	$handle = fopen($csv,'r');

	while ($data = fgetcsv($handle,1000,",","'")){

		if ($data[0]) { 

			$con = new SQLite3("../data/tiempo.db") or die("Problemas para conectar");
			$cs = $con -> query("INSERT INTO lineasMz (id,zN, pS, cCatastral, propietario, domicilo, idCol, colonia, mtsTerr, mtsConst, uso, valorTerr, valorCons, meritos, demeritos, valorCat, periodo, impM1, descM1, cumM1, totM1, impM2, recM2, totM2, lineaM1, lineaM2, bimestre) VALUES('".$data[0]."','".$data[1]."','".$data[2]."','".$data[3]."','".$data[4]."','".$data[5]."','".$data[6]."','".$data[7]."','".$data[8]."','".$data[9]."','".$data[10]."','".$data[11]."','".$data[12]."','".$data[13]."','".$data[14]."','".$data[15]."','".$data[16]."','".$data[17]."','".$data[18]."','".$data[19]."','".$data[20]."','".$data[21]."','".$data[22]."','".$data[23]."','".$data[24]."','".$data[25]."','".$data[26]."') ");
			$con -> close();		
		}

	}

	echo 'OK';

}
?>