<?php
// Les constantes
define('COLOR', "Couleur");
define('PERSON', array("Personne 1","Personne2"));
define('PI', 3.14);
define ('FIND',false);

class Cercle{
	const PI = 3.14;
	const PERSON = "SAMIR";
	const TAB = array("INDEX 1","INDEX 2");
	const BOO = false;

}

$cercle = new Cercle();

echo $cercle::PI . "<br>";

echo COLOR . "<br>";
print_r (PERSON);
echo "<br>";
echo PERSON[1] . "<br>";
echo PI . "<br>";
echo (integer)FIND . "<br>";
$person = "7 personne";
$number = 3;
$result = (integer)$person + $number;
echo $result . "<br>";
echo (integer)$person . "<br>";
$float = 0142;
echo chr($float);
?>