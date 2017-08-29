<?php 

header("Content-Type: text/html; Charset=UTF-8");
error_reporting(E_ALL ^ E_DEPRECATED);

$db = new SQLite3('../data/tiempo.db');

$consultaPadron = $db -> query("SELECT * FROM lineasMz WHERE cCatastral = '099010010100000D'; ");

while ($resPadron = $consultaPadron->fetchArray()) {

	$zNEstC = $resPadron['zN'];
	$pSEstC = $resPadron['pS'];
	$cCatastralEstC = $resPadron['cCatastral'];
	$propietarioEstC = $resPadron['propietario'];
	$domiciloEstC = $resPadron['domicilo'];
	$idColEstC = $resPadron['idCol'];
	$coloniaEstC = $resPadron['colonia'];
	$mtsTerrEstC = $resPadron['mtsTerr'];
	$mtsConstEstC = $resPadron['mtsConst'];
	$usoEstC = $resPadron['uso'];
	$valorTerrEstC = $resPadron['valorTerr'];
	$valorConsEstC = $resPadron['valorCons'];
	$meritosEstC = $resPadron['meritos'];
	$demeritosEstC = $resPadron['demeritos'];
	$valorCatEstC = $resPadron['valorCat'];
	$periodoEstC = $resPadron['periodo'];
	$impM1EstC = $resPadron['impM1'];
	$descM1EstC = $resPadron['descM1'];
	$cumM1EstC = $resPadron['cumM1'];
	$totM1EstC = $resPadron['totM1'];
	$impM2EstC = $resPadron['impM2'];
	$recM2EstC = $resPadron['recM2'];
	$totM2EstC = $resPadron['totM2'];
	$lineaM1EstC = $resPadron['lineaM1'];
	$lineaM2EstC = $resPadron['lineaM2'];
	$bimestreEstC = $resPadron['bimestre'];
}

$db->close();

switch ($bimestreEstC) {
    case "1":
    	$mesUno = 1;
        $mesDos = 2;
        $fechaMesUno = "ENE";
        $fechaMesDos = "FEB";
        break;
    case "2":
    	$mesUno = 3;
        $mesDos = 4;
        $fechaMesUno = "MAR";
        $fechaMesDos = "ABR";
        break;
    case "3":
    	$mesUno = 5;
        $mesDos = 6;
        $fechaMesUno = "MAY";
        $fechaMesDos = "JUN";
        break;
    case "4":
    	$mesUno = 7;
        $mesDos = 8;
        $fechaMesUno = "JUL";
        $fechaMesDos = "AGO";
        break;
    case "5":
    	$mesUno = 9;
        $mesDos = 10;
        $fechaMesUno = "SEP";
        $fechaMesDos = "OCT";
        break;
    case "6":
    	$mesUno = 11;
        $mesDos = 12;
        $fechaMesUno = "NOV";
        $fechaMesDos = "DIC";
        break;

}

$ano = (int)substr($periodoEstC,0,4);
$uDiaMesUno = date("d",(mktime(0,0,0,$mesUno+1,1,$ano)-1));
$uDiaMesDos = date("d",(mktime(0,0,0,$mesDos+1,1,$ano)-1));

if ((int)$bimestreEstC > 4) {
	$xCero = "/";
}else{
	$xCero = "/0";
}

$fechaCorte = $uDiaMesDos."".$xCero."".$mesDos."/".$ano;
$fechaVenUno = $uDiaMesUno."/".$fechaMesUno."/".$ano;
$fechaVenDos = $uDiaMesDos."/".$fechaMesDos."/".$ano;

?>
