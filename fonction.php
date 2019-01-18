<?php

define('BR',"<br>");
define('ST',"<strong>");
define('STD',"</strong>");

// Etude des fonctions

// Déclaration de fonction avec deux paramètres
echo ST."Fonction avec deux paramètres :".STD.BR;
echo 'function addition($elem1, $elem2) :'.BR;
function addition($elem1, $elem2){
	echo $elem1 + $elem2;
}
$num1 = 25;
$num2 = 26;
addition($num1, $num2);

echo BR;
echo "<hr>";
echo BR;

// Déclaration de fonction avec un paramètre et un retour
echo ST."Fonction avec un paramètre et un retour :".STD.BR;
echo 'function donneLeContraire($arg) :'.BR;
function donneLeContraire($arg){
	$msg = "";
	if($arg == "oui"){
		$msg = "La valeur contraire est non !";
	} elseif($arg == "non"){
		$msg = "La valeur cntraire est oui !";
	} else {
		$msg = "Merci de me dire oui ou non !";
	}
	return $msg;
}
$contraire = donneLeContraire("oui");
echo $contraire;

echo BR;
echo "<hr>";
echo BR;

// Déclaration de fonction avec un paramètre ou argument facultatif
echo ST."Fonction avec un paramètre ou argument facultatif :".STD.BR;
echo 'Déclaration de la fonction : function test($arg = "nothing") '.BR.BR;
function test($arg = "nothing"){
	echo "Bonjour ".$arg;
}

echo 'function test("Yasmine") avec argurment :'.BR;
test("Yasmine");
echo BR;
echo BR;
echo 'function test() sans argurment :'.BR;
test();

echo BR;
echo "<hr>";
echo BR;

// La portée des variables
echo ST."La portée des variables dans une fonction :".STD.BR;
$var = "rien";
function porter(){
	global $var;
	$var = "Samir";
}

porter();
echo $var;

echo BR;
echo "<hr>";
echo BR;
?>