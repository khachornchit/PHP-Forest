<?php
//http://www.anwaltssekretariat.de/setAuthCookie.php?auth=hssfenos63iwz8ovwbvjklbvfijo34z8

include ("sitefunctions.php");

$asValidAuthkeys = array (
		'hssfenos63iwz8ovwbvjklbvfijo34z8', // Manageo
		'g41sYnAkts2LAi8121nQFSWOfLP2m5x2', // Natexo
		'Axh41N6qet14oDlv3YPDuG1l268PQr7x', // eGentic
		'r9597t9O9k94L4uvuCoG02g8njDY4Z22' 
) // bueroservice24.de
;

if ($_GET) {
	if ($_GET['auth'] == "hssfenos63iwz8ovwbvjklbvfijo34z8") {
		redirectto ( 301, "http://www.anwaltssekretariat.de" );	
	}
}
?>