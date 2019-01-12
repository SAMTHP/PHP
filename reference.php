<?php
// Passage par valeur et référence
$name = "Samir";
$age = 28;

// Passage par valeur dans une procédure
function modifyByValue($params1, $params2){
	$params1 = "modifié";
	$params2 = rand(0,25);
}

// Passage par référence
function modifyByRefence(&$params1, &$params2){
	$params1 = "modifié";
	$params2 = rand(0,25);
}

// Passage par valeur avec une fonction return
function modifyName($params1){
	return $params1 = "Modifié";
}
function modifyAge($params1){
	$params1 = rand(0,30);
	if ($params1 >= 20){
		return "Valeur supérieur ou égal à 20";
	} else {
		return "Valeur inférieur à 20";
	}
}

echo "Valeur non modifiée : <br>";
echo "Je m'appelle ".$name.", et j'ai ".$age." ans <br><br>.";

// modifyByValue($name, $age);
// modifyByRefence($name, $age);
$name = modifyName($name);
if (gettype(modifyAge($age)) == "integer"){
	$age = modifyAge($age);
}

echo "Valeur modifiée : <br>";
echo "Je m'appelle ".$name.", et j'ai ".$age." ans. <br>";
//echo gettype($age);
$ref_name = &$name;
$ref2 = &$ref_name;
// $name = "AbdRachid";
echo $ref2;

?>