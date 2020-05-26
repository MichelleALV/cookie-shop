<?php

print "HOLA PHP";

echo  "Hola", "Hello<br>";


$numeroCinco = 5;
echo "variable: $numeroCinco ";
var_dump($numeroCinco);#cantidad de caracteres

$palabra = "palabra";
echo "variable letra $variable ";
echo <br><br>;

$boleana = true;
echo "variable booleana: $boleana";

$colores = array("rojo", "amarillo");
echo "variable arreglo: $colores[1]";

$verduras = array("verdura1"=>"lechuga", "verdura"=>"cebolla");
echo "variable arreglo con propiedades: $verduras[verdura1]";
$frutas = (object)["fruta1"=>"pera", "fruta2"=>"manzana"];
echo "variable objeto: $frutas";
#funcion sin retorno
function saludo(){
	echo "hola";
}
hola();
#funciones con parametro
function despedida($adios){
	echo $adios;
}
despedida("adios");
#funciones con retorno
function retorno($retornar){
	return $retornar;
}
echo retorno(retornar);
#condiciones

?>