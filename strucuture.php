<?php

define('BR',"<br>");

$test = 11;
$vie = 5;
$perte = 10;

// Structure conditionnelle
echo "<strong>Structure conditionnelle :</strong>";
echo BR;

echo '$test = '.$test.BR;
echo '$vie = '.$vie.BR;
echo '$perte = '.$perte.BR.BR;

// Comparaison d'égalité
echo "Comparaison d'égalité ;";
echo BR;
echo 'if ($test == 10)'.BR;
echo "<strong>Résultat : </strong>".BR;
if ($test == 10){
	echo "La condition est vérifiée !";
} else {
	echo "La condition est false !";
}

echo BR.BR;

// Comparaison de grandeur
echo "Comparaison de grandeur ;";
echo BR;
echo 'if ($test > $vie)'.BR;
echo "<strong>Résultat : </strong>".BR;
if ($test > $vie){
	echo "La condition est vérifiée !";
} else {
	echo "La condition est false !";
}

echo BR.BR;

// Comparaison de grandeur avec plusieurs conditions
echo "Comparaison de grandeur avec plusieurs conditions ;";
echo BR;
echo 'if ($test > $vie)'.BR;
echo 'elseif ($test < $vie)'.BR;
echo 'else'.BR;
echo "<strong>Résultat : </strong>".BR;
if ($test > $vie){
	echo "Test est supérieur à vie";
} elseif ($test < $vie){
	echo "Test est inférieur à vie";
} else {
	echo "Test est équivaut à vie";
}

echo BR.BR;

// Les opérateurs logiques
echo "Les opérateurs logiques :";
echo BR;
echo 'ET => && ou and ou AND'.BR;
echo 'OU => || ou or ou OR'.BR;
echo 'OU exclusif => Xor ou xor'.BR;
echo 'N\'est pas => ! ou NOT ou not';

echo BR.BR;

echo "Test du ou :".BR;

echo 'if (true || true)'.BR;
if (true || true){
	echo 'Résultat = Vrai'.BR;
}
echo "<hr>";
echo 'if (true || false)'.BR;
if (true || false){
	echo 'Résultat = Vrai'.BR;
}
echo "<hr>";
echo 'if (false || false)'.BR;
if (false || false){	
	echo 'Résultat = faux'.BR;
}

echo BR;
echo "Test du ou exclusif : ;".BR;

echo "<hr>";
echo 'if (true xor true)'.BR;
if (true xor true){
	echo 'Résultat = faux'.BR;
}
echo "<hr>";
echo 'if (true xor false)'.BR;
if (true xor false){
	echo 'Résultat = Vrai'.BR;
}
echo "<hr>";
echo 'if (false xor false)'.BR;
if (false xor false){
	echo 'Résultat = false'.BR;
}

echo BR.BR;
echo "Structure SWITCH :". BR;
$age = 22;

switch ($age){
	case 5 :
		echo "J'ai cinq ans";
	break;

	case 10 :
		echo "J'ai dix ans";
	break;

	case $age > 12 :
		echo "Je ne suis plus un enfant";
	break;

	default :
		echo "Je ne connais pas votre age.";
	break;

}
?>