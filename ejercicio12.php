<?php

/* 
Escribe un programa que muestre la dirección IP del
usuario que visita nuestra web y si usa Firefox darle
la enhorabuena.
 */

$ip = $_SERVER["REMOTE_ADDR"]; // saca la direccion ip 
$browser = $_SERVER["HTTP_USER_AGENT"];

echo "Tu IP es ".$ip;
// strstr buscan dentro de un string
if(strstr($browser, "Firefox") == true){
	echo "<h1>El navegador que usas es Firefox ENHORABUENA</h1>";
}else{
	echo "<p>NO USAS FIREFOX</p>";
}



